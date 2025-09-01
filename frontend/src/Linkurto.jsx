import { useState } from 'react'
import React from 'react'
import './Linkurto.css'

function Linkurto() {
      const [content, setContent] = useState("");
      const [expires_at, setExpires] = useState("1h");
      const [link, setLink] = useState("");



const handleSubmit = async (e) => {
  e.preventDefault();

  const data = {
    content: content,      // seu state do textarea
    expires_at: expires_at // seu state do select
  };  

  try {
    const response = await fetch('http://localhost:8000/save.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(data)  // aqui você envia os valores
    });

    if (!response.ok) throw new Error(`Erro na requisição: ${response.status}`);

    const result = await response.json();
    setLink(result.link);
    console.log(result);
  } catch (error) {
    console.error('Erro no fetch:', error);
  }
};



return (
    <div className="Linkurto">
      <form 
      onSubmit={handleSubmit}
      >
      <section id='main-section'>
        <section id='title-section'>

        <span id='title'>Linkurto</span>
        <span id='subtitle'>Compartilhe o que vê com todos, em segundos.</span>

        </section>

           <textarea 
           name="linkInput"
           id="linkInput" 
           placeholder="Fale o que quiser..."
           value={content}
           onChange={(e) => setContent(e.target.value)}
           ></textarea>

        <section id='input-section'>

          <button type="submit">Gerar</button>
          <span>Expira em:
            <select 

            name="select-time" 
            id="select-time"
            value={expires_at}
            onChange={(e) => setExpires(e.target.value)}
            
            >
              <option value="5 min">5 min</option>
              <option value="15 min">15 min</option>
              <option value="1 hora">1 hora</option>
              <option value="8 horas">8 horas</option>
              <option value="1 dia">1 dia</option>
            </select>
          </span>

        </section>

      </section>
      </form>

          {link && (
            <div className='mt-4'>

              <p>Seu Link:</p>
              <a href={link} className='text-blue-600 underline'></a>
                {link}

            </div>
          )}

    </div>
  );
}

export default Linkurto

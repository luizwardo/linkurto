import React from 'react'
import './Linkurto.css'

function Linkurto() {
  return (
    <div className="Linkurto">
      <section id='main-section'>
        <section id='title-section'>

        <span id='title'>Linkurto</span>
        <span id='subtitle'>Compartilhe o que vê com todos, em segundos.</span>

        </section>

           <textarea name="linkInput" id="linkInput" placeholder="Fale o que quiser..."></textarea>

        <section id='input-section'>

          <button type="submit">Gerar</button>
          <span>Expira em:
            <select name="select-time" id="select-time">
              <option value="1000">5 min</option>
              <option value="2000">15 min</option>
              <option value="5000">1 hour</option>
              <option value="5000">8 hours</option>
              <option value="5000">1 day</option>
            </select>
          </span>

        </section>

      </section>
    </div>
  )
}

export default Linkurto

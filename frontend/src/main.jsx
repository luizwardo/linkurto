import React from 'react'
import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './index.css'
import Linkurto from './Linkurto.jsx'

createRoot(document.getElementById('root')).render(
  <StrictMode>
    <Linkurto />
  </StrictMode>
)


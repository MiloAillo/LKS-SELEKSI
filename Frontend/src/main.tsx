import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './index.css'
import "../node_modules/bootstrap/dist/css/bootstrap.min.css"
import "../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"
import { createBrowserRouter, RouterProvider } from 'react-router-dom'
import Index from './pages/index/Index.tsx'
import "./bootstrap.css"
import Dashboard from './pages/dashboard/Dashboard.tsx'
import DataValidation from './pages/data_validation/DataValidation.tsx'
import Installment from './pages/installment/Installment.tsx'
import ShowInstallment from './pages/installment/ShowInstallment.tsx'

const route = createBrowserRouter([
  {path: "/", element: <Index />},
  {path: "/dashboard", element: <Dashboard />},
  {path: "/validate", element: <DataValidation />},
  {path: "/installment", element: <Installment />},
  {path: "/showinstallment", element: <ShowInstallment />}
])

createRoot(document.getElementById('root')!).render(
  <StrictMode>
    <RouterProvider router={route} />
  </StrictMode>,
)

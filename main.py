# chamando o driver para abrir o chrome
from selenium.webdriver import Chrome
from selenium.webdriver.common.by import By

# caminho -> C:\Users\aluno\Documents\oficina\chromedriver.exe
navegador = Chrome("C:/Users/aluno/Documents/Palestra/oficina/chromedriver.exe")

navegador.get("https://www.acordacidade.com.br/")
elemento = navegador.find_element(By.CLASS_NAME,"txt-noticia")
text = elemento.text
elemento.click()
print(text)

navegador.get("https://discord.com/")
elemento1 = navegador.find_element(By.CLASS_NAME,"h1-3dtzWh")
text1 = elemento1.text
print(text1)
elemento1.click()
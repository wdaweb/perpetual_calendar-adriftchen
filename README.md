# 萬年曆

### undefined index:y and undefined index:m fixed
*  改用並檢查if(isset)判斷式得到當前年月。但此時prev、next無作用

==老師請幫我看這段檢查是否正確，謝謝~==
### prev、next無作用
1. 檢查網址列php後是否帶值 (如?year=2020&?month=11)
2. 檢查prev/next year&month 判斷式是否有誤
3. 檢查按鈕的年月變數是否有誤 (此變數為if(isset)中$month=$_GET['month']及$year=$_GET['year']傳回的)
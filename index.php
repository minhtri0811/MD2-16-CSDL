Truy van du lieu tu 1 table:
SELECT * FROM customers

Truy van 1 so cot nhat dinh tu table:
SELECT customerName, phone, city, country FROM customers

Dung WHERE de lua chon du lieu dieu kien mong muon:
SELECT * FROM customers WHERE customerName = 'Atelier Graphique'

Dung LIKE de lua chon du lieu match voi regex:
SELECT * FROM customers WHERE customerName LIKE '%A%'

Dung IN de loc du lieu trong mot danh sach:
SELECT * FROM customers WHERE city IN ('Las Vegas', 'NYC')

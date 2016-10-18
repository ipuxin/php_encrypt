<?php
$filename='img/gom_icon.png';
/*
 * 获取图片的二进制编码
 */
$data = file_get_contents($filename);
/**
 * 写入文件(测试用)
 */
file_put_contents('base64.png',$data);
/**
 * 获取base64编码
 */
echo base64_encode($data);
?>
<img src="img/gom_icon.png" alt="">
<hr>
<img src="data:image/jpeg;base64,
iVBORw0KGgoAAAANSUhEUgAAALwAAADJCAYAAACZpljZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5MTc4MzQ3OUEzNzYxMUU0OEQ4RDlEQkREQkE1QzhFMyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5MTc4MzQ3QUEzNzYxMUU0OEQ4RDlEQkREQkE1QzhFMyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjkxNzgzNDc3QTM3NjExRTQ4RDhEOURCRERCQTVDOEUzIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjkxNzgzNDc4QTM3NjExRTQ4RDhEOURCRERCQTVDOEUzIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+IgBGkQAALr9JREFUeNrsnQl8VNW9x8+dTNbJvocsBAJEdgSCGkEEEVGx7krVZxGrtVW6Wu1rfX3a19raaltX5ClYfYpIBUENmywikCAJS4AAIfu+Z5JZMpnJzL3vnEsSJ5O5955zl9ly/5/PzSyZ7Z7zPf/7+//v/5yrBaopYZRMn8OoTSmvadUm8BrMcn2XOihU4P0ObCV+pzoQVOAVA9xTg4OR8JvUATDGgacUeA+lMOhSvLk6AMYg8JQMr6UUHFBcQFICr6NEDAJqLMKvVSEXfC0l8bMpkaBTIgcDIwLoMQO/doyDTgI4JdMgARLhE/LoFMbrGYzvZ1TgxxbkQs9J9fxS95HBhJoS6f0D0utrxzDoFOFrKBGfR/J/RgJ0lMAAwIF/THh97RgDncRrcwEt5QhBsi+MANSUwEBhCGIEZqyA73XgGYa87ShoEr05RXAf670FBQVJM2bMmBwZGZkdEhIyHm5ZGo0mAf4rAd7Gw58cP9jeWng/cnDfTfDGjjZ4v5um6W54H9122my2erjVmUym2nPnzlXceuutHRiQk8Lozstjyx1GTOeN7kufzWB4HXiFQMd9bvj+7t27x82fP//qiIiIvODg4BlBQUEz4E9LVrid2h0Ox7mBgYFzfX19xSdPnvx2+fLlTRx63vU+7nO4j11/G6MCLzPwArCTenC+50b978MPP4xfsWLF0qioqBu1Wu1C6LGzfeHwDI8EtXa7/YjRaPwKDsIDDz30UDcG4CTwY4MvFnoVeGlenRR0ztccOHAgE3rxO8LDw++EkM+HTwX5uDx1QPhLLBbLjpKSkm1Lly5tEIBaLPiyentPAw98AXh3mxOQXJvGaQty2rROW/DgFjK4hQ5uYYNb+OAWgbb169en6fX6n0HZUAR/A834r9FoH3p7e3+G9mlo/5z2d2j/h9pjqH2G2su5DZ3b1rnNefuHq1/d9LPq4Qnki1AmBeeWqqioyMvIyPhhaGjonfCrIwLMoVisVuu2pqamDZMmTTru4t1Jb4k8Po63H/MeXqJX5/PoI7x5bm5uVGtr6wPQEx5jxoihfUX7jPadw+sLeXxib+9rHt5ngJdJvgiBrlu2bFlMR0fHjxwORyUzRg3uewVsg8cGwddhgq9VAvwxKWlEShi38oTjOSopKYkqKyu7OyEh4TmNRjMJqIayPOWdnZ0vzpgxYxscAIyT3HEnaXCyPcQSZ8xlaQBeURZOGpFyBzp6UFlZuWD8+PEvabXaPBXz0Wa324vr6uqeHdT4gAN8HH0vCL4r9J4GXuPHsLtKnlH3t2zZkmyxWN7NycnZr8LObahtUBvBttqwdevWFKF25TiaCiUUcNPMAenhcSQMiVcf8TgxMVFz4cKFB6B8+TNs3zgVaSKJqe/q6vrt1KlTP4Jyh+bw9CTenlfijAUPLwfs7jwOGzh99dVXWc3NzTsg9G+rsIvoHNhmsO3WoTbct2/feI6AVMMTM/H1pde9PeUj34crYTi9Otra29vvhZ31T9iO0Sq6snh7A/Tyv0hOTt7Co+v5dD5uQOuxdI3GR2GnMDfW+zz99NM6qD/XJSUlbVRhl9XbR8M23QDb9m3UxgDzLCumxveK46V8FHZBnT60HT58OCc/P3+TRqOZpiKqnNE0fb6wsPCBRYsWVbl4dyn63uOenvJh2LmAHzoqaWpra5dlZWW9Bz1RjIqkRyROb319/Zrs7Oyv0BgYGgsEEsfr0FNehp1Er4/Yurq61sTHx78M1MWkPG327u7uXyckJGxw4+lJdb3Hodf4G+wQco3JZPoDvP2nCrtXTAvb/h+wD/4H9QWGfheTwaH8EXixsHOd5NDMnDkzuLGxcb1Op/u5yp13DfbBz5qamtajPuHqL8wA1qOZQo3CYIuB3fm54cKk2267LbS4uPi98PDwVSpuvmFhYWGrUJ+gvgGji8gAQdZG7rV9PO7FcaodXascXasbURoMTXaOgg2a2N/fv4tRzScN9s0e1Eeorwb7TAdGV1+6Vl3iVlv6dNCKuwwGn04HzjsPD5la5EVCQ0NvV32q75rVat2Rl5f3yNmzZ+0CwayY7A3ji8DjBqnYJ5fi4uI0UCeugzLm+ypSvm8Wi2Vzenr6E3q9npYAvaKZG6WBFw078vK9vb3PR0dHqwGqH5nBYPhnTEzM8+Byfl5O6GUBXuMjsI/K0nR0dDyqwu5/hvoM9R1PloYvkFU8iNV4CXbX942ou66qqlqWmJj4VxUf/zTUd6gPweh6eoDBg6LQazwAOxDYuRGNUlBQMAHaO8D314FRjduCYB++i/oSuJ9EwgU9UBp6T5x4crfgkduTE48//njE8uXLP1Dr2P3fYB/Gor5EfQqET0hxga8IjN4MUkeMfpPJ9IZOp3tQxSVwzGw2fxQZGfmUSxBLeyuI1SgweERlZOrq6m5XYQ88Q31aX19/B8Cvo8fV8x718LjeXWjyBnu7efPmjPvuu+8wOgx61Rv1WcCBI8Xg21PngG1gAGg0GpCWnABuvO5qMG3KRJVekcYwTM+WLVsWrVq1qtHJu+OkLWX38pTCsAM+0NFtdHR0UHt7+9bQ0NDrPd0RRpMZhIaEgJCQYHD2YiX4ZMcecKjoBITdPuJ1WempYOWN14E7VywB0VE6lWARZrVav05OTr7bYDA4XICnAX5psWTo5QCeRMqMitibmpoeGDdu3Jue7oCq2gbw2obNICEuBiQmxIH9R46DxuY23vfcvCQf/OqJ/wBRkSr0Yqy5ufnJ9PT0TW5ApyXoeSLggyTCLknKvPHGG8lLly7dBKVMuEe9jc0G3t20Hew7fBxU1NSD0rJLwGA0C76vEg6ShPhYMOMKdeEyMQaD1/ykpKSPd+7c2Sc1+BTrtOXKw2PNP3WRM5rVq1e/4I0U5Mef7QYF+46Ieu+nX+4XPBK4xgXHT5eBHoNxzAOP+hr1ORhZHcm3wJPQUiCKZmlIZjC5Ph7l6Y8dOzYPRvD3e7rRyy5Vg39/uQ8M2O2i3t/Q3AqKTpzBem2/1QbeeO8TsGnbLmC3O1QXfzlrcz/qe8BfCkxyIopoEEjx8FzyRnCLiorSzJ0790XghSL/r4+WgM7uHsmDRmjAIM/+JoT9QkUNeOT+74HE+FiV9kFGUN8jBgDZch9SY08i4HEDVRzwNadPn749ODh4vqdb+nRZOThQWCz5c5Ck6e+3cv4fDYb3t3wBPi3YD+6//SYwe/oUFXMnQ31fWlqKk5snZU5xDc8FOSf4OTk52qysrGc93cgIwl0HjhLpb7FWfPo82LrzAFrLBez9uhAcP3WOva/ad5aZmfkMYgFD2shacqDFBFlKVmbEtn///nu0Wq3HXV5QUBDISk+Tp7PSU0FoaKjb/yGwjxafBibz5UREYckZcPZCJVh09Vxw581LwKypk1XaAbti8RTEQnZ29mbCwHToWrLOt85sMp7I0gh5fFbKpKamBmVkZPzKGw2soShw43VXyQLclTNyQUjwSF+BTmKhk1d//9+PwJ6DhSP/B+Hfuf8I+O+/vQ0OFpaotA8aYgExwZOpkRSgivXwQtEyTl0Eux06dOhm6Gm9do4+OTEeLL5mHjhXXiVaYkzPzWE/o8/SD06duwg6uvRw62GD05PwsQU+z2XNbR3wPeVgSf58lfbLR92JiInc3NwCJ04YAegZF28u6NVJgBcz0jgHADx8/dTbjZydOQ5EhIcNSw4SC4fve/jelcACA9a/bXwfSpdSFnxcmz1tMrgLyhrVnPrjMhM7AXfeneFgjOHhj5HLw5N49xFbYWHh/JCQkHnebuD6plbQb7WKem/O+AzQ02sEv/7DP8Cl6nrO100cn86+dmDADmiGAeFhoWDKxPFgGZRUqUkJKuVOhphAbOTn5xcD/BNNDK5mJwEe93LurvC7DWhnzpz5sLcbF8FXU98k+iRQfVMLeH3jZs6jAwqMl0OoH773NjAuNQkwUDYx7PMatkhNNfc2yEaJG1nD8Hh6igd8zoFAGrTyeXfX54YDkbVr18bodLo7vN2wKHAdnyE+U4Pqbbhgj42OAk+uvhc8+9QjrIcPCw1hJRCSTyrs/IbYQIwA4WX6cM7KAjmyNBTG/zkD2qeffvoeTxeIcQGLAke5DQWyL/z6CfDAnTez8kU1Qi8K2UCM8MBMYTIoWtIIVUVie3e0oTpobzcqulpiwf7D4Iu9h2T7TFQmfN9ty8BdtywFifHqNFwplpqaihjZ6MIQ7SJpuPQ8JSB5iDw8RfCaUd593bp1GWFhYV7Pw6EAEp0Acp3cIcaQXMnPmw3++OxPwOMP3a3CLk/wOn/9+vWZAl5eMqtS8/CC67l/Dxrw8kqwtY0t4MOtBaCwpFTyZ6GZT6tuXw4yUpNZja6afMpm5cqVt8HbtzjUA+PG28uShyddEJUPfE18fPyt3pYyO/chKfONpM9Bwefdt94A1qy6nb2PrNdoAlG6CHbuq2rSDbKyEt68DUaefHK9Dzhgx5I1Qj1FUjow6rlnnnkmFsqZud5sRIeDZkt1pWZ3HrzrZvDUI/cPw/7x9t3sFEGT2aKSKpNBVq5EzOCwJVbWkE4AoTAi6eFtzZo16LSiV1cQQyUEknU7BH5iVgZ7t62jG2z4eDt4feMn7EBAE8BVk82CIDNLAf4lMImrKcVUS+Jmbqi0tLTrvR6s2u3SPbyGAnVNLWD3wULWs1+srAXLF18D1q5ZxQawqslng8xs42BKSLML6nmtiIyMULA6/JxOp8v3dgMiSWMRWUrwXRwAwL+/+Iqtm0F1NEizX5s3W12yQwGDzFwrwBff2VfBQaDB9OxCBfqjBsMrr7ySFhQUlOkLHr5L4pQ+h8MBuvS9LOxDgfAnn+8FlTUNKqFya5qgoPR169Zl8bFFILOJNbxQRSTnF69YsSLP242HSnW/3HcY1DW2yJ75OX+pGrz05r9AeVWtSqnMtnjx4nkiHK3sQSuO53c+u+rVykg0Ufu1jZvB+v/byq4eoISduVABnnvpLXZyh2ryWVJS0hyAN9eV+PyOhgdkrsBUaJSxz4eHh0/1ZqOVnr/E5t6RHFHSULnxX996H2zcvGNY8qgmzQbZ4eWLJ57k5VnqqgWcQWtYWNgV3mw0JDtQWa4choJUvmwMAv09CPzeQ0UqrTIYZGcqIK+SlLxqAU7Nu9tSg+effz4ZBh9JXg1+IKSoPl0Om5A5DvzyRw+Be1Yu46yGRLn+9z75HBQWl7KDTTVJgWsiYgjwz7EQUhmyaXg+ycPeLlq0aIK3G02rDWJPDMlhqCry+vz54Nc/fhj84vEHQW7OeLakgHL5/Ja2TnDs1DkVeBlskCG+2U+iOhd3TitFIGtQqafX05Ex0VEgIiKMXTFAcrYHShaj0QxioiLB7TddD+bNmsbOnEKLq7Z3drN19g6aBtkZaWDlskVqbY0MNsjQMR45w7hhUbCYDKd4DAf0EY9jYmKyvN1gaBns2OhothRAejxAs9MDhywjLZndFl11JStl7IPL7iG5Q1GUSqsMFh0dnckToOJO7Rv1Wi1BAIBzdpW9jYiI8LqHj9LpoEeW50woRWk4vTZan8Z1jRrVpJtOp8sCwot+4c55laThBdeIDw4O9vrKoWHQ26YmJ8oWD2iDVJniSXNiSNZLWOLOeMKROcM/DEXZXm8wCGlcTJQsnzVUQ6OaZzM1BDEkX8YGG3iciSBuc6Pwx3p9zhvS0jo3mRQx1tzaAS5W1akUehb4OBLmcD2/lAkgnLIG/thIn9CB4WGyZEzQJXJaFFjtQDVe4KOAuAshENXSiKl9H6WzoFcNuMmeqAYeTelTzWNH6FAODU9aU0OJCVpxAgfnW5+I8NCiSXLV0hw5fhrs/VotHfCkkwd4y+4RXftJI0fk6/qlUEZ4fWYEAr1T3yvr5+2GwKsXJ/OMQYYixAAtxLIGkK/oRPrYK4ZKglGwKaehGnjXtd9VU1bZyMweJXUCiFsdRdO02dsthUoK9L0GWT8TTQj/4NOdoPR8hYqiwgbbuo+DQ6GJ26ImgEhK8jM+UD2FpvV19xhk/9zObj149d1NoKm1XaVSQWNQPYcE6cLFK2keHkvDQ7074O0Gq6prZK/OoYSVlVeBF15ZD85drFTJVC4Gs0vQ8LKVB+OMJMpqG/D6acnGlnZFZzshWfPcX98CB44Uq3QqYJChfoBf44UfDIsAXfA6mSZzn1eBR+lIVL6rtKH69xdf2wA+2rZLJVT+PrRiBKfE9fFSJ4C4/SE9BqNXJc2l6jpw8uxFjwXHb72/BXy4dadKqYzmxBDpZeh5TerKY25fYzSZvQp8UclZURctE2voEjr/++E2towBTQNUy4VlcCSjGcLlEPs6rXLlz6mG5labNxuLAZ5PEqF6G3T9pz+9+q7s6+CMRWtoarHJyaQYSUPh/9hWuzcbC8059YahPD1af/L5V9aD2oZmlVopwDe32ZVgUyPn6BmyusZWhzcba1xqsldlBToj++6mzxRbAGosWG1DCy0FbCkanhj8ypp6r3p4NJn60e/fwV5xG9XDh4YEs9P0oNRir5jtCUOXmL/p+nx23qtq5FZV2zCggNwGirjBlvZOm8FoGoiOivTK4um6iHD2itlmdJVshkHTxdjn0fJ7FytrWLlRWdsIPXEVu0gqTTOiL0XPF8gePFqsAi/CDDBghQwpkvhQBHh0GcLa+ibLrOm5XrtaAMqYoLVjnG1otQFU+dDfb2Xr2w2mPqDvMYBdB4+y+lvOqohvT5WBMihvpk+ZqFJMImfqGi1KzalQrG69prHF7KsNimQOuiAZmuQ9ZWIWuGruDDBr6mTZvwfV3fxj/Yfs2jWeNlTrg06M+aMpyY4iwEMvaTl7ocLsLw2MZI1tYIC9wLDcdvZiJXjxtY2gtaPLI/uCyinQ2vXP/PFV8OyfXgVvf/ApG7vwGe1jK6WVlVeZIUP9fiNpkBWfPuc38+HQhQ0y0lLYq3ooURBWdOIMeHndB+B3P30UxMVGK7ovaLL5m+9tYc8LICuHj785dhLMmjYZ5IzPAOlwP1G8guRcT6+RvTK50WQGkyZkgqvnzgKTsjO8vnLaiTPnkbNkfB14xsnD25pa2m0dXXprUkKcT1+LHV00AXnAmVMnsdIDrUephMc7/O0p9sQUWpsSrVWplHdHl+YZgn0441HXyG7BWi27CjLaPxRU2+HrhwrsvvrmW7B5+x446OfAgP9WkDku1UtH2x5rXUMzqqOxuWPLF4Bn3GgaCxTKsdBbGpdcm+fTwKMVhufOnAo9XxLo6OoBERHhipUlFOw/wl7175ePPyTp6n8I0gEILAIbeWm0bo7NNgBOnbvIZoa4DF3+Z8DuPmOMvD6Sdp/vPcTe/8+1a9gFqDxtUAqzcygZmrZgseYLkgZ6eCMFQNqxE2d6IfCJvgw8Am/i+HT2Pjq0O2ROT7rajt1fo8usgx89dBebPhVoR3bWltHUxy4EhdKqQ8EoCojRY5RlQhknFIPIVf+PJqyjS/koEdMIyr+SM4YhhrwtaZzX8RPoKIcBTTqH3qb32bVrGI2frDDaBgNLJHGUNCQnPtmxB1itNvDTR1e5hR5JKzTJBJ0kOw839Lv6LFb4Hivog3ArfVUTNFF9a8F+jwMP24aBzPR8x5AEleFBD8/AwxEbsHb39NovVdWar5g0IdIfgEcnifYcKgLVdcrX0m/ffZC9/usTD9/DLsONDAWSh4pOgIJ9R9gTZN4sTTgApdHvf/m4R7+zqqbejJgZlDQmJQJXLYYHx/HsI36Ywz7QoQ25fN7g8LGTen8BPic7Ezzzk9Xglbf/D1TU1Cv+fZ/tOshKlVW338TKk83Q85eWlUu/cjihoQOw8wk3pN1nT5vi8fY/VFiid2KoXYQXZ4SeF+PhGZdt1AcP2Po7QiMuL2RasO9w9w8fvCvTX9ZNv3JGLnjpuZ+yEzr2Hz6u6GpjCLJdB47CYLOcDUD1Ckw6R1knVFqBSqa1MEAPDQ1hC+siIyJAcmI8yMpIY2uPUAxwGv4OFMQvuXY+mD97mkfbHbVFwYEjw2foIEOdHBDz8efRLM3wl9ssfR1UHIUWL6AaW9psl6rqTLmTsv3CyyNLT02Gnv4HYMWSa8FnO/eDI8WlbECrlLW2y39GFMmkuTOvALOgp0a5fygRQKQuAqQkxYP42BgQER7GenI0GIYuDXTXLTew972RnUGMNDRdnkcBnSODGOJjTOmg1flSIoLyxtDd1powLnv4ib2Hirr8Cfihw/zsaZPZ/HzxqTLwacE+9gSOrxuqH1oIY5FbblgI8qCXJjmyerOkGjHi/BgxRChjsAaDRo7I1/VLu5qqe6BHGT4+b991oNtqG6CBHxryeKjW5ve/eIydvuer0gzBunRhHvjjb54E/7n2EbBgznS/ufwOYgMxMgwTTRsRQxK8O9E1noS8PJY5HI66IK121mD2wX7k+KnuGxYuSAR+aujs6No1q1hps8fHFlVFZQH33XYjuPG6q1mp4m+G2ECMOLFTK1JWi/bwDMYXuAYNI+477LZG5+c//XKv3y+wjk7LozTiFZOyfeL3oABzxZJ88KffPMVeXdAfYXdhg7mcoWHZ4WQLM2BlSCUNEPnB7GNrn3FEFRbUweZL1XVmf4d+XEoS+MkP7hM8S+qJwYdmdf3mydVslsVfDTGB2BghcSymaj62pPCqERH5MjiBg761odz1RR9u3RkQ0/mRpv/BvSu9ppFDQ0LAT1bfB9as+h5b1+/P5o6J3o7mCsyglJhdDeGH4P6P6Wis1DMMPSK1tPvA4d6Wts6AuDoY0szLFi3w+PeiI8uTq+9lv9/frwmLWEBMgBGVtnRXW+3FDh5JI4lX3MJn3OT/iMd2m+2C85tommE++PSLgFi/AnnWJ1ff79HpeyjliALn+763PCAugIxYoF1qse0DtvM8EkXwpKfYoBXgyBahAWHtM5x1feG2L/d1N7W09wcC9GkpieCGRVd55LvQybD/+sVj4M6blwQE7M2t7f2IBdfnrWbDGQKgiVOWGpwAVOSAYFprL5Yix+78OQ44pDdu/ixgVim6YWEeyM1RNmtz9dyZ4H+e/QlYfM28QGk2sHHz9mbEggs/9CAzjFighRgmncsldHgZcQuDDzPtsI+aM/f57q/1gZCxQYYmgv/mqdVg3qypigSn379jBVu1GEgrH6C+37Hr4KjifchKFWKGy4EC4XS4oA0VTbi7pAjX81yXrxy6ep/zLRWfmqULDg2bNeJ9DEPVNrRYVt54XWIgHJ6TEuLAVdALx8dGs5O15Sg4S01KAL/40UPg+7ffBCJ14QEDOyoSe+7Pr1dDSTMALvf9MLD9ZsOejsbKS06qwPVWyMkKHhFwgKd4YAduYHd+rIH3emKSxq0Y8Xq4oy1wh6fkjA+dkJUeEQgdiU76oJJa5OnRFLma+mbREzXQ2pjPPrkaXHf1XK9PqJbbvi4s7nr/k887IAOjpEdL9bkNfYbuPifInUEfKk2heQJa0R4ecIAOBAbDKPDhDlhSs6+YRWk08a4D5fS5i+Y7b7khISQ4OGB6FXn5/PmzWa9/vqKanW9KYmh+7W/XPuKV6XVKm7nPYv/Zcy9VwzahwcgjO4Okb9XpIzvdwM7l3YVgZ6QCT+LhR9yPS8kIDg4Nn+P6PrTjln6r/dq8ObGB1LFIpiEvPT4jjZ1IgiZa49j1MCh9+scPg+zMcSAQ7dV3Pqo/fmpw+RYXKWsx9XzR2VhVzQM77Ua2ENfEB7kBHVevY+t4q9nYlpA+4SbwXbHa8GeUlVf1Q/0bCYO/0EDr4Kz0VDANBptoInZLeyeUONwFo3ffegP4+WMPsJMyAtFKy8qNL762ocnJKzh7YVvNmaL1tn6zTaR+x8nQMDjAk+h7wKHjKbgjjqSMnJQgbXC2s44fet+JMxeM37vp+sRAkjbOAW3+/FlgYlY6MJktoy6WjNZ/efzBO8Hq+27zen2OglLG8dRv/1xhNJocg7CPAHPAajnacPHkMRfI3el3nBOejBQPDzDlDK+OR1uYLtoYER2/2N1gMpjMdLfeYF2cPz8uEDscLQWC5ssuuHI6O/sIBbiZ41LA0oULwGMQdhScosrHQLWXXt9Yd/z0OTM10rsPw6pvrf9Xb0dzF4F3F52W5KuH55vU7TxABPPx6LbufHFlXOr4qiCtdpLrZ8M7zI49B3vyF8zpWrboqoRA7fjE+Djw8D0rwViyfYe/7dq++6Ce4pAbDru9CrHBxw6GV8cKWIckCFb6lOB5rhHJmPTtX7pEdyPe/8Lf3mqsqW+yANUCwmobmiyoT/n6fJAJBsOTi2ERG3h3hwxG4HmGJ4pmt6rSoycY2tHK9QP7+q2Op194uQZpPhUX/9ftv3r+5RrUp5xeFLKAmCBhiINPhodbTuBxtRAjcNjhfA3cQdrU07XD3YgfOuTVNrT0/+Hv62toxsfWcFYN21DfoT5Efenct07enb1FLCAmgPBZU6Ezq9gKxTVSEpOP53vNqAC3p62hOTk7dwFFaaI5PgdU1zbYoNmvmjsrRsXH/2zd+580bf3iK/1QcOouWKVpR/PFoj3/Ql4Q8OfccdKR2NIGF3jg5nUk0A9nbeAOgqjYJFNoRNSC4fcNpigpp8el58ot8bHRmum5kyJVhPzHthXsa3/1nY9aXY/crt7d2NX2QWczu7ybO9Bxc+/EizLxAe8ObEpgUPCmJoee07c1tCRn5c7UfFdu4PazjhafNk6akIXqbcJVlHzfDhw5rv/9X99scPbm7ry7w26vvHBszyYkcnlApyXIGQYXeLlkDeB9HbqyXmhYoy4mYTGfl0dVlQeOHjdMz80Jy0xPDVOR8l0rLCntefqFV+rYqyHye3ems7HqjcG8O59XpwU0PC7ojBTgubw/tqQZ2gydLT1J6ROTg7TBWZxeHi3yCRtw/+FvDbOmTYlIT0sOVdHyPSspLTP8/L9eqrUP2BnntKM77z7Q33e04sTXX3F4cj7tzjfdD9uEgMeRNXyv4T1Da7WYK+JSMq+nKCrYrZcfvHU4aOarQ0W906ZMVD29D3p2BLttaGW576TMKO8OzVxbdvwf/WZDv8hAFWc+KyMH8EKBKknGZniDO26Lik82hIZHzuPz8kPQ74XQ52RnqprehzQ7kjGsZx8Jt1vvbtK3v99UceaSTN6dCHQ+4IWyNRTma7C8fHdrfWNS5qQpmiBtEp+XZ/eIZsC+b471xsfFaKZNydGpyHnPtn65r/35l99qpB1O81J5vLt9wFoGA9WP3QSqJGlIvvIVLE2PAzyJZCH39DCAddgHLsYkjlsEpU2I82dQLgHt0I858u1JUz88hi64cmY0FQhzBP3I0Eml1zZsanxjw8ftjPPJQddA1WkAICnTWH7q5b7ebjOhd8cFG9vLkwDPFbySZHbcDp4+g75fF5vYGRYRlecG8BHSZuhLSsvKLdW1DX3X5s2JCQ7AsmJftL4+i+O5v7xes33ngR4wEmx3UmYYVENX6zsQ+AoJUka2idx8NakkkoVE2rh9X3dLXXNi+sTE4awNj7QZul9T32Q7cvxk74K5M6NioqO0KpLKWX1TS/9Tv32xqqT0/OhrevJIGVt/3+GLx/Z+AdzXuYuZoI3r0RkpwHMFqHwpSiAEuetnGjqbz0PoZ1MaTSyOtGEHir7X8fmer7uz0tO0E8dnRKhoym8wbupe+7u/1LR1dNlHwcQjZWiHvaG8eN/r9gGbnQN0Eu8ulIqUFLQKyRqhFCWOlx81WGDDOKCeL4tOTMtn9TyGtEH37XY7AzvF0NrRac2bMyMqRJU4shiqePzza+82vLlxcxtqYy7Y3UkZqNtNjeWnXzJ0tvS6kTA0wJMvACMVKTkP7wkvz3lWFi3TEBYZ0xQeGXMVp7RxAz36U15Z27/3UFEPOjObkpSgnqSSYGfOXzI++ZsXq0tOj1jKmgt2VylD69sa3myqKK3ClC9ye3dGTuBJvDxutmbEe3vaGtqiE1JMIWG6WaTQG01mJHH0BqPJNnt6rk719sRe3f7aOx81/umf7zQbhuagksHOmHu7NlWePHTUxaPTIkCX1bvLBTxJxgZwHBVGefyuppra+JTMEG1I2BS3ep4HemTnLlZaCvZ9o88clxo8PiMtXM1eCuTzGAZ8U3RC/9Pf/aX225NnzZwe0x3sTu4IrR52oWjPDgGPTvMMBADwz7ASGyXiNWLKgp1v+bYgp9cFweA1aMbClY+FhEXkD/YK5dQDlFNvUXz7lHfldN0vf/Rw+pScbDWodWOXqmr7/r7+gybXK3EQwM7et/X3FZ478uU7DM3WuDucYHa4gdwd9DiTt4Xy84wngAcyAT9q0wRptRD6HweHhuVJgR55+NtuWhz3wwfuSk1PS1H1PbSmljbru5u2tX6x55CeY4IZNuwD1v4SCPtbtMNux4BbLPDAE8BL9fLugCeCPzgkLHhq/oq18HaOFOgBO4I01F0rl8Wtvu/2lLSUxDEJPrryxr+27Gj7rGCf3uGghSdFC8But1lLzxfuem3A1j8gEnJczy4JdrmBF/LyooFHr2ehv2bFE4Senhf8m29YGPPgXbck5U6aMCbqcsora8wfbdvZsWv/kV6apvFm/2N49gtFu9cNws5IBF5R704CvJiMjYZA3mANACRvpl97y6OEml5gPxlqwZUzI+65bXnCwqvmxoWGBAdUdGu1DTBHvj2p//SLvV3HT53tQ7Ms+WJXEtiRZi87unMDgYxhCGSM0AQQURfvkAI8V15ebmkz4jUokJ12zYp7w3TRN8sJPfobExUVdMctN8StWHJN3OSJ2RH+mtlBeryiurZv98Ei/fad+/W9RuNgelE+2PvNht3ni3ZvGQxQ+aCWQ8oAIK3MQBTwcksbEvBH/T83b+mSyLjkh9jH+NBjgY8sPS01eOWyRbGL8+fHTM7JjtD4OP2oirGiqrbvUGFJb8H+w72Nza02p10mqznhh5026ds/LC8+cBDDg5OArqiUkQt4MdJGirwZ8b8JM6+ZGZea+QRFaSI4oSf29iPBRxYXE6O97pp5kdcuuDJq5tTJkcmJ8SG+AHlHl9525vwl09Hjp4zfFJ0w6Xt77S67SXZRaZdVwVxhZxi6T9/a8HbN2aKzBKCTyBgxUkZR4KV6eT7gKUzvPuJxctaU1HGTZj0F5X06IfSY+z/6feNSk4PnzZ4eMWvqZF1OdmZ4dlZ6WExUpKLVmr1Gk722obm/uq7RUlpWbj5RWtbHXjZm9C6JqxsXgB3K9KbmyjNvtNdfasUEGiftKCbfLuXCe7IALwZ6UnnDBz0VGhEVNnne9Q+FhusW8up6mcF3tuTEBO2E7IzQzHGpIekpSSGpcIuNjtLGROmCIiN12uhIXRDKDGm1WgoGxprBgJJGRVkoY2IwmR0mk9neazQ7egxGe2tbh60Jbg1QmtTUNlrbO7vsAt2iCOjs77SYj1Sc+PpDa5+xn0OW8MEuRsbgwu4R4Pm8PJ+04VvFQIMBvuDrcuYsyotJTHsYBrY6EdATtAfjI3qeIl5qjkjC0LS5t7Plg6rTh4sFABaCn3TtGdz1ImWvpZHDy7vz9ELvBYC7+pLzvr61vtnWbz4eGZuUodEOzpEd+UHf1eCMrsMhAH/U7lCeA5yvGQlAd4rBKdcRDP9vt1nPN1w88c+mijMVboAVuo8DO9/K00CqJ5fbw8slbXAkDpZ3d34v9PCaSXMWLYqKT7lX0NvL4vHlPhJQUjsXy6NzeXVjd9u/K08fPsywqyoRw06LlDCKShmlgRcbxHKdmdVg6P1R741JGheTNXX+qpCwiAUQao1La5GA70EvLjPkOKBffg1t6+87Xn+hZHNvR3Mv4F7zUUiu8J05FVsU5hPA43p5AMgvkyNUjkDhAD90mzFlTk5i+sRVQcEhE12hFgG+L8HP3+l4oDOOAVt1Z1P15sZLp6sEPDMf5IwE2N3JGdm9u1wdJ0baAInQUxiDYMTnIJ0zcXb+/Kj41DuCtNpULPDx4PfUIMDrZMq9HHILut3eauxu3V5dWliCtIwA6EK6XAzswFNSRmngvQE9F/AjHiPwc65cdE1UXNJKjSYo1U1rcrcJw1AKt7O4zqS4Nb+bayuhtdlbjfqOL6tLjx6jHXYHD5g0wa0nYPcJ4KXoeQC+uwqJUNqSEgm8u89iI9sJM6+eF52QujxIGzyJo2X524fxUnqSooRqvt3+32EfqDR0te6tOXvsxKBHB4B/2Qxa5C1f2pHGgF0R7y73YVhqEEsKPS7oGoEjCYAaf3JsSsZ1MLjNowAVIgp+pQYBReEWRXHM4GBsMBgt7mlr/AZq9AoncPim3+GCTwq7x4NUpXUnSRArBXocb87n5SmnI8vwEUYXEx+RPnnO1eFRMddotTDA5WgfxkeCVornsG+326otxt6iporTx8y93X1uoKN5YMe5T2NIIVzYFdXtngZebuhxwNZgfIYr+COej08bn5CUOXl+mC5qHoR/AhC4xKfSg4AS7nQaQl7Tbzae6GioKOluqevigIwvW0ITeHucQSMH7D4NvFLQk3p9HA/PCbvr74iMTYxMyb5iWnhU7IzgkLBcGOwmikyzUCJhdk84TXcN2CwXLcaec221F8+bejpNgP+Sj0LQ04T3xa7r7hXYlUylSYWeD0IK04uTeHmcRaKGf2tcSmZcfGrWpFBddE5wSGg6DHozYRAcpWhOkqGNDru9ccDW32g1G6q6W+sr9W0NejfQCAFP6t3FgE5aG+MR2JXOHUuBHhCCqRExIIhWRBNKtcYkjouOTkhJCY2ITAoODU8ICg5JgEeCSEqjiYK3OjggdOxvoEDwUGCMAkr4h534DIE207TDzNC0Ed6aHAO2rgGrpcvaZ+owdLW19XY2GzBSeIwE6HGAlrKYktdh98TJEk9CLyfwAMfTC+yH2DbGuZwL6YV85QLer2FH5q0lpplBEBgnIJyfAy73Xd8nFIAO6VTn/zGY4AvFFP4EPA70tIjBgCtdxMCuqGk9BLac0PPGcRgDgnZKR+LEDQADfC74SaHnS8lxQYOr3wHgnkqnhDcXCzvjz8DLAT3u5+Nszl7eIbeOJ5ByuJ2M693FSBkAxK/mS1om4BOwe1LS4EIPXMBkRH4uMwi186078OXQ8STShqSzGQleXmymBjh5fprgaOH6O4R+s1dg97SGx4FeSNbgQDMEJe1yi3tE4NPwQloe19OTSBshL8/n6XHAxz0aSJEwPgG7N4JWUuj5JA7DATKO3GEIc+9SJA2lIOyAEEhc2AEgy6n7BezeytLIBT3FE+S5QspwgM2IkDFSQCfR8GK9PI68EQM6wJQwPgu7t9OSgEd/A45gVihdyQe/HIAr7d2leHk5BwCOZBFaJ8anQPc28GKDWXeZHTEBLsMjbxgCyEny7xQB5DhBLC78pDCTQO4XXt2XgJdb15PAzgU94IHfE95dDi0vBmTSy7z7Hey+AjwO9EBE5oYviOWDXox88daZVhLgSby23KD7BOy+BLyQrhfy9oAnqBXS93wDQcizMzLJGbGyRuytUD5fKCj1K68uxfv4yu8iWZFMaJohya0UKUOq4UmljdRBgPO5funV/QF4UujlAl+qVpeykBOulxSr7eUE3S9h9zVJI0biAEKZIyauIDnzy+fdxa3uSyYnGJGDggRuvwTdH4DHCWj5gloS8HG+Q2hg8Q1SRuKgFws+iTeXCrrPw+4vwON4e1zwSeEXCzpDKGsYD4KPA3LAge5vwEsFX4zXF3P0EZI3jIh9xXleDNikj/0adH8FXiz4Ql6YRGNTIgcDkAF2qTKEEfF5AQG6vwMvB/hS4cf5DWKgZyQ+LwbygAc9UIAXA75QkCkGfgp4ZkKyVHjFXjKGCRBOAgZ4EvBxvb67jiYpYxAaIHJpejH/G3OgByrwYsHng5ASAEBueKW+V44jDROgXAQs8LhZEyDgzYUgx4VDqfXhGQ99lgp8gMMvxtPzfa4yFymT/h0MGGOmBWPTSOHHhZzx8G8HKuQq8FIBoBQAiPIijIzaxSrwpIBQfgKdCrcKvKIgUT72e1QTsP8XYAB8eeBsSWq3fwAAAABJRU5ErkJggg==" alt="">
<hr>
<img src="data:;base64,
iVBORw0KGgoAAAANSUhEUgAAALwAAADJCAYAAACZpljZAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5MTc4MzQ3OUEzNzYxMUU0OEQ4RDlEQkREQkE1QzhFMyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5MTc4MzQ3QUEzNzYxMUU0OEQ4RDlEQkREQkE1QzhFMyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjkxNzgzNDc3QTM3NjExRTQ4RDhEOURCRERCQTVDOEUzIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjkxNzgzNDc4QTM3NjExRTQ4RDhEOURCRERCQTVDOEUzIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+IgBGkQAALr9JREFUeNrsnQl8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" alt="">

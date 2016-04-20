<!DOCUTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width,initial-scale=1.0">
	<title>很久以前只是家串店</title>
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/index1.css">
</head>
<body>
	<div class="container" id="womenSide" hidden>
		<div class="row">
		<?php
				require_once('config.php');//导入配置变量
	
				$db = new PDO("mysql:host=$host;dbname=weixinapp",$username,$password);//连接数据库中的test库
				$sql = "SELECT * FROM `date` WHERE sex = 'Women'";//查找女神的信息
				$res =$db->query($sql);//获得结果集
				$count = $res ->rowCount();//获得结果集行数
				while($meta = $res ->fetch(PDO::FETCH_ASSOC)){
					
					$woman[] = new dates($meta['cid'],$meta['did'],$meta['name'],$meta['talk'],$meta['age'],$meta['sex'],$meta['price'],$meta['picture']);
					//将获得结果集行数，加入到订单对象数组
				}
				for($i =0;$i<$count;$i++){	
					$price = $woman[$i]->price;
					$talk = $woman[$i]->talk;
					$name = $woman[$i]->name;
					$age = $woman[$i]->age;
					$picture = $woman[$i]->picture;//获得女神的各项数据
				
				echo '<div class="col-xs-12 col-md-6" id="pictureBox">
				<div class="thumbnail">
				<span class="price">';echo "$price";echo'/撸一次</span>
					<img class="img-responsive" src="';echo $serverpath.$picture;echo'"alt="图片" width="100%"height="auto">
					<div class="caption">
						<div class="row">
							<div class="col-xs-12"><p class="lead text-left talk">'; echo "$talk"; echo'</p></div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<p class="text-center username">';echo "$name";echo '</p>
							</div>
							<div class="col-xs-2">
								<p class="text-center age">';echo "$age";echo '</p>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<p class="text-right little-word">见过</p>
							</div>
							<div class="col-xs-2">
								<p class="text-right little-word">想约</p>
							</div>
						</div>
					</div>
					</div>
				</div>';
				}
				//建立一个订单类
				class dates {
					private $cid;
					private $did;
					private $name;
					private $talk;
					private $age;
					private $sex;
					private $price;
					function __construct($cid,$did,$name,$talk,$age,$sex,$price,$picture){
						$this->cid = $cid;
						$this->did = $did;
						$this->name = $name;
						$this->talk = $talk;
						$this->age = $age;
						$this->sex = $sex;
						$this->price = $price;
						$this->picture = $picture;
					}
					public function __get($property_name)//获取private属性值

					{


						if(isset($this->$property_name))

					{

						return($this->$property_name);

					}

						else

					{

						return(NULL);

					}

				}
			}
		?>
		</div>
	</div>
	<div class="container" id="menSide">
		<div class="row">
			<?php
			//男神方法和女神相同
				$sql1 = "SELECT * FROM `date` WHERE sex = 'Man'";
				$ress =$db->query($sql1);
				$counts = $ress ->rowCount();
				while($metaa = $ress ->fetch(PDO::FETCH_ASSOC)){
					
					$man[] = new dates($metaa['cid'],$metaa['did'],$metaa['name'],$metaa['talk'],$metaa['age'],$metaa['sex'],$metaa['price'],$metaa['picture']);
					
				}
				for($i =0;$i<$counts;$i++){	
					$pricee = $man[$i]->price;
					$talkk = $man[$i]->talk;
					$namee = $man[$i]->name;
					$agee = $man[$i]->age;
					$picturee = $man[$i]->picture;
				
				echo '<div class="col-xs-12 col-md-6" id="pictureBox">
				<div class="thumbnail">
				<span class="price">';echo "$pricee";echo'/撸一次</span>
					<img class="img-responsive" src="';echo $serverpath.$picturee;echo'"alt="图片" width="100%"height="auto">
					<div class="caption">
						<div class="row">
							<div class="col-xs-12"><p class="lead text-left talk">'; echo "$talkk"; echo'</p></div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<p class="text-center username">';echo "$namee";echo '</p>
							</div>
							<div class="col-xs-2">
								<p class="text-center age">';echo "$agee";echo '</p>
							</div>
							<div class="col-xs-2 col-xs-offset-2">
								<p class="text-right little-word">见过</p>
							</div>
							<div class="col-xs-2">
								<p class="text-right little-word">想约</p>
							</div>
						</div>
					</div>
					</div>
				</div>';
				}
				?>
		</div>
	</div>

	<div class="continater button-box">
			<div class="col-xs-12 col-md-12">
				<div class="btn-group button-nav" role="group" aria-label="...">
				  <button type="button" class="btn btn-default button" id="man">男神</button>
				  <button type="button" class="btn btn-default button" id="women">女神</button>
				  <button type="button" class="btn btn-default button">我的</button>
				</div>
			</div>	
	</div>
</body>
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="js/index1.js"></script>
	
</html>
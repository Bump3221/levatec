{"filter":false,"title":"create.blade.php","tooltip":"/blog/resources/views/create.blade.php","undoManager":{"mark":32,"position":32,"stack":[[{"start":{"row":10,"column":0},"end":{"row":14,"column":22},"action":"remove","lines":["                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                    <p class='updated_at'>{{ $post->updated_at }}</p>","                </div>"],"id":2}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"insert","lines":[" "],"id":3},{"start":{"row":10,"column":1},"end":{"row":10,"column":2},"action":"insert","lines":[" "]},{"start":{"row":10,"column":2},"end":{"row":10,"column":3},"action":"insert","lines":[" "]}],[{"start":{"row":10,"column":3},"end":{"row":10,"column":4},"action":"insert","lines":[" "],"id":4},{"start":{"row":10,"column":4},"end":{"row":10,"column":5},"action":"insert","lines":[" "]},{"start":{"row":10,"column":5},"end":{"row":10,"column":6},"action":"insert","lines":[" "]},{"start":{"row":10,"column":6},"end":{"row":10,"column":7},"action":"insert","lines":[" "]},{"start":{"row":10,"column":7},"end":{"row":10,"column":8},"action":"insert","lines":[" "]}],[{"start":{"row":10,"column":8},"end":{"row":21,"column":15},"action":"insert","lines":["<form action=\"/posts\" method=\"POST\">","            @csrf","            <div class=\"title\">","                <h2>Title</h2>","                <input type=\"text\" name=\"post[title]\" placeholder=\"タイトル\"/>","            </div>","            <div class=\"body\">","                <h2>Body</h2>","                <textarea name=\"post[body]\" placeholder=\"今日も1日お疲れさまでした。\"></textarea>","            </div>","            <input type=\"submit\" value=\"保存\"/>","        </form>"],"id":5}],[{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"remove","lines":["f"],"id":6},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"remove","lines":["r"]},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"remove","lines":["s"]},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"remove","lines":["c"]},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"remove","lines":["@"]}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["{"],"id":7},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["}"]}],[{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["{"],"id":8},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":["}"]}],[{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":[" "],"id":9},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":[" "]}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["c"],"id":10},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["s"]},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["r"]}],[{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["f"],"id":11},{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"insert","lines":["_"]}],[{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["f"],"id":12},{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":["i"]},{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"insert","lines":["e"]},{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":["l"]},{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":["d"]}],[{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"insert","lines":["("],"id":13},{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"insert","lines":[")"]}],[{"start":{"row":20,"column":41},"end":{"row":20,"column":42},"action":"remove","lines":["存"],"id":14},{"start":{"row":20,"column":40},"end":{"row":20,"column":41},"action":"remove","lines":["保"]}],[{"start":{"row":20,"column":40},"end":{"row":20,"column":41},"action":"insert","lines":["s"],"id":15},{"start":{"row":20,"column":41},"end":{"row":20,"column":42},"action":"insert","lines":["t"]},{"start":{"row":20,"column":42},"end":{"row":20,"column":43},"action":"insert","lines":["o"]},{"start":{"row":20,"column":43},"end":{"row":20,"column":44},"action":"insert","lines":["r"]},{"start":{"row":20,"column":44},"end":{"row":20,"column":45},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":74},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":16},{"start":{"row":15,"column":0},"end":{"row":15,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"insert","lines":["<"],"id":17}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"remove","lines":["<"],"id":18}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":96},"action":"insert","lines":["<p class=\"title__error\" style=\"color:red\">{{ $errors->first('post.title') }}</p>"],"id":19}],[{"start":{"row":19,"column":84},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":20},{"start":{"row":20,"column":0},"end":{"row":20,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":20,"column":16},"end":{"row":20,"column":94},"action":"insert","lines":["<p class=\"body__error\" style=\"color:red\">{{ $errors->first('post.body') }}</p>"],"id":21}],[{"start":{"row":13,"column":30},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":22},{"start":{"row":14,"column":0},"end":{"row":14,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":14,"column":16},"end":{"row":14,"column":106},"action":"insert","lines":["<input type=\"text\" name=\"post[title]\" placeholder=\"タイトル\" value=\"{{ old('post.title') }}\"/>"],"id":23}],[{"start":{"row":15,"column":73},"end":{"row":15,"column":74},"action":"remove","lines":[">"],"id":24},{"start":{"row":15,"column":72},"end":{"row":15,"column":73},"action":"remove","lines":["/"]},{"start":{"row":15,"column":71},"end":{"row":15,"column":72},"action":"remove","lines":["\""]},{"start":{"row":15,"column":70},"end":{"row":15,"column":71},"action":"remove","lines":["ル"]},{"start":{"row":15,"column":69},"end":{"row":15,"column":70},"action":"remove","lines":["ト"]},{"start":{"row":15,"column":68},"end":{"row":15,"column":69},"action":"remove","lines":["イ"]},{"start":{"row":15,"column":67},"end":{"row":15,"column":68},"action":"remove","lines":["タ"]},{"start":{"row":15,"column":66},"end":{"row":15,"column":67},"action":"remove","lines":["\""]},{"start":{"row":15,"column":65},"end":{"row":15,"column":66},"action":"remove","lines":["="]},{"start":{"row":15,"column":64},"end":{"row":15,"column":65},"action":"remove","lines":["r"]},{"start":{"row":15,"column":63},"end":{"row":15,"column":64},"action":"remove","lines":["e"]},{"start":{"row":15,"column":62},"end":{"row":15,"column":63},"action":"remove","lines":["d"]},{"start":{"row":15,"column":61},"end":{"row":15,"column":62},"action":"remove","lines":["l"]},{"start":{"row":15,"column":60},"end":{"row":15,"column":61},"action":"remove","lines":["o"]},{"start":{"row":15,"column":59},"end":{"row":15,"column":60},"action":"remove","lines":["h"]},{"start":{"row":15,"column":58},"end":{"row":15,"column":59},"action":"remove","lines":["e"]},{"start":{"row":15,"column":57},"end":{"row":15,"column":58},"action":"remove","lines":["c"]},{"start":{"row":15,"column":56},"end":{"row":15,"column":57},"action":"remove","lines":["a"]},{"start":{"row":15,"column":55},"end":{"row":15,"column":56},"action":"remove","lines":["l"]},{"start":{"row":15,"column":54},"end":{"row":15,"column":55},"action":"remove","lines":["p"]}],[{"start":{"row":15,"column":53},"end":{"row":15,"column":54},"action":"remove","lines":[" "],"id":25},{"start":{"row":15,"column":52},"end":{"row":15,"column":53},"action":"remove","lines":["\""]},{"start":{"row":15,"column":51},"end":{"row":15,"column":52},"action":"remove","lines":["]"]},{"start":{"row":15,"column":50},"end":{"row":15,"column":51},"action":"remove","lines":["e"]},{"start":{"row":15,"column":49},"end":{"row":15,"column":50},"action":"remove","lines":["l"]},{"start":{"row":15,"column":48},"end":{"row":15,"column":49},"action":"remove","lines":["t"]},{"start":{"row":15,"column":47},"end":{"row":15,"column":48},"action":"remove","lines":["i"]},{"start":{"row":15,"column":46},"end":{"row":15,"column":47},"action":"remove","lines":["t"]},{"start":{"row":15,"column":45},"end":{"row":15,"column":46},"action":"remove","lines":["["]},{"start":{"row":15,"column":44},"end":{"row":15,"column":45},"action":"remove","lines":["t"]},{"start":{"row":15,"column":43},"end":{"row":15,"column":44},"action":"remove","lines":["s"]},{"start":{"row":15,"column":42},"end":{"row":15,"column":43},"action":"remove","lines":["o"]},{"start":{"row":15,"column":41},"end":{"row":15,"column":42},"action":"remove","lines":["p"]},{"start":{"row":15,"column":40},"end":{"row":15,"column":41},"action":"remove","lines":["\""]},{"start":{"row":15,"column":39},"end":{"row":15,"column":40},"action":"remove","lines":["="]},{"start":{"row":15,"column":38},"end":{"row":15,"column":39},"action":"remove","lines":["e"]},{"start":{"row":15,"column":37},"end":{"row":15,"column":38},"action":"remove","lines":["m"]},{"start":{"row":15,"column":36},"end":{"row":15,"column":37},"action":"remove","lines":["a"]},{"start":{"row":15,"column":35},"end":{"row":15,"column":36},"action":"remove","lines":["n"]},{"start":{"row":15,"column":34},"end":{"row":15,"column":35},"action":"remove","lines":[" "]},{"start":{"row":15,"column":33},"end":{"row":15,"column":34},"action":"remove","lines":["\""]},{"start":{"row":15,"column":32},"end":{"row":15,"column":33},"action":"remove","lines":["t"]},{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"remove","lines":["x"]},{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"remove","lines":["e"]},{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"remove","lines":["t"]},{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"remove","lines":["\""]},{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"remove","lines":["="]},{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"remove","lines":["e"]},{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"remove","lines":["p"]},{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"remove","lines":["y"]},{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"remove","lines":["t"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"remove","lines":[" "]},{"start":{"row":15,"column":21},"end":{"row":15,"column":22},"action":"remove","lines":["t"]},{"start":{"row":15,"column":20},"end":{"row":15,"column":21},"action":"remove","lines":["u"]},{"start":{"row":15,"column":19},"end":{"row":15,"column":20},"action":"remove","lines":["p"]},{"start":{"row":15,"column":18},"end":{"row":15,"column":19},"action":"remove","lines":["n"]},{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"remove","lines":["i"]}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"remove","lines":["<"],"id":26},{"start":{"row":15,"column":12},"end":{"row":15,"column":16},"action":"remove","lines":["    "]},{"start":{"row":15,"column":8},"end":{"row":15,"column":12},"action":"remove","lines":["    "]},{"start":{"row":15,"column":4},"end":{"row":15,"column":8},"action":"remove","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":14,"column":106},"end":{"row":15,"column":0},"action":"remove","lines":["",""],"id":27}],[{"start":{"row":19,"column":73},"end":{"row":19,"column":95},"action":"insert","lines":["{{ old('post.title') }"],"id":28}],[{"start":{"row":19,"column":95},"end":{"row":19,"column":96},"action":"insert","lines":["}"],"id":29}],[{"start":{"row":19,"column":90},"end":{"row":19,"column":91},"action":"remove","lines":["e"],"id":30},{"start":{"row":19,"column":89},"end":{"row":19,"column":90},"action":"remove","lines":["l"]},{"start":{"row":19,"column":88},"end":{"row":19,"column":89},"action":"remove","lines":["t"]}],[{"start":{"row":19,"column":87},"end":{"row":19,"column":88},"action":"remove","lines":["i"],"id":31},{"start":{"row":19,"column":86},"end":{"row":19,"column":87},"action":"remove","lines":["t"]}],[{"start":{"row":19,"column":86},"end":{"row":19,"column":87},"action":"insert","lines":["b"],"id":32},{"start":{"row":19,"column":87},"end":{"row":19,"column":88},"action":"insert","lines":["o"]},{"start":{"row":19,"column":88},"end":{"row":19,"column":89},"action":"insert","lines":["d"]}],[{"start":{"row":19,"column":89},"end":{"row":19,"column":90},"action":"insert","lines":["y"],"id":33}],[{"start":{"row":19,"column":86},"end":{"row":19,"column":90},"action":"remove","lines":["body"],"id":34},{"start":{"row":19,"column":86},"end":{"row":19,"column":90},"action":"insert","lines":["body"]}]]},"ace":{"folds":[],"scrolltop":60,"scrollleft":0,"selection":{"start":{"row":27,"column":0},"end":{"row":27,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1651594859104,"hash":"cbd86d216028cebf703a628d0c0a1b6c2a12e19e"}
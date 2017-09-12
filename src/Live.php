<?php

namespace AprSoft\QiNiu\Live;

use Qiniu\Pili\Mac;
use Qiniu\Pili\Client;
use yii\base\Component;

class Live extends Component
{
    public $accessKey;

    public $secretKey;

    public $hubName;

    public function hub()
    {
        return (new Client(new Mac($this->accessKey, $this->secretKey)))->hub($this->hubName);
    }

}

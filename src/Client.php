<?php

namespace AprSoft\QiNiu\Live;

use Pili\Hub;
use Qiniu\Credentials;
use yii\base\Component;

class Live extends Component
{
    public $accessKey;

    public $secretKey;

    public $hubName;

    public function hub()
    {
        $credentials = new Credentials($this->accessKey, $this->secretKey);
        return new Hub($credentials, $this->hubName);
    }
}

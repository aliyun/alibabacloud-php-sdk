<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class GetTokenRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appSecret;
    protected $_name = [
        'appKey' => 'app_key',
        'appSecret' => 'app_secret',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['app_key'] = $this->appKey;
        }

        if (null !== $this->appSecret) {
            $res['app_secret'] = $this->appSecret;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['app_key'])) {
            $model->appKey = $map['app_key'];
        }

        if (isset($map['app_secret'])) {
            $model->appSecret = $map['app_secret'];
        }

        return $model;
    }
}

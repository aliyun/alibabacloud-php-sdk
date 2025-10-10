<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppSecurityInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppSecurityInfoResponseBody\appSecurityInfo\extConfig;

class appSecurityInfo extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appSecret;

    /**
     * @var extConfig
     */
    public $extConfig;
    protected $_name = [
        'appKey' => 'AppKey',
        'appSecret' => 'AppSecret',
        'extConfig' => 'ExtConfig',
    ];

    public function validate()
    {
        if (null !== $this->extConfig) {
            $this->extConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }

        if (null !== $this->extConfig) {
            $res['ExtConfig'] = null !== $this->extConfig ? $this->extConfig->toArray($noStream) : $this->extConfig;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }

        if (isset($map['ExtConfig'])) {
            $model->extConfig = extConfig::fromMap($map['ExtConfig']);
        }

        return $model;
    }
}

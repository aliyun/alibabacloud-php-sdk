<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppSecurityInfoResponseBody;

use AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppSecurityInfoResponseBody\appSecurityInfo\extConfig;
use AlibabaCloud\Tea\Model;

class appSecurityInfo extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $appKey;

    /**
     * @example abc123abc123
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }
        if (null !== $this->extConfig) {
            $res['ExtConfig'] = null !== $this->extConfig ? $this->extConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appSecurityInfo
     */
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

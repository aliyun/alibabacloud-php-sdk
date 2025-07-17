<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AgentServiceConfig\dashScopeConfig;

use AlibabaCloud\Tea\Model;

class appCredentials extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $appId;
    protected $_name = [
        'apiKey' => 'apiKey',
        'appId' => 'appId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appCredentials
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        return $model;
    }
}

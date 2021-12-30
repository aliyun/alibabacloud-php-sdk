<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceTwoFactorResponseBody\config;

use AlibabaCloud\Tea\Model;

class dingTalkConfig extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var bool
     */
    public $hasAppSecret;
    protected $_name = [
        'agentId'      => 'AgentId',
        'appKey'       => 'AppKey',
        'hasAppSecret' => 'HasAppSecret',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->hasAppSecret) {
            $res['HasAppSecret'] = $this->hasAppSecret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dingTalkConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['HasAppSecret'])) {
            $model->hasAppSecret = $map['HasAppSecret'];
        }

        return $model;
    }
}

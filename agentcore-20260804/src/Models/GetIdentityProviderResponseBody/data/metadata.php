<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderResponseBody\data;

use AlibabaCloud\Dara\Model;

class metadata extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $corpId;
    protected $_name = [
        'appId' => 'appId',
        'appKey' => 'appKey',
        'corpId' => 'corpId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->appKey) {
            $res['appKey'] = $this->appKey;
        }

        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['appKey'])) {
            $model->appKey = $map['appKey'];
        }

        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }

        return $model;
    }
}

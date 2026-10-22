<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListIdentityProvidersResponseBody\items;

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
    public $binding;

    /**
     * @var string
     */
    public $certificates;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $loginUrl;
    protected $_name = [
        'appId' => 'appId',
        'appKey' => 'appKey',
        'binding' => 'binding',
        'certificates' => 'certificates',
        'corpId' => 'corpId',
        'entityId' => 'entityId',
        'loginUrl' => 'loginUrl',
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

        if (null !== $this->binding) {
            $res['binding'] = $this->binding;
        }

        if (null !== $this->certificates) {
            $res['certificates'] = $this->certificates;
        }

        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }

        if (null !== $this->entityId) {
            $res['entityId'] = $this->entityId;
        }

        if (null !== $this->loginUrl) {
            $res['loginUrl'] = $this->loginUrl;
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

        if (isset($map['binding'])) {
            $model->binding = $map['binding'];
        }

        if (isset($map['certificates'])) {
            $model->certificates = $map['certificates'];
        }

        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }

        if (isset($map['entityId'])) {
            $model->entityId = $map['entityId'];
        }

        if (isset($map['loginUrl'])) {
            $model->loginUrl = $map['loginUrl'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class DeleteLiveDomainMappingRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pullDomain;

    /**
     * @var string
     */
    public $pushDomain;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'pullDomain' => 'PullDomain',
        'pushDomain' => 'PushDomain',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pullDomain) {
            $res['PullDomain'] = $this->pullDomain;
        }

        if (null !== $this->pushDomain) {
            $res['PushDomain'] = $this->pushDomain;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PullDomain'])) {
            $model->pullDomain = $map['PullDomain'];
        }

        if (isset($map['PushDomain'])) {
            $model->pushDomain = $map['PushDomain'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}

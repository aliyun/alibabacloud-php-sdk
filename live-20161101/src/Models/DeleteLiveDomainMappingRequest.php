<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveDomainMappingRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pushDomain;

    /**
     * @var string
     */
    public $pullDomain;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'ownerId'       => 'OwnerId',
        'pushDomain'    => 'PushDomain',
        'pullDomain'    => 'PullDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pushDomain) {
            $res['PushDomain'] = $this->pushDomain;
        }
        if (null !== $this->pullDomain) {
            $res['PullDomain'] = $this->pullDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLiveDomainMappingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PushDomain'])) {
            $model->pushDomain = $map['PushDomain'];
        }
        if (isset($map['PullDomain'])) {
            $model->pullDomain = $map['PullDomain'];
        }

        return $model;
    }
}

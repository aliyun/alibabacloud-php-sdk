<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiGroupVpcWhitelistRequest extends Model
{
    /**
     * @description The ID of the API group.
     *
     * @example 9b80408147724ddab4c4e2703c6ca019
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the VPC instance.
     *
     * @example vpc-bp11w979o2s9rcr962w25
     *
     * @var string
     */
    public $vpcIds;
    protected $_name = [
        'groupId'       => 'GroupId',
        'securityToken' => 'SecurityToken',
        'vpcIds'        => 'VpcIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->vpcIds) {
            $res['VpcIds'] = $this->vpcIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApiGroupVpcWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['VpcIds'])) {
            $model->vpcIds = $map['VpcIds'];
        }

        return $model;
    }
}

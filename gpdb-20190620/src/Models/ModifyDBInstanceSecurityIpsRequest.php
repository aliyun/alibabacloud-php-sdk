<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20190620\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceSecurityIpsRequest extends Model
{
    /**
     * @example 253460731706911258
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example WhileListGroupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example "127.0.0.1,192.168.0.1"
     *
     * @var string
     */
    public $whileList;
    protected $_name = [
        'aliUid'     => 'AliUid',
        'groupName'  => 'GroupName',
        'instanceId' => 'InstanceId',
        'ownerId'    => 'OwnerId',
        'whileList'  => 'WhileList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->whileList) {
            $res['WhileList'] = $this->whileList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceSecurityIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['WhileList'])) {
            $model->whileList = $map['WhileList'];
        }

        return $model;
    }
}

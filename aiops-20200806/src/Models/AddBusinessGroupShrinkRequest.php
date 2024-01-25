<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class AddBusinessGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $businessGroupDesc;

    /**
     * @var string
     */
    public $businessGroupName;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $instanceListShrink;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var string
     */
    public $updateUser;
    protected $_name = [
        'aliUid'             => 'AliUid',
        'businessGroupDesc'  => 'BusinessGroupDesc',
        'businessGroupName'  => 'BusinessGroupName',
        'createUser'         => 'CreateUser',
        'instanceListShrink' => 'InstanceList',
        'operaUid'           => 'OperaUid',
        'resourceType'       => 'ResourceType',
        'updateUser'         => 'UpdateUser',
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
        if (null !== $this->businessGroupDesc) {
            $res['BusinessGroupDesc'] = $this->businessGroupDesc;
        }
        if (null !== $this->businessGroupName) {
            $res['BusinessGroupName'] = $this->businessGroupName;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->instanceListShrink) {
            $res['InstanceList'] = $this->instanceListShrink;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->updateUser) {
            $res['UpdateUser'] = $this->updateUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddBusinessGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['BusinessGroupDesc'])) {
            $model->businessGroupDesc = $map['BusinessGroupDesc'];
        }
        if (isset($map['BusinessGroupName'])) {
            $model->businessGroupName = $map['BusinessGroupName'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['InstanceList'])) {
            $model->instanceListShrink = $map['InstanceList'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['UpdateUser'])) {
            $model->updateUser = $map['UpdateUser'];
        }

        return $model;
    }
}

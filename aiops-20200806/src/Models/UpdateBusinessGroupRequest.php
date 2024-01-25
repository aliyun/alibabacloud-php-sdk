<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateBusinessGroupRequest extends Model
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
    public $businessGroupId;

    /**
     * @var string
     */
    public $businessGroupName;

    /**
     * @var string
     */
    public $cloudResourceTypeId;

    /**
     * @var int
     */
    public $dealType;

    /**
     * @var string[]
     */
    public $instanceList;

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
        'aliUid'              => 'AliUid',
        'businessGroupDesc'   => 'BusinessGroupDesc',
        'businessGroupId'     => 'BusinessGroupId',
        'businessGroupName'   => 'BusinessGroupName',
        'cloudResourceTypeId' => 'CloudResourceTypeId',
        'dealType'            => 'DealType',
        'instanceList'        => 'InstanceList',
        'operaUid'            => 'OperaUid',
        'resourceType'        => 'ResourceType',
        'updateUser'          => 'UpdateUser',
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
        if (null !== $this->businessGroupId) {
            $res['BusinessGroupId'] = $this->businessGroupId;
        }
        if (null !== $this->businessGroupName) {
            $res['BusinessGroupName'] = $this->businessGroupName;
        }
        if (null !== $this->cloudResourceTypeId) {
            $res['CloudResourceTypeId'] = $this->cloudResourceTypeId;
        }
        if (null !== $this->dealType) {
            $res['DealType'] = $this->dealType;
        }
        if (null !== $this->instanceList) {
            $res['InstanceList'] = $this->instanceList;
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
     * @return UpdateBusinessGroupRequest
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
        if (isset($map['BusinessGroupId'])) {
            $model->businessGroupId = $map['BusinessGroupId'];
        }
        if (isset($map['BusinessGroupName'])) {
            $model->businessGroupName = $map['BusinessGroupName'];
        }
        if (isset($map['CloudResourceTypeId'])) {
            $model->cloudResourceTypeId = $map['CloudResourceTypeId'];
        }
        if (isset($map['DealType'])) {
            $model->dealType = $map['DealType'];
        }
        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = $map['InstanceList'];
            }
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

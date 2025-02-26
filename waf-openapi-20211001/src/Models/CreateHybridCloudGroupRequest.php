<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class CreateHybridCloudGroupRequest extends Model
{
    /**
     * @var string
     */
    public $backSourceMark;
    /**
     * @var int
     */
    public $clusterId;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $groupType;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $loadBalanceIp;
    /**
     * @var string
     */
    public $locationCode;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'backSourceMark'                 => 'BackSourceMark',
        'clusterId'                      => 'ClusterId',
        'groupName'                      => 'GroupName',
        'groupType'                      => 'GroupType',
        'instanceId'                     => 'InstanceId',
        'loadBalanceIp'                  => 'LoadBalanceIp',
        'locationCode'                   => 'LocationCode',
        'regionId'                       => 'RegionId',
        'remark'                         => 'Remark',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backSourceMark) {
            $res['BackSourceMark'] = $this->backSourceMark;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->loadBalanceIp) {
            $res['LoadBalanceIp'] = $this->loadBalanceIp;
        }

        if (null !== $this->locationCode) {
            $res['LocationCode'] = $this->locationCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
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
        if (isset($map['BackSourceMark'])) {
            $model->backSourceMark = $map['BackSourceMark'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LoadBalanceIp'])) {
            $model->loadBalanceIp = $map['LoadBalanceIp'];
        }

        if (isset($map['LocationCode'])) {
            $model->locationCode = $map['LocationCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        return $model;
    }
}

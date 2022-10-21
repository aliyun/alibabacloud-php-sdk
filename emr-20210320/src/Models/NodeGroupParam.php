<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class NodeGroupParam extends Model
{
    /**
     * @var bool
     */
    public $autoPayOrder;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @var string
     */
    public $autoRenewDurationUnit;

    /**
     * @var DiskInfo[]
     */
    public $dataDisks;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var int
     */
    public $nodeGroupIndex;

    /**
     * @var string
     */
    public $nodeGroupName;

    /**
     * @var string
     */
    public $nodeGroupType;

    /**
     * @var int
     */
    public $paymentDuration;

    /**
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var SystemDiskParam
     */
    public $systemDisk;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoPayOrder'          => 'AutoPayOrder',
        'autoRenew'             => 'AutoRenew',
        'autoRenewDuration'     => 'AutoRenewDuration',
        'autoRenewDurationUnit' => 'AutoRenewDurationUnit',
        'dataDisks'             => 'DataDisks',
        'description'           => 'Description',
        'instanceTypes'         => 'InstanceTypes',
        'nodeCount'             => 'NodeCount',
        'nodeGroupIndex'        => 'NodeGroupIndex',
        'nodeGroupName'         => 'NodeGroupName',
        'nodeGroupType'         => 'NodeGroupType',
        'paymentDuration'       => 'PaymentDuration',
        'paymentDurationUnit'   => 'PaymentDurationUnit',
        'paymentType'           => 'PaymentType',
        'systemDisk'            => 'SystemDisk',
        'vSwitchIds'            => 'VSwitchIds',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPayOrder) {
            $res['AutoPayOrder'] = $this->autoPayOrder;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewDuration) {
            $res['AutoRenewDuration'] = $this->autoRenewDuration;
        }
        if (null !== $this->autoRenewDurationUnit) {
            $res['AutoRenewDurationUnit'] = $this->autoRenewDurationUnit;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = [];
            if (null !== $this->dataDisks && \is_array($this->dataDisks)) {
                $n = 0;
                foreach ($this->dataDisks as $item) {
                    $res['DataDisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->nodeGroupIndex) {
            $res['NodeGroupIndex'] = $this->nodeGroupIndex;
        }
        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }
        if (null !== $this->nodeGroupType) {
            $res['NodeGroupType'] = $this->nodeGroupType;
        }
        if (null !== $this->paymentDuration) {
            $res['PaymentDuration'] = $this->paymentDuration;
        }
        if (null !== $this->paymentDurationUnit) {
            $res['PaymentDurationUnit'] = $this->paymentDurationUnit;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NodeGroupParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPayOrder'])) {
            $model->autoPayOrder = $map['AutoPayOrder'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewDuration'])) {
            $model->autoRenewDuration = $map['AutoRenewDuration'];
        }
        if (isset($map['AutoRenewDurationUnit'])) {
            $model->autoRenewDurationUnit = $map['AutoRenewDurationUnit'];
        }
        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n                = 0;
                foreach ($map['DataDisks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? DiskInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['NodeGroupIndex'])) {
            $model->nodeGroupIndex = $map['NodeGroupIndex'];
        }
        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }
        if (isset($map['NodeGroupType'])) {
            $model->nodeGroupType = $map['NodeGroupType'];
        }
        if (isset($map['PaymentDuration'])) {
            $model->paymentDuration = $map['PaymentDuration'];
        }
        if (isset($map['PaymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['PaymentDurationUnit'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = SystemDiskParam::fromMap($map['SystemDisk']);
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

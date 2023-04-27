<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @example aliyun-asiapacific-beijing-123456
     *
     * @var string
     */
    public $backSourceMark;

    /**
     * @example 410
     *
     * @var int
     */
    public $continentsValue;

    /**
     * @example 123
     *
     * @var int
     */
    public $groupId;

    /**
     * @example StorageGroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @example protect
     *
     * @var string
     */
    public $groupType;

    /**
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $loadBalanceIp;

    /**
     * @example 1312
     *
     * @var int
     */
    public $locationId;

    /**
     * @example 0
     *
     * @var int
     */
    public $operatorValue;

    /**
     * @example 80,9200,20018
     *
     * @var string
     */
    public $ports;

    /**
     * @example 0
     *
     * @var int
     */
    public $regionCodeValue;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'backSourceMark'  => 'BackSourceMark',
        'continentsValue' => 'ContinentsValue',
        'groupId'         => 'GroupId',
        'groupName'       => 'GroupName',
        'groupType'       => 'GroupType',
        'loadBalanceIp'   => 'LoadBalanceIp',
        'locationId'      => 'LocationId',
        'operatorValue'   => 'OperatorValue',
        'ports'           => 'Ports',
        'regionCodeValue' => 'RegionCodeValue',
        'remark'          => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backSourceMark) {
            $res['BackSourceMark'] = $this->backSourceMark;
        }
        if (null !== $this->continentsValue) {
            $res['ContinentsValue'] = $this->continentsValue;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->loadBalanceIp) {
            $res['LoadBalanceIp'] = $this->loadBalanceIp;
        }
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }
        if (null !== $this->operatorValue) {
            $res['OperatorValue'] = $this->operatorValue;
        }
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
        }
        if (null !== $this->regionCodeValue) {
            $res['RegionCodeValue'] = $this->regionCodeValue;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackSourceMark'])) {
            $model->backSourceMark = $map['BackSourceMark'];
        }
        if (isset($map['ContinentsValue'])) {
            $model->continentsValue = $map['ContinentsValue'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['LoadBalanceIp'])) {
            $model->loadBalanceIp = $map['LoadBalanceIp'];
        }
        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }
        if (isset($map['OperatorValue'])) {
            $model->operatorValue = $map['OperatorValue'];
        }
        if (isset($map['Ports'])) {
            $model->ports = $map['Ports'];
        }
        if (isset($map['RegionCodeValue'])) {
            $model->regionCodeValue = $map['RegionCodeValue'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}

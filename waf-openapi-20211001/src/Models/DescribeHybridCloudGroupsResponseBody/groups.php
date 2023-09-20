<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @var string
     */
    public $backSourceMark;

    /**
     * @var int
     */
    public $continentsValue;

    /**
     * @description The ID of the hybrid cloud node group.
     *
     * @example 123
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The name of the hybrid cloud node group.
     *
     * @example StorageGroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the hybrid cloud node group. Valid values:
     *
     *   **protect**
     *   **control**
     *   **storage**
     *   **controlStorage**
     *
     * @example protect
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The IP address of the server for load balancing.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $loadBalanceIp;

    /**
     * @description The ID of the protection node.
     *
     * @example 1312
     *
     * @var int
     */
    public $locationId;

    /**
     * @var int
     */
    public $operatorValue;

    /**
     * @description The port that is used by the hybrid cloud cluster. The value of this parameter is a string. If multiple ports are returned, the value is in the **port1,port2,port3** format.
     *
     * @example 80,9200,20018
     *
     * @var string
     */
    public $ports;

    /**
     * @var int
     */
    public $regionCodeValue;

    /**
     * @description The description of the hybrid cloud node group.
     *
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

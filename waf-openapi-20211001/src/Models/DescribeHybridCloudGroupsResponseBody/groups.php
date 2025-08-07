<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudGroupsResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $groupId;

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
    public $loadBalanceIp;

    /**
     * @var int
     */
    public $locationId;

    /**
     * @var int
     */
    public $operatorValue;

    /**
     * @var string
     */
    public $ports;

    /**
     * @var int
     */
    public $regionCodeValue;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'backSourceMark' => 'BackSourceMark',
        'continentsValue' => 'ContinentsValue',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'groupType' => 'GroupType',
        'loadBalanceIp' => 'LoadBalanceIp',
        'locationId' => 'LocationId',
        'operatorValue' => 'OperatorValue',
        'ports' => 'Ports',
        'regionCodeValue' => 'RegionCodeValue',
        'remark' => 'Remark',
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

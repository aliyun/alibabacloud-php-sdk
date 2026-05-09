<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceEndpointResponseBody\data\items;

use AlibabaCloud\Dara\Model;

class endpoint extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $class;

    /**
     * @var int
     */
    public $endpointGroupId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $readType;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var int
     */
    public $tunnelId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $userVisible;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vip;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $vport;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'address' => 'Address',
        'class' => 'Class',
        'endpointGroupId' => 'EndpointGroupId',
        'id' => 'Id',
        'isDefault' => 'IsDefault',
        'kind' => 'Kind',
        'netType' => 'NetType',
        'readType' => 'ReadType',
        'targetName' => 'TargetName',
        'tunnelId' => 'TunnelId',
        'type' => 'Type',
        'userVisible' => 'UserVisible',
        'vSwitchId' => 'VSwitchId',
        'vip' => 'Vip',
        'vpcId' => 'VpcId',
        'vport' => 'Vport',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }

        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }

        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        if (null !== $this->readType) {
            $res['ReadType'] = $this->readType;
        }

        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }

        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userVisible) {
            $res['UserVisible'] = $this->userVisible;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vip) {
            $res['Vip'] = $this->vip;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vport) {
            $res['Vport'] = $this->vport;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }

        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        if (isset($map['ReadType'])) {
            $model->readType = $map['ReadType'];
        }

        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }

        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserVisible'])) {
            $model->userVisible = $map['UserVisible'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['Vip'])) {
            $model->vip = $map['Vip'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['Vport'])) {
            $model->vport = $map['Vport'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

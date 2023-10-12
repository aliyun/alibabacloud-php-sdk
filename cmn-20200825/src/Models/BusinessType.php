<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class BusinessType extends Model
{
    /**
     * @example abbr
     *
     * @var string
     */
    public $abbr;

    /**
     * @example DHCP
     *
     * @var string
     */
    public $actionFlag;

    /**
     * @var string
     */
    public $businessTypeId;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $direction;

    /**
     * @example 0
     *
     * @var int
     */
    public $gateway;

    /**
     * @example 1440
     *
     * @var string
     */
    public $leaseTime;

    /**
     * @example 24
     *
     * @var string
     */
    public $mask;

    /**
     * @example 互联地址
     *
     * @var string
     */
    public $name;

    /**
     * @example 0
     *
     * @var int
     */
    public $reserveNumber;

    /**
     * @example reuse/single
     *
     * @var string
     */
    public $sharing;

    /**
     * @example other
     *
     * @var string
     */
    public $type;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 100
     *
     * @var string
     */
    public $vlan;

    /**
     * @example 办公区
     *
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'abbr'           => 'Abbr',
        'actionFlag'     => 'ActionFlag',
        'businessTypeId' => 'BusinessTypeId',
        'createTime'     => 'CreateTime',
        'direction'      => 'Direction',
        'gateway'        => 'Gateway',
        'leaseTime'      => 'LeaseTime',
        'mask'           => 'Mask',
        'name'           => 'Name',
        'reserveNumber'  => 'ReserveNumber',
        'sharing'        => 'Sharing',
        'type'           => 'Type',
        'updateTime'     => 'UpdateTime',
        'vlan'           => 'Vlan',
        'zoneType'       => 'ZoneType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abbr) {
            $res['Abbr'] = $this->abbr;
        }
        if (null !== $this->actionFlag) {
            $res['ActionFlag'] = $this->actionFlag;
        }
        if (null !== $this->businessTypeId) {
            $res['BusinessTypeId'] = $this->businessTypeId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }
        if (null !== $this->leaseTime) {
            $res['LeaseTime'] = $this->leaseTime;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->reserveNumber) {
            $res['ReserveNumber'] = $this->reserveNumber;
        }
        if (null !== $this->sharing) {
            $res['Sharing'] = $this->sharing;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->vlan) {
            $res['Vlan'] = $this->vlan;
        }
        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BusinessType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Abbr'])) {
            $model->abbr = $map['Abbr'];
        }
        if (isset($map['ActionFlag'])) {
            $model->actionFlag = $map['ActionFlag'];
        }
        if (isset($map['BusinessTypeId'])) {
            $model->businessTypeId = $map['BusinessTypeId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }
        if (isset($map['LeaseTime'])) {
            $model->leaseTime = $map['LeaseTime'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ReserveNumber'])) {
            $model->reserveNumber = $map['ReserveNumber'];
        }
        if (isset($map['Sharing'])) {
            $model->sharing = $map['Sharing'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Vlan'])) {
            $model->vlan = $map['Vlan'];
        }
        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }

        return $model;
    }
}

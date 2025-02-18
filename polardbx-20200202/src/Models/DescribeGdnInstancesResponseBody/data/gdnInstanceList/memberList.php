<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeGdnInstancesResponseBody\data\gdnInstanceList;

use AlibabaCloud\Dara\Model;

class memberList extends Model
{
    /**
     * @var string
     */
    public $classCode;
    /**
     * @var string
     */
    public $cnNodeClassCode;
    /**
     * @var string
     */
    public $cnNodeCount;
    /**
     * @var string
     */
    public $commodityCode;
    /**
     * @var string
     */
    public $dnNodeClassCode;
    /**
     * @var string
     */
    public $dnNodeCount;
    /**
     * @var string
     */
    public $expireTime;
    /**
     * @var string
     */
    public $gmtCreated;
    /**
     * @var string
     */
    public $memberName;
    /**
     * @var string
     */
    public $payType;
    /**
     * @var string
     */
    public $primaryZone;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $role;
    /**
     * @var string
     */
    public $secondaryZone;
    /**
     * @var string
     */
    public $secondsBehindMaster;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $taskStatus;
    /**
     * @var string
     */
    public $tertiaryZone;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'classCode'           => 'ClassCode',
        'cnNodeClassCode'     => 'CnNodeClassCode',
        'cnNodeCount'         => 'CnNodeCount',
        'commodityCode'       => 'CommodityCode',
        'dnNodeClassCode'     => 'DnNodeClassCode',
        'dnNodeCount'         => 'DnNodeCount',
        'expireTime'          => 'ExpireTime',
        'gmtCreated'          => 'GmtCreated',
        'memberName'          => 'MemberName',
        'payType'             => 'PayType',
        'primaryZone'         => 'PrimaryZone',
        'regionId'            => 'RegionId',
        'role'                => 'Role',
        'secondaryZone'       => 'SecondaryZone',
        'secondsBehindMaster' => 'SecondsBehindMaster',
        'status'              => 'Status',
        'taskStatus'          => 'TaskStatus',
        'tertiaryZone'        => 'TertiaryZone',
        'zoneId'              => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }

        if (null !== $this->cnNodeClassCode) {
            $res['CnNodeClassCode'] = $this->cnNodeClassCode;
        }

        if (null !== $this->cnNodeCount) {
            $res['CnNodeCount'] = $this->cnNodeCount;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->dnNodeClassCode) {
            $res['DnNodeClassCode'] = $this->dnNodeClassCode;
        }

        if (null !== $this->dnNodeCount) {
            $res['DnNodeCount'] = $this->dnNodeCount;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->primaryZone) {
            $res['PrimaryZone'] = $this->primaryZone;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->secondaryZone) {
            $res['SecondaryZone'] = $this->secondaryZone;
        }

        if (null !== $this->secondsBehindMaster) {
            $res['SecondsBehindMaster'] = $this->secondsBehindMaster;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->tertiaryZone) {
            $res['TertiaryZone'] = $this->tertiaryZone;
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
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }

        if (isset($map['CnNodeClassCode'])) {
            $model->cnNodeClassCode = $map['CnNodeClassCode'];
        }

        if (isset($map['CnNodeCount'])) {
            $model->cnNodeCount = $map['CnNodeCount'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['DnNodeClassCode'])) {
            $model->dnNodeClassCode = $map['DnNodeClassCode'];
        }

        if (isset($map['DnNodeCount'])) {
            $model->dnNodeCount = $map['DnNodeCount'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['PrimaryZone'])) {
            $model->primaryZone = $map['PrimaryZone'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['SecondaryZone'])) {
            $model->secondaryZone = $map['SecondaryZone'];
        }

        if (isset($map['SecondsBehindMaster'])) {
            $model->secondsBehindMaster = $map['SecondsBehindMaster'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TertiaryZone'])) {
            $model->tertiaryZone = $map['TertiaryZone'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

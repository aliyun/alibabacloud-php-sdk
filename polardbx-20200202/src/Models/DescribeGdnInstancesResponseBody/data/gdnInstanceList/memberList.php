<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeGdnInstancesResponseBody\data\gdnInstanceList;

use AlibabaCloud\Tea\Model;

class memberList extends Model
{
    /**
     * @example polarx.x4.medium.2e
     *
     * @var string
     */
    public $classCode;

    /**
     * @example polarx.x4.medium.2e
     *
     * @var string
     */
    public $cnNodeClassCode;

    /**
     * @example 2
     *
     * @var string
     */
    public $cnNodeCount;

    /**
     * @example drds_polarxpre_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example mysql.n4.medium.25
     *
     * @var string
     */
    public $dnNodeClassCode;

    /**
     * @example 2
     *
     * @var string
     */
    public $dnNodeCount;

    /**
     * @example 2025-01-02T13:11:10.000+0000
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 2025-01-02T13:11:10.000+0000
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example pxc-***
     *
     * @var string
     */
    public $memberName;

    /**
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example cn-zhangjiakou-a
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example primary、
     * standby
     *
     * @var string
     */
    public $role;

    /**
     * @example cn-zhangjiakou-a
     *
     * @var string
     */
    public $secondaryZone;

    /**
     * @example 1s
     *
     * @var string
     */
    public $secondsBehindMaster;

    /**
     * @example Creating
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @example cn-zhangjiakou-a
     *
     * @var string
     */
    public $tertiaryZone;

    /**
     * @example cn-zhangjiakou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'classCode' => 'ClassCode',
        'cnNodeClassCode' => 'CnNodeClassCode',
        'cnNodeCount' => 'CnNodeCount',
        'commodityCode' => 'CommodityCode',
        'dnNodeClassCode' => 'DnNodeClassCode',
        'dnNodeCount' => 'DnNodeCount',
        'expireTime' => 'ExpireTime',
        'gmtCreated' => 'GmtCreated',
        'memberName' => 'MemberName',
        'payType' => 'PayType',
        'primaryZone' => 'PrimaryZone',
        'regionId' => 'RegionId',
        'role' => 'Role',
        'secondaryZone' => 'SecondaryZone',
        'secondsBehindMaster' => 'SecondsBehindMaster',
        'status' => 'Status',
        'taskStatus' => 'TaskStatus',
        'tertiaryZone' => 'TertiaryZone',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return memberList
     */
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

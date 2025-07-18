<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSupabaseProjectsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 2021-10-09T04:54:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example xxpassword
     *
     * @var string
     */
    public $dashboardPassword;

    /**
     * @example null
     *
     * @var string
     */
    public $dashboardUserName;

    /**
     * @example PL0
     *
     * @var string
     */
    public $diskPerformanceLevel;

    /**
     * @example gpdb
     *
     * @var string
     */
    public $engine;

    /**
     * @example 6.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example 192.168.0.1
     *
     * @var string
     */
    public $privateConnectUrl;

    /**
     * @example sbp-12***
     *
     * @var string
     */
    public $projectId;

    /**
     * @example supabase_project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 1C1G
     *
     * @var string
     */
    public $projectSpec;

    /**
     * @example 10.154.11.10
     *
     * @var string
     */
    public $publicConnectUrl;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @example 2
     *
     * @var int
     */
    public $storageSize;

    /**
     * @description vSwitch ID。
     *
     * @example vsw-bp1cpq8mr64paltkb****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description VPC ID。
     *
     * @example vpc-bp19ame5m1r3oejns****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dashboardPassword' => 'DashboardPassword',
        'dashboardUserName' => 'DashboardUserName',
        'diskPerformanceLevel' => 'DiskPerformanceLevel',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'payType' => 'PayType',
        'privateConnectUrl' => 'PrivateConnectUrl',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'projectSpec' => 'ProjectSpec',
        'publicConnectUrl' => 'PublicConnectUrl',
        'regionId' => 'RegionId',
        'securityIPList' => 'SecurityIPList',
        'status' => 'Status',
        'storageSize' => 'StorageSize',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dashboardPassword) {
            $res['DashboardPassword'] = $this->dashboardPassword;
        }
        if (null !== $this->dashboardUserName) {
            $res['DashboardUserName'] = $this->dashboardUserName;
        }
        if (null !== $this->diskPerformanceLevel) {
            $res['DiskPerformanceLevel'] = $this->diskPerformanceLevel;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->privateConnectUrl) {
            $res['PrivateConnectUrl'] = $this->privateConnectUrl;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectSpec) {
            $res['ProjectSpec'] = $this->projectSpec;
        }
        if (null !== $this->publicConnectUrl) {
            $res['PublicConnectUrl'] = $this->publicConnectUrl;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DashboardPassword'])) {
            $model->dashboardPassword = $map['DashboardPassword'];
        }
        if (isset($map['DashboardUserName'])) {
            $model->dashboardUserName = $map['DashboardUserName'];
        }
        if (isset($map['DiskPerformanceLevel'])) {
            $model->diskPerformanceLevel = $map['DiskPerformanceLevel'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PrivateConnectUrl'])) {
            $model->privateConnectUrl = $map['PrivateConnectUrl'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectSpec'])) {
            $model->projectSpec = $map['ProjectSpec'];
        }
        if (isset($map['PublicConnectUrl'])) {
            $model->publicConnectUrl = $map['PublicConnectUrl'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

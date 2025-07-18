<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class GetSupabaseProjectResponseBody extends Model
{
    /**
     * @example 2019-09-08T16:00:00Z
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
     * @example username
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
     * @example postgres
     *
     * @var string
     */
    public $engine;

    /**
     * @example 15
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example 192.168.0.11
     *
     * @var string
     */
    public $privateConnectUrl;

    /**
     * @example sbp-545434
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
     * @example ABB39CC3-4488-4857-905D-2E4A051D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $securityIpList;

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
     * @example vsw-bp1cpq8mr64paltkb****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp*******************
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-i
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
        'privateConnectUrl' => 'PrivateConnectUrl',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'projectSpec' => 'ProjectSpec',
        'publicConnectUrl' => 'PublicConnectUrl',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'securityIpList' => 'SecurityIpList',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityIpList) {
            $res['SecurityIpList'] = $this->securityIpList;
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
     * @return GetSupabaseProjectResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityIpList'])) {
            $model->securityIpList = $map['SecurityIpList'];
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

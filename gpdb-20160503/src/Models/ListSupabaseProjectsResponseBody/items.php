<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSupabaseProjectsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dashboardPassword;

    /**
     * @var string
     */
    public $dashboardUserName;

    /**
     * @var string
     */
    public $diskPerformanceLevel;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $privateConnectUrl;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectSpec;

    /**
     * @var string
     */
    public $publicConnectUrl;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

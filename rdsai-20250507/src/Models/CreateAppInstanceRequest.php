<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateAppInstanceRequest\DBInstanceConfig;

class CreateAppInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var DBInstanceConfig
     */
    public $DBInstanceConfig;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $dashboardPassword;

    /**
     * @var string
     */
    public $dashboardUsername;

    /**
     * @var string
     */
    public $databasePassword;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var bool
     */
    public $publicEndpointEnabled;

    /**
     * @var bool
     */
    public $publicNetworkAccessEnabled;

    /**
     * @var bool
     */
    public $RAGEnabled;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'appName' => 'AppName',
        'appType' => 'AppType',
        'clientToken' => 'ClientToken',
        'DBInstanceConfig' => 'DBInstanceConfig',
        'DBInstanceName' => 'DBInstanceName',
        'dashboardPassword' => 'DashboardPassword',
        'dashboardUsername' => 'DashboardUsername',
        'databasePassword' => 'DatabasePassword',
        'instanceClass' => 'InstanceClass',
        'publicEndpointEnabled' => 'PublicEndpointEnabled',
        'publicNetworkAccessEnabled' => 'PublicNetworkAccessEnabled',
        'RAGEnabled' => 'RAGEnabled',
        'regionId' => 'RegionId',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (null !== $this->DBInstanceConfig) {
            $this->DBInstanceConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->DBInstanceConfig) {
            $res['DBInstanceConfig'] = null !== $this->DBInstanceConfig ? $this->DBInstanceConfig->toArray($noStream) : $this->DBInstanceConfig;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->dashboardPassword) {
            $res['DashboardPassword'] = $this->dashboardPassword;
        }

        if (null !== $this->dashboardUsername) {
            $res['DashboardUsername'] = $this->dashboardUsername;
        }

        if (null !== $this->databasePassword) {
            $res['DatabasePassword'] = $this->databasePassword;
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->publicEndpointEnabled) {
            $res['PublicEndpointEnabled'] = $this->publicEndpointEnabled;
        }

        if (null !== $this->publicNetworkAccessEnabled) {
            $res['PublicNetworkAccessEnabled'] = $this->publicNetworkAccessEnabled;
        }

        if (null !== $this->RAGEnabled) {
            $res['RAGEnabled'] = $this->RAGEnabled;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DBInstanceConfig'])) {
            $model->DBInstanceConfig = DBInstanceConfig::fromMap($map['DBInstanceConfig']);
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['DashboardPassword'])) {
            $model->dashboardPassword = $map['DashboardPassword'];
        }

        if (isset($map['DashboardUsername'])) {
            $model->dashboardUsername = $map['DashboardUsername'];
        }

        if (isset($map['DatabasePassword'])) {
            $model->databasePassword = $map['DatabasePassword'];
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['PublicEndpointEnabled'])) {
            $model->publicEndpointEnabled = $map['PublicEndpointEnabled'];
        }

        if (isset($map['PublicNetworkAccessEnabled'])) {
            $model->publicNetworkAccessEnabled = $map['PublicNetworkAccessEnabled'];
        }

        if (isset($map['RAGEnabled'])) {
            $model->RAGEnabled = $map['RAGEnabled'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}

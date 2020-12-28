<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\SearchApplicationScopesResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $configurationId;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var int
     */
    public $deviceType;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var string
     */
    public $hostConfigurationId;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'status'              => 'Status',
        'configurationId'     => 'ConfigurationId',
        'privateIp'           => 'PrivateIp',
        'deviceName'          => 'DeviceName',
        'deviceType'          => 'DeviceType',
        'userId'              => 'UserId',
        'namespace'           => 'Namespace',
        'appName'             => 'AppName',
        'groupName'           => 'GroupName',
        'appId'               => 'AppId',
        'publicIp'            => 'PublicIp',
        'hostConfigurationId' => 'HostConfigurationId',
        'clusterId'           => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->configurationId) {
            $res['ConfigurationId'] = $this->configurationId;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }
        if (null !== $this->hostConfigurationId) {
            $res['HostConfigurationId'] = $this->hostConfigurationId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ConfigurationId'])) {
            $model->configurationId = $map['ConfigurationId'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }
        if (isset($map['HostConfigurationId'])) {
            $model->hostConfigurationId = $map['HostConfigurationId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models\GetUserGatewayInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class gatewayInstanceList extends Model
{
    /**
     * @description 连接类型
     *
     * @example internet
     *
     * @var string
     */
    public $connectEndpointType;

    /**
     * @description 进程的版本号
     *
     * @example 3.0
     *
     * @var string
     */
    public $currentDaemonVersion;

    /**
     * @description 版本号
     *
     * @example 3.0
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description 端点地址
     *
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $endPoint;

    /**
     * @description 网关ID
     *
     * @example dg-159t17m19ps0****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example dg-node-wJOb0tO-gaaWFCug****
     *
     * @var string
     */
    public $gatewayInstanceId;

    /**
     * @example STOPPED
     *
     * @var string
     */
    public $gatewayInstanceStatus;

    /**
     * @description 上次更新时间戳
     *
     * @example 1699330233000
     *
     * @var int
     */
    public $lastUpdateTime;

    /**
     * @description 本地IP地址
     *
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $localIP;

    /**
     * @description 提示信息
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @description 主机
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $outputIP;

    /**
     * @description 代表region的资源属性字段
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'connectEndpointType'   => 'ConnectEndpointType',
        'currentDaemonVersion'  => 'CurrentDaemonVersion',
        'currentVersion'        => 'CurrentVersion',
        'endPoint'              => 'EndPoint',
        'gatewayId'             => 'GatewayId',
        'gatewayInstanceId'     => 'GatewayInstanceId',
        'gatewayInstanceStatus' => 'GatewayInstanceStatus',
        'lastUpdateTime'        => 'LastUpdateTime',
        'localIP'               => 'LocalIP',
        'message'               => 'Message',
        'outputIP'              => 'OutputIP',
        'regionId'              => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectEndpointType) {
            $res['ConnectEndpointType'] = $this->connectEndpointType;
        }
        if (null !== $this->currentDaemonVersion) {
            $res['CurrentDaemonVersion'] = $this->currentDaemonVersion;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayInstanceId) {
            $res['GatewayInstanceId'] = $this->gatewayInstanceId;
        }
        if (null !== $this->gatewayInstanceStatus) {
            $res['GatewayInstanceStatus'] = $this->gatewayInstanceStatus;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->localIP) {
            $res['LocalIP'] = $this->localIP;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->outputIP) {
            $res['OutputIP'] = $this->outputIP;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectEndpointType'])) {
            $model->connectEndpointType = $map['ConnectEndpointType'];
        }
        if (isset($map['CurrentDaemonVersion'])) {
            $model->currentDaemonVersion = $map['CurrentDaemonVersion'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayInstanceId'])) {
            $model->gatewayInstanceId = $map['GatewayInstanceId'];
        }
        if (isset($map['GatewayInstanceStatus'])) {
            $model->gatewayInstanceStatus = $map['GatewayInstanceStatus'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['LocalIP'])) {
            $model->localIP = $map['LocalIP'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OutputIP'])) {
            $model->outputIP = $map['OutputIP'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

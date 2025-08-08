<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class PushReportRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $connectType;

    /**
     * @var string
     */
    public $deliveryToken;

    /**
     * @var string
     */
    public $imei;

    /**
     * @var string
     */
    public $imsi;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $osType;

    /**
     * @var string
     */
    public $pushVersion;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $thirdChannel;

    /**
     * @var string
     */
    public $thirdChannelDeviceToken;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'appVersion' => 'AppVersion',
        'channel' => 'Channel',
        'connectType' => 'ConnectType',
        'deliveryToken' => 'DeliveryToken',
        'imei' => 'Imei',
        'imsi' => 'Imsi',
        'model' => 'Model',
        'osType' => 'OsType',
        'pushVersion' => 'PushVersion',
        'tenantId' => 'TenantId',
        'thirdChannel' => 'ThirdChannel',
        'thirdChannelDeviceToken' => 'ThirdChannelDeviceToken',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->connectType) {
            $res['ConnectType'] = $this->connectType;
        }

        if (null !== $this->deliveryToken) {
            $res['DeliveryToken'] = $this->deliveryToken;
        }

        if (null !== $this->imei) {
            $res['Imei'] = $this->imei;
        }

        if (null !== $this->imsi) {
            $res['Imsi'] = $this->imsi;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->pushVersion) {
            $res['PushVersion'] = $this->pushVersion;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->thirdChannel) {
            $res['ThirdChannel'] = $this->thirdChannel;
        }

        if (null !== $this->thirdChannelDeviceToken) {
            $res['ThirdChannelDeviceToken'] = $this->thirdChannelDeviceToken;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['ConnectType'])) {
            $model->connectType = $map['ConnectType'];
        }

        if (isset($map['DeliveryToken'])) {
            $model->deliveryToken = $map['DeliveryToken'];
        }

        if (isset($map['Imei'])) {
            $model->imei = $map['Imei'];
        }

        if (isset($map['Imsi'])) {
            $model->imsi = $map['Imsi'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['PushVersion'])) {
            $model->pushVersion = $map['PushVersion'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['ThirdChannel'])) {
            $model->thirdChannel = $map['ThirdChannel'];
        }

        if (isset($map['ThirdChannelDeviceToken'])) {
            $model->thirdChannelDeviceToken = $map['ThirdChannelDeviceToken'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class CheckUuidValidRequest extends Model
{
    /**
     * @var string
     */
    public $bluetooth;

    /**
     * @var string
     */
    public $buildId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $chipId;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $customId;

    /**
     * @var string
     */
    public $etherMac;

    /**
     * @var string
     */
    public $hostOsInfo;

    /**
     * @var string
     */
    public $loginRegionId;

    /**
     * @var string
     */
    public $loginToken;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $wlan;

    /**
     * @var string
     */
    public $wosAppVersion;
    protected $_name = [
        'bluetooth' => 'Bluetooth',
        'buildId' => 'BuildId',
        'chipId' => 'ChipId',
        'clientId' => 'ClientId',
        'clientVersion' => 'ClientVersion',
        'customId' => 'CustomId',
        'etherMac' => 'EtherMac',
        'hostOsInfo' => 'HostOsInfo',
        'loginRegionId' => 'LoginRegionId',
        'loginToken' => 'LoginToken',
        'serialNo' => 'SerialNo',
        'sessionId' => 'SessionId',
        'uuid' => 'Uuid',
        'wlan' => 'Wlan',
        'wosAppVersion' => 'WosAppVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bluetooth) {
            $res['Bluetooth'] = $this->bluetooth;
        }
        if (null !== $this->buildId) {
            $res['BuildId'] = $this->buildId;
        }
        if (null !== $this->chipId) {
            $res['ChipId'] = $this->chipId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->etherMac) {
            $res['EtherMac'] = $this->etherMac;
        }
        if (null !== $this->hostOsInfo) {
            $res['HostOsInfo'] = $this->hostOsInfo;
        }
        if (null !== $this->loginRegionId) {
            $res['LoginRegionId'] = $this->loginRegionId;
        }
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->wlan) {
            $res['Wlan'] = $this->wlan;
        }
        if (null !== $this->wosAppVersion) {
            $res['WosAppVersion'] = $this->wosAppVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckUuidValidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bluetooth'])) {
            $model->bluetooth = $map['Bluetooth'];
        }
        if (isset($map['BuildId'])) {
            $model->buildId = $map['BuildId'];
        }
        if (isset($map['ChipId'])) {
            $model->chipId = $map['ChipId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['EtherMac'])) {
            $model->etherMac = $map['EtherMac'];
        }
        if (isset($map['HostOsInfo'])) {
            $model->hostOsInfo = $map['HostOsInfo'];
        }
        if (isset($map['LoginRegionId'])) {
            $model->loginRegionId = $map['LoginRegionId'];
        }
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Wlan'])) {
            $model->wlan = $map['Wlan'];
        }
        if (isset($map['WosAppVersion'])) {
            $model->wosAppVersion = $map['WosAppVersion'];
        }

        return $model;
    }
}

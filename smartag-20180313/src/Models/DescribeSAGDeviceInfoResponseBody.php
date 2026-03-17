<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class DescribeSAGDeviceInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $controllerState;

    /**
     * @var string
     */
    public $lastConnectedControllerTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resettableStatus;

    /**
     * @var string
     */
    public $serviceIP;

    /**
     * @var string
     */
    public $smartAGType;

    /**
     * @var string
     */
    public $startupTime;

    /**
     * @var string
     */
    public $synStatus;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $vpnState;
    protected $_name = [
        'controllerState' => 'ControllerState',
        'lastConnectedControllerTime' => 'LastConnectedControllerTime',
        'requestId' => 'RequestId',
        'resettableStatus' => 'ResettableStatus',
        'serviceIP' => 'ServiceIP',
        'smartAGType' => 'SmartAGType',
        'startupTime' => 'StartupTime',
        'synStatus' => 'SynStatus',
        'version' => 'Version',
        'vpnState' => 'VpnState',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controllerState) {
            $res['ControllerState'] = $this->controllerState;
        }

        if (null !== $this->lastConnectedControllerTime) {
            $res['LastConnectedControllerTime'] = $this->lastConnectedControllerTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resettableStatus) {
            $res['ResettableStatus'] = $this->resettableStatus;
        }

        if (null !== $this->serviceIP) {
            $res['ServiceIP'] = $this->serviceIP;
        }

        if (null !== $this->smartAGType) {
            $res['SmartAGType'] = $this->smartAGType;
        }

        if (null !== $this->startupTime) {
            $res['StartupTime'] = $this->startupTime;
        }

        if (null !== $this->synStatus) {
            $res['SynStatus'] = $this->synStatus;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->vpnState) {
            $res['VpnState'] = $this->vpnState;
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
        if (isset($map['ControllerState'])) {
            $model->controllerState = $map['ControllerState'];
        }

        if (isset($map['LastConnectedControllerTime'])) {
            $model->lastConnectedControllerTime = $map['LastConnectedControllerTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResettableStatus'])) {
            $model->resettableStatus = $map['ResettableStatus'];
        }

        if (isset($map['ServiceIP'])) {
            $model->serviceIP = $map['ServiceIP'];
        }

        if (isset($map['SmartAGType'])) {
            $model->smartAGType = $map['SmartAGType'];
        }

        if (isset($map['StartupTime'])) {
            $model->startupTime = $map['StartupTime'];
        }

        if (isset($map['SynStatus'])) {
            $model->synStatus = $map['SynStatus'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VpnState'])) {
            $model->vpnState = $map['VpnState'];
        }

        return $model;
    }
}

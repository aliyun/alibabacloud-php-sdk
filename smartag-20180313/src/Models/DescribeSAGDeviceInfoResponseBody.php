<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DescribeSAGDeviceInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $serviceIP;

    /**
     * @var string
     */
    public $controllerState;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $synStatus;

    /**
     * @var string
     */
    public $smartAGType;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $vpnState;

    /**
     * @var string
     */
    public $startupTime;

    /**
     * @var string
     */
    public $lastConnectedControllerTime;
    protected $_name = [
        'serviceIP'                   => 'ServiceIP',
        'controllerState'             => 'ControllerState',
        'requestId'                   => 'RequestId',
        'synStatus'                   => 'SynStatus',
        'smartAGType'                 => 'SmartAGType',
        'version'                     => 'Version',
        'vpnState'                    => 'VpnState',
        'startupTime'                 => 'StartupTime',
        'lastConnectedControllerTime' => 'LastConnectedControllerTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceIP) {
            $res['ServiceIP'] = $this->serviceIP;
        }
        if (null !== $this->controllerState) {
            $res['ControllerState'] = $this->controllerState;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->synStatus) {
            $res['SynStatus'] = $this->synStatus;
        }
        if (null !== $this->smartAGType) {
            $res['SmartAGType'] = $this->smartAGType;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->vpnState) {
            $res['VpnState'] = $this->vpnState;
        }
        if (null !== $this->startupTime) {
            $res['StartupTime'] = $this->startupTime;
        }
        if (null !== $this->lastConnectedControllerTime) {
            $res['LastConnectedControllerTime'] = $this->lastConnectedControllerTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSAGDeviceInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceIP'])) {
            $model->serviceIP = $map['ServiceIP'];
        }
        if (isset($map['ControllerState'])) {
            $model->controllerState = $map['ControllerState'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SynStatus'])) {
            $model->synStatus = $map['SynStatus'];
        }
        if (isset($map['SmartAGType'])) {
            $model->smartAGType = $map['SmartAGType'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VpnState'])) {
            $model->vpnState = $map['VpnState'];
        }
        if (isset($map['StartupTime'])) {
            $model->startupTime = $map['StartupTime'];
        }
        if (isset($map['LastConnectedControllerTime'])) {
            $model->lastConnectedControllerTime = $map['LastConnectedControllerTime'];
        }

        return $model;
    }
}

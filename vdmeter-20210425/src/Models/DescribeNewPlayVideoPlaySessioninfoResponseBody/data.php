<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeNewPlayVideoPlaySessioninfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $deviceBrand;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var string
     */
    public $OS;

    /**
     * @var string
     */
    public $OV;

    /**
     * @var string
     */
    public $terminalType;

    /**
     * @var string
     */
    public $VPS;
    protected $_name = [
        'appId'        => 'AppId',
        'appName'      => 'AppName',
        'appVersion'   => 'AppVersion',
        'deviceBrand'  => 'DeviceBrand',
        'deviceModel'  => 'DeviceModel',
        'OS'           => 'OS',
        'OV'           => 'OV',
        'terminalType' => 'TerminalType',
        'VPS'          => 'VPS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->deviceBrand) {
            $res['DeviceBrand'] = $this->deviceBrand;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->OS) {
            $res['OS'] = $this->OS;
        }
        if (null !== $this->OV) {
            $res['OV'] = $this->OV;
        }
        if (null !== $this->terminalType) {
            $res['TerminalType'] = $this->terminalType;
        }
        if (null !== $this->VPS) {
            $res['VPS'] = $this->VPS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['DeviceBrand'])) {
            $model->deviceBrand = $map['DeviceBrand'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['OS'])) {
            $model->OS = $map['OS'];
        }
        if (isset($map['OV'])) {
            $model->OV = $map['OV'];
        }
        if (isset($map['TerminalType'])) {
            $model->terminalType = $map['TerminalType'];
        }
        if (isset($map['VPS'])) {
            $model->VPS = $map['VPS'];
        }

        return $model;
    }
}

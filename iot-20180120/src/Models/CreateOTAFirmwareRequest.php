<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateOTAFirmwareRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $firmwareName;

    /**
     * @var string
     */
    public $destVersion;

    /**
     * @var string
     */
    public $firmwareUrl;

    /**
     * @var string
     */
    public $firmwareSign;

    /**
     * @var string
     */
    public $signMethod;

    /**
     * @var int
     */
    public $firmwareSize;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $firmwareDesc;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $srcVersion;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var bool
     */
    public $needToVerify;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'firmwareName'  => 'FirmwareName',
        'destVersion'   => 'DestVersion',
        'firmwareUrl'   => 'FirmwareUrl',
        'firmwareSign'  => 'FirmwareSign',
        'signMethod'    => 'SignMethod',
        'firmwareSize'  => 'FirmwareSize',
        'productKey'    => 'ProductKey',
        'firmwareDesc'  => 'FirmwareDesc',
        'type'          => 'Type',
        'srcVersion'    => 'SrcVersion',
        'moduleName'    => 'ModuleName',
        'needToVerify'  => 'NeedToVerify',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->firmwareName) {
            $res['FirmwareName'] = $this->firmwareName;
        }
        if (null !== $this->destVersion) {
            $res['DestVersion'] = $this->destVersion;
        }
        if (null !== $this->firmwareUrl) {
            $res['FirmwareUrl'] = $this->firmwareUrl;
        }
        if (null !== $this->firmwareSign) {
            $res['FirmwareSign'] = $this->firmwareSign;
        }
        if (null !== $this->signMethod) {
            $res['SignMethod'] = $this->signMethod;
        }
        if (null !== $this->firmwareSize) {
            $res['FirmwareSize'] = $this->firmwareSize;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->firmwareDesc) {
            $res['FirmwareDesc'] = $this->firmwareDesc;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->srcVersion) {
            $res['SrcVersion'] = $this->srcVersion;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->needToVerify) {
            $res['NeedToVerify'] = $this->needToVerify;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOTAFirmwareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['FirmwareName'])) {
            $model->firmwareName = $map['FirmwareName'];
        }
        if (isset($map['DestVersion'])) {
            $model->destVersion = $map['DestVersion'];
        }
        if (isset($map['FirmwareUrl'])) {
            $model->firmwareUrl = $map['FirmwareUrl'];
        }
        if (isset($map['FirmwareSign'])) {
            $model->firmwareSign = $map['FirmwareSign'];
        }
        if (isset($map['SignMethod'])) {
            $model->signMethod = $map['SignMethod'];
        }
        if (isset($map['FirmwareSize'])) {
            $model->firmwareSize = $map['FirmwareSize'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['FirmwareDesc'])) {
            $model->firmwareDesc = $map['FirmwareDesc'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['SrcVersion'])) {
            $model->srcVersion = $map['SrcVersion'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['NeedToVerify'])) {
            $model->needToVerify = $map['NeedToVerify'];
        }

        return $model;
    }
}

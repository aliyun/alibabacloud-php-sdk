<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAFirmwareResponse;

use AlibabaCloud\Tea\Model;

class firmwareInfo extends Model
{
    /**
     * @var string
     */
    public $firmwareName;

    /**
     * @var string
     */
    public $firmwareId;

    /**
     * @var string
     */
    public $srcVersion;

    /**
     * @var string
     */
    public $destVersion;

    /**
     * @var string
     */
    public $utcCreate;

    /**
     * @var string
     */
    public $utcModified;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $firmwareDesc;

    /**
     * @var string
     */
    public $firmwareSign;

    /**
     * @var int
     */
    public $firmwareSize;

    /**
     * @var string
     */
    public $firmwareUrl;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $signMethod;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $verifyProgress;

    /**
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'firmwareName'   => 'FirmwareName',
        'firmwareId'     => 'FirmwareId',
        'srcVersion'     => 'SrcVersion',
        'destVersion'    => 'DestVersion',
        'utcCreate'      => 'UtcCreate',
        'utcModified'    => 'UtcModified',
        'status'         => 'Status',
        'firmwareDesc'   => 'FirmwareDesc',
        'firmwareSign'   => 'FirmwareSign',
        'firmwareSize'   => 'FirmwareSize',
        'firmwareUrl'    => 'FirmwareUrl',
        'productKey'     => 'ProductKey',
        'signMethod'     => 'SignMethod',
        'productName'    => 'ProductName',
        'type'           => 'Type',
        'verifyProgress' => 'VerifyProgress',
        'moduleName'     => 'ModuleName',
    ];

    public function validate()
    {
        Model::validateRequired('firmwareName', $this->firmwareName, true);
        Model::validateRequired('firmwareId', $this->firmwareId, true);
        Model::validateRequired('srcVersion', $this->srcVersion, true);
        Model::validateRequired('destVersion', $this->destVersion, true);
        Model::validateRequired('utcCreate', $this->utcCreate, true);
        Model::validateRequired('utcModified', $this->utcModified, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('firmwareDesc', $this->firmwareDesc, true);
        Model::validateRequired('firmwareSign', $this->firmwareSign, true);
        Model::validateRequired('firmwareSize', $this->firmwareSize, true);
        Model::validateRequired('firmwareUrl', $this->firmwareUrl, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('signMethod', $this->signMethod, true);
        Model::validateRequired('productName', $this->productName, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('verifyProgress', $this->verifyProgress, true);
        Model::validateRequired('moduleName', $this->moduleName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firmwareName) {
            $res['FirmwareName'] = $this->firmwareName;
        }
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->srcVersion) {
            $res['SrcVersion'] = $this->srcVersion;
        }
        if (null !== $this->destVersion) {
            $res['DestVersion'] = $this->destVersion;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->firmwareDesc) {
            $res['FirmwareDesc'] = $this->firmwareDesc;
        }
        if (null !== $this->firmwareSign) {
            $res['FirmwareSign'] = $this->firmwareSign;
        }
        if (null !== $this->firmwareSize) {
            $res['FirmwareSize'] = $this->firmwareSize;
        }
        if (null !== $this->firmwareUrl) {
            $res['FirmwareUrl'] = $this->firmwareUrl;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->signMethod) {
            $res['SignMethod'] = $this->signMethod;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->verifyProgress) {
            $res['VerifyProgress'] = $this->verifyProgress;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return firmwareInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirmwareName'])) {
            $model->firmwareName = $map['FirmwareName'];
        }
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['SrcVersion'])) {
            $model->srcVersion = $map['SrcVersion'];
        }
        if (isset($map['DestVersion'])) {
            $model->destVersion = $map['DestVersion'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FirmwareDesc'])) {
            $model->firmwareDesc = $map['FirmwareDesc'];
        }
        if (isset($map['FirmwareSign'])) {
            $model->firmwareSign = $map['FirmwareSign'];
        }
        if (isset($map['FirmwareSize'])) {
            $model->firmwareSize = $map['FirmwareSize'];
        }
        if (isset($map['FirmwareUrl'])) {
            $model->firmwareUrl = $map['FirmwareUrl'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SignMethod'])) {
            $model->signMethod = $map['SignMethod'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VerifyProgress'])) {
            $model->verifyProgress = $map['VerifyProgress'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        return $model;
    }
}

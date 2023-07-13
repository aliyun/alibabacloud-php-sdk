<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAFirmwareResponseBody\firmwareInfo;

use AlibabaCloud\Tea\Model;

class simpleFirmwareInfo extends Model
{
    /**
     * @description The version number of the OTA update package.
     *
     * @example 4.0.0
     *
     * @var string
     */
    public $destVersion;

    /**
     * @description The description of the OTA update package.
     *
     * @example firmwareDesc
     *
     * @var string
     */
    public $firmwareDesc;

    /**
     * @description The unique ID of the OTA update package.
     *
     * @example UfuxnwygsuSkVE0VCN****0100
     *
     * @var string
     */
    public $firmwareId;

    /**
     * @description The name of the OTA update package.
     *
     * @example t3q5rkNm
     *
     * @var string
     */
    public $firmwareName;

    /**
     * @description The signature of the OTA update package.
     *
     * @example 3d04ab6462633508606e5f3daac8****
     *
     * @var string
     */
    public $firmwareSign;

    /**
     * @description The size of the update package. Unit: bytes.
     *
     * @example 924
     *
     * @var int
     */
    public $firmwareSize;

    /**
     * @description The name of the module.
     *
     * @example module1234
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description The ProductKey of the product to which the OTA update package belongs.
     *
     * @example a19mzPZ****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The name of the product to which the OTA update package belongs.
     *
     * @example MyProduct
     *
     * @var string
     */
    public $productName;

    /**
     * @description The signature method of the OTA update package.
     *
     * @example MD5
     *
     * @var string
     */
    public $signMethod;

    /**
     * @description The version number of the original update package to be updated.
     *
     * >  The return value is null if you perform a full update.
     * @example V1.0.0
     *
     * @var string
     */
    public $srcVersion;

    /**
     * @description The status of the OTA update package. Valid values:
     *
     *   **0**: unverified
     *   **1**: verified
     *   **2**: verifying
     *   **3**: failed to be verified
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The type of the OTA update package. Valid values:
     *
     *   **0**: complete firmware
     *   **1**: differential firmware
     *
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @description The time when the update package was created. The time is displayed in UTC.
     *
     * @example 2019-12-28T02:42:22.000Z
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @description The time when the update task was last modified. The time is displayed in UTC.
     *
     * @example 2019-12-28T02:42:22.000Z
     *
     * @var string
     */
    public $utcModified;
    protected $_name = [
        'destVersion'  => 'DestVersion',
        'firmwareDesc' => 'FirmwareDesc',
        'firmwareId'   => 'FirmwareId',
        'firmwareName' => 'FirmwareName',
        'firmwareSign' => 'FirmwareSign',
        'firmwareSize' => 'FirmwareSize',
        'moduleName'   => 'ModuleName',
        'productKey'   => 'ProductKey',
        'productName'  => 'ProductName',
        'signMethod'   => 'SignMethod',
        'srcVersion'   => 'SrcVersion',
        'status'       => 'Status',
        'type'         => 'Type',
        'utcCreate'    => 'UtcCreate',
        'utcModified'  => 'UtcModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destVersion) {
            $res['DestVersion'] = $this->destVersion;
        }
        if (null !== $this->firmwareDesc) {
            $res['FirmwareDesc'] = $this->firmwareDesc;
        }
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->firmwareName) {
            $res['FirmwareName'] = $this->firmwareName;
        }
        if (null !== $this->firmwareSign) {
            $res['FirmwareSign'] = $this->firmwareSign;
        }
        if (null !== $this->firmwareSize) {
            $res['FirmwareSize'] = $this->firmwareSize;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->signMethod) {
            $res['SignMethod'] = $this->signMethod;
        }
        if (null !== $this->srcVersion) {
            $res['SrcVersion'] = $this->srcVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return simpleFirmwareInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestVersion'])) {
            $model->destVersion = $map['DestVersion'];
        }
        if (isset($map['FirmwareDesc'])) {
            $model->firmwareDesc = $map['FirmwareDesc'];
        }
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['FirmwareName'])) {
            $model->firmwareName = $map['FirmwareName'];
        }
        if (isset($map['FirmwareSign'])) {
            $model->firmwareSign = $map['FirmwareSign'];
        }
        if (isset($map['FirmwareSize'])) {
            $model->firmwareSize = $map['FirmwareSize'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['SignMethod'])) {
            $model->signMethod = $map['SignMethod'];
        }
        if (isset($map['SrcVersion'])) {
            $model->srcVersion = $map['SrcVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }

        return $model;
    }
}

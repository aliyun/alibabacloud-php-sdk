<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAFirmwareResponseBody\firmwareInfo;

use AlibabaCloud\Tea\Model;

class simpleFirmwareInfo extends Model
{
    /**
     * @example 4.0.0
     *
     * @var string
     */
    public $destVersion;

    /**
     * @example firmwareDesc
     *
     * @var string
     */
    public $firmwareDesc;

    /**
     * @example UfuxnwygsuSkVE0VCN****0100
     *
     * @var string
     */
    public $firmwareId;

    /**
     * @example t3q5rkNm
     *
     * @var string
     */
    public $firmwareName;

    /**
     * @example 3d04ab6462633508606e5f3daac8****
     *
     * @var string
     */
    public $firmwareSign;

    /**
     * @example 924
     *
     * @var int
     */
    public $firmwareSize;

    /**
     * @example module1234
     *
     * @var string
     */
    public $moduleName;

    /**
     * @example a19mzPZ****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example MyProduct
     *
     * @var string
     */
    public $productName;

    /**
     * @example MD5
     *
     * @var string
     */
    public $signMethod;

    /**
     * @example V1.0.0
     *
     * @var string
     */
    public $srcVersion;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @example 2019-12-28T02:42:22.000Z
     *
     * @var string
     */
    public $utcCreate;

    /**
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

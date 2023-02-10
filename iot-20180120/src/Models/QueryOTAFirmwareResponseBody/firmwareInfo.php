<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAFirmwareResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAFirmwareResponseBody\firmwareInfo\multiFiles;
use AlibabaCloud\Tea\Model;

class firmwareInfo extends Model
{
    /**
     * @example 4.0.0
     *
     * @var string
     */
    public $destVersion;

    /**
     * @example modified-WiFi-module
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
     * @example https://ota-***.aliyuncs.com/ota/572ef2fd12ca4791a5b21a9eb948****\/5E962CF83DB1495E8337E9C8A4D1****.bin?Expires=1577587360&OSSAccessKeyId=cS8uRRy54Rsz****&Signature=farzC8%2FVMN4HYdEtXvdiC2OevH****
     *
     * @var string
     */
    public $firmwareUrl;

    /**
     * @example WifiConfigModify
     *
     * @var string
     */
    public $moduleName;

    /**
     * @var multiFiles[]
     */
    public $multiFiles;

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
     * @example 1.0.0
     *
     * @var string
     */
    public $srcVersion;

    /**
     * @example 2
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
     * @var string
     */
    public $udi;

    /**
     * @example 2019-12-28T02:42:22.000Z
     *
     * @var string
     */
    public $utcCreate;

    /**
     * @example 2019-12-28T02:42:41.000Z
     *
     * @var string
     */
    public $utcModified;

    /**
     * @example 0
     *
     * @var int
     */
    public $verifyProgress;
    protected $_name = [
        'destVersion'    => 'DestVersion',
        'firmwareDesc'   => 'FirmwareDesc',
        'firmwareId'     => 'FirmwareId',
        'firmwareName'   => 'FirmwareName',
        'firmwareSign'   => 'FirmwareSign',
        'firmwareSize'   => 'FirmwareSize',
        'firmwareUrl'    => 'FirmwareUrl',
        'moduleName'     => 'ModuleName',
        'multiFiles'     => 'MultiFiles',
        'productKey'     => 'ProductKey',
        'productName'    => 'ProductName',
        'signMethod'     => 'SignMethod',
        'srcVersion'     => 'SrcVersion',
        'status'         => 'Status',
        'type'           => 'Type',
        'udi'            => 'Udi',
        'utcCreate'      => 'UtcCreate',
        'utcModified'    => 'UtcModified',
        'verifyProgress' => 'VerifyProgress',
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
        if (null !== $this->firmwareUrl) {
            $res['FirmwareUrl'] = $this->firmwareUrl;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->multiFiles) {
            $res['MultiFiles'] = [];
            if (null !== $this->multiFiles && \is_array($this->multiFiles)) {
                $n = 0;
                foreach ($this->multiFiles as $item) {
                    $res['MultiFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->udi) {
            $res['Udi'] = $this->udi;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }
        if (null !== $this->verifyProgress) {
            $res['VerifyProgress'] = $this->verifyProgress;
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
        if (isset($map['FirmwareUrl'])) {
            $model->firmwareUrl = $map['FirmwareUrl'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['MultiFiles'])) {
            if (!empty($map['MultiFiles'])) {
                $model->multiFiles = [];
                $n                 = 0;
                foreach ($map['MultiFiles'] as $item) {
                    $model->multiFiles[$n++] = null !== $item ? multiFiles::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Udi'])) {
            $model->udi = $map['Udi'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }
        if (isset($map['VerifyProgress'])) {
            $model->verifyProgress = $map['VerifyProgress'];
        }

        return $model;
    }
}

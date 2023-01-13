<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAFirmwareResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAFirmwareResponse\firmwareInfo\multiFiles;
use AlibabaCloud\Tea\Model;

class firmwareInfo extends Model
{
    /**
     * @var string
     */
    public $destVersion;

    /**
     * @var string
     */
    public $firmwareDesc;

    /**
     * @var string
     */
    public $firmwareId;

    /**
     * @var string
     */
    public $firmwareName;

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
    public $moduleName;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $signMethod;

    /**
     * @var string
     */
    public $srcVersion;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $udi;

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
    public $verifyProgress;

    /**
     * @var multiFiles[]
     */
    public $multiFiles;
    protected $_name = [
        'destVersion'    => 'DestVersion',
        'firmwareDesc'   => 'FirmwareDesc',
        'firmwareId'     => 'FirmwareId',
        'firmwareName'   => 'FirmwareName',
        'firmwareSign'   => 'FirmwareSign',
        'firmwareSize'   => 'FirmwareSize',
        'firmwareUrl'    => 'FirmwareUrl',
        'moduleName'     => 'ModuleName',
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
        'multiFiles'     => 'MultiFiles',
    ];

    public function validate()
    {
        Model::validateRequired('destVersion', $this->destVersion, true);
        Model::validateRequired('firmwareDesc', $this->firmwareDesc, true);
        Model::validateRequired('firmwareId', $this->firmwareId, true);
        Model::validateRequired('firmwareName', $this->firmwareName, true);
        Model::validateRequired('firmwareSign', $this->firmwareSign, true);
        Model::validateRequired('firmwareSize', $this->firmwareSize, true);
        Model::validateRequired('firmwareUrl', $this->firmwareUrl, true);
        Model::validateRequired('moduleName', $this->moduleName, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('productName', $this->productName, true);
        Model::validateRequired('signMethod', $this->signMethod, true);
        Model::validateRequired('srcVersion', $this->srcVersion, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('udi', $this->udi, true);
        Model::validateRequired('utcCreate', $this->utcCreate, true);
        Model::validateRequired('utcModified', $this->utcModified, true);
        Model::validateRequired('verifyProgress', $this->verifyProgress, true);
        Model::validateRequired('multiFiles', $this->multiFiles, true);
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
        if (null !== $this->multiFiles) {
            $res['MultiFiles'] = [];
            if (null !== $this->multiFiles && \is_array($this->multiFiles)) {
                $n = 0;
                foreach ($this->multiFiles as $item) {
                    $res['MultiFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['MultiFiles'])) {
            if (!empty($map['MultiFiles'])) {
                $model->multiFiles = [];
                $n                 = 0;
                foreach ($map['MultiFiles'] as $item) {
                    $model->multiFiles[$n++] = null !== $item ? multiFiles::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

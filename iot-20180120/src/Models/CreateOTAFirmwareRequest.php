<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAFirmwareRequest\multiFiles;
use AlibabaCloud\Tea\Model;

class CreateOTAFirmwareRequest extends Model
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
    public $iotInstanceId;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var multiFiles[]
     */
    public $multiFiles;

    /**
     * @var bool
     */
    public $needToVerify;

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
    public $srcVersion;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $udi;
    protected $_name = [
        'destVersion'   => 'DestVersion',
        'firmwareDesc'  => 'FirmwareDesc',
        'firmwareName'  => 'FirmwareName',
        'firmwareSign'  => 'FirmwareSign',
        'firmwareSize'  => 'FirmwareSize',
        'firmwareUrl'   => 'FirmwareUrl',
        'iotInstanceId' => 'IotInstanceId',
        'moduleName'    => 'ModuleName',
        'multiFiles'    => 'MultiFiles',
        'needToVerify'  => 'NeedToVerify',
        'productKey'    => 'ProductKey',
        'signMethod'    => 'SignMethod',
        'srcVersion'    => 'SrcVersion',
        'type'          => 'Type',
        'udi'           => 'Udi',
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
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
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
        if (null !== $this->needToVerify) {
            $res['NeedToVerify'] = $this->needToVerify;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->signMethod) {
            $res['SignMethod'] = $this->signMethod;
        }
        if (null !== $this->srcVersion) {
            $res['SrcVersion'] = $this->srcVersion;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->udi) {
            $res['Udi'] = $this->udi;
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
        if (isset($map['DestVersion'])) {
            $model->destVersion = $map['DestVersion'];
        }
        if (isset($map['FirmwareDesc'])) {
            $model->firmwareDesc = $map['FirmwareDesc'];
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
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
        if (isset($map['NeedToVerify'])) {
            $model->needToVerify = $map['NeedToVerify'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SignMethod'])) {
            $model->signMethod = $map['SignMethod'];
        }
        if (isset($map['SrcVersion'])) {
            $model->srcVersion = $map['SrcVersion'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Udi'])) {
            $model->udi = $map['Udi'];
        }

        return $model;
    }
}

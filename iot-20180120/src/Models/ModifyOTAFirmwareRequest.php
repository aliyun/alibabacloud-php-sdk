<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ModifyOTAFirmwareRequest extends Model
{
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
    public $firmwareUdi;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'firmwareDesc'  => 'FirmwareDesc',
        'firmwareId'    => 'FirmwareId',
        'firmwareName'  => 'FirmwareName',
        'firmwareUdi'   => 'FirmwareUdi',
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
    ];

    public function validate()
    {
        Model::validateRequired('firmwareId', $this->firmwareId, true);
        Model::validateRequired('productKey', $this->productKey, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firmwareDesc) {
            $res['FirmwareDesc'] = $this->firmwareDesc;
        }
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->firmwareName) {
            $res['FirmwareName'] = $this->firmwareName;
        }
        if (null !== $this->firmwareUdi) {
            $res['FirmwareUdi'] = $this->firmwareUdi;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyOTAFirmwareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirmwareDesc'])) {
            $model->firmwareDesc = $map['FirmwareDesc'];
        }
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['FirmwareName'])) {
            $model->firmwareName = $map['FirmwareName'];
        }
        if (isset($map['FirmwareUdi'])) {
            $model->firmwareUdi = $map['FirmwareUdi'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}

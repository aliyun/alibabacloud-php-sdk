<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryOTAFirmwareRequest extends Model
{
    /**
     * @var string
     */
    public $firmwareId;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'firmwareId'    => 'FirmwareId',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('firmwareId', $this->firmwareId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOTAFirmwareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}

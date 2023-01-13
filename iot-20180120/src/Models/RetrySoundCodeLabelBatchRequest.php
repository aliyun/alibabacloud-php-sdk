<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class RetrySoundCodeLabelBatchRequest extends Model
{
    /**
     * @var string
     */
    public $batchCode;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'batchCode'     => 'BatchCode',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('batchCode', $this->batchCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchCode) {
            $res['BatchCode'] = $this->batchCode;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetrySoundCodeLabelBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchCode'])) {
            $model->batchCode = $map['BatchCode'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}

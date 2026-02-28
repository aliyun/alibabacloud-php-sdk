<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

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
        'batchCode' => 'BatchCode',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

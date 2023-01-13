<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteSoundCodeLabelRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $soundCode;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'soundCode'     => 'SoundCode',
    ];

    public function validate()
    {
        Model::validateRequired('soundCode', $this->soundCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->soundCode) {
            $res['SoundCode'] = $this->soundCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSoundCodeLabelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['SoundCode'])) {
            $model->soundCode = $map['SoundCode'];
        }

        return $model;
    }
}

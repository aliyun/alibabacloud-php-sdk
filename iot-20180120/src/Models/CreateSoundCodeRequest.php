<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateSoundCodeRequest extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $soundCodeContent;
    protected $_name = [
        'duration'         => 'Duration',
        'iotInstanceId'    => 'IotInstanceId',
        'soundCodeContent' => 'SoundCodeContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->soundCodeContent) {
            $res['SoundCodeContent'] = $this->soundCodeContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSoundCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['SoundCodeContent'])) {
            $model->soundCodeContent = $map['SoundCodeContent'];
        }

        return $model;
    }
}

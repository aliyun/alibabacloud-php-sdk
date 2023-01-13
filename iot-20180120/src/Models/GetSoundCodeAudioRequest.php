<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetSoundCodeAudioRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string[]
     */
    public $soundCodeList;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'soundCodeList' => 'SoundCodeList',
    ];

    public function validate()
    {
        Model::validateRequired('soundCodeList', $this->soundCodeList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->soundCodeList) {
            $res['SoundCodeList'] = $this->soundCodeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSoundCodeAudioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['SoundCodeList'])) {
            if (!empty($map['SoundCodeList'])) {
                $model->soundCodeList = $map['SoundCodeList'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->soundCodeList)) {
            Model::validateArray($this->soundCodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->soundCodeList) {
            if (\is_array($this->soundCodeList)) {
                $res['SoundCodeList'] = [];
                $n1 = 0;
                foreach ($this->soundCodeList as $item1) {
                    $res['SoundCodeList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['SoundCodeList'])) {
            if (!empty($map['SoundCodeList'])) {
                $model->soundCodeList = [];
                $n1 = 0;
                foreach ($map['SoundCodeList'] as $item1) {
                    $model->soundCodeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

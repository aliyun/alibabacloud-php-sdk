<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class GetShareSpeechModelAudioRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $shareTaskId;

    /**
     * @var string[]
     */
    public $speechModelCodeList;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'shareTaskId' => 'ShareTaskId',
        'speechModelCodeList' => 'SpeechModelCodeList',
    ];

    public function validate()
    {
        if (\is_array($this->speechModelCodeList)) {
            Model::validateArray($this->speechModelCodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->shareTaskId) {
            $res['ShareTaskId'] = $this->shareTaskId;
        }

        if (null !== $this->speechModelCodeList) {
            if (\is_array($this->speechModelCodeList)) {
                $res['SpeechModelCodeList'] = [];
                $n1 = 0;
                foreach ($this->speechModelCodeList as $item1) {
                    $res['SpeechModelCodeList'][$n1] = $item1;
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

        if (isset($map['ShareTaskId'])) {
            $model->shareTaskId = $map['ShareTaskId'];
        }

        if (isset($map['SpeechModelCodeList'])) {
            if (!empty($map['SpeechModelCodeList'])) {
                $model->speechModelCodeList = [];
                $n1 = 0;
                foreach ($map['SpeechModelCodeList'] as $item1) {
                    $model->speechModelCodeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

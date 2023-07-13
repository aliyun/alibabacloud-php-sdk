<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetShareSpeechModelAudioRequest extends Model
{
    /**
     * @example iot-2w****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example Md3ZiTL888K9llXDy7890***********
     *
     * @var string
     */
    public $shareTaskId;

    /**
     * @example WSD****
     *
     * @var string[]
     */
    public $speechModelCodeList;
    protected $_name = [
        'iotInstanceId'       => 'IotInstanceId',
        'shareTaskId'         => 'ShareTaskId',
        'speechModelCodeList' => 'SpeechModelCodeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->shareTaskId) {
            $res['ShareTaskId'] = $this->shareTaskId;
        }
        if (null !== $this->speechModelCodeList) {
            $res['SpeechModelCodeList'] = $this->speechModelCodeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetShareSpeechModelAudioRequest
     */
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
                $model->speechModelCodeList = $map['SpeechModelCodeList'];
            }
        }

        return $model;
    }
}

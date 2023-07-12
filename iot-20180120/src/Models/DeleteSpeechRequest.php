<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteSpeechRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string[]
     */
    public $speechCodeList;
    protected $_name = [
        'iotInstanceId'  => 'IotInstanceId',
        'speechCodeList' => 'SpeechCodeList',
    ];

    public function validate()
    {
        Model::validateRequired('speechCodeList', $this->speechCodeList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->speechCodeList) {
            $res['SpeechCodeList'] = $this->speechCodeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSpeechRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['SpeechCodeList'])) {
            if (!empty($map['SpeechCodeList'])) {
                $model->speechCodeList = $map['SpeechCodeList'];
            }
        }

        return $model;
    }
}

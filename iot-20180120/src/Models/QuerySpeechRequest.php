<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QuerySpeechRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $speechCode;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'speechCode'    => 'SpeechCode',
    ];

    public function validate()
    {
        Model::validateRequired('speechCode', $this->speechCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->speechCode) {
            $res['SpeechCode'] = $this->speechCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySpeechRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['SpeechCode'])) {
            $model->speechCode = $map['SpeechCode'];
        }

        return $model;
    }
}

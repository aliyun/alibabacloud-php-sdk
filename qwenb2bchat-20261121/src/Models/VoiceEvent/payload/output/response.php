<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceEvent\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceEvent\payload\output\response\communication;
use AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceEvent\payload\output\response\data;

class response extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var communication
     */
    public $communication;

    /**
     * @var data
     */
    public $data;

    /**
     * @var mixed
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;
    protected $_name = [
        'requestId' => 'requestId',
        'communication' => 'communication',
        'data' => 'data',
        'errorCode' => 'errorCode',
        'errorMsg' => 'errorMsg',
    ];

    public function validate()
    {
        if (null !== $this->communication) {
            $this->communication->validate();
        }
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->communication) {
            $res['communication'] = null !== $this->communication ? $this->communication->toArray($noStream) : $this->communication;
        }

        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['communication'])) {
            $model->communication = communication::fromMap($map['communication']);
        }

        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        return $model;
    }
}

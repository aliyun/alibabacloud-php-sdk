<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BMed\V20261121\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\MedicalModelInferenceResponseBody\audioFrames;
use AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\MedicalModelInferenceResponseBody\communication;
use AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\MedicalModelInferenceResponseBody\data;
use AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\MedicalModelInferenceResponseBody\error;

class MedicalModelInferenceResponseBody extends Model
{
    /**
     * @var audioFrames[]
     */
    public $audioFrames;

    /**
     * @var communication
     */
    public $communication;

    /**
     * @var data
     */
    public $data;

    /**
     * @var error
     */
    public $error;

    /**
     * @var mixed
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'audioFrames' => 'audioFrames',
        'communication' => 'communication',
        'data' => 'data',
        'error' => 'error',
        'errorCode' => 'errorCode',
        'errorMsg' => 'errorMsg',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->audioFrames)) {
            Model::validateArray($this->audioFrames);
        }
        if (null !== $this->communication) {
            $this->communication->validate();
        }
        if (null !== $this->data) {
            $this->data->validate();
        }
        if (null !== $this->error) {
            $this->error->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioFrames) {
            if (\is_array($this->audioFrames)) {
                $res['audioFrames'] = [];
                $n1 = 0;
                foreach ($this->audioFrames as $item1) {
                    $res['audioFrames'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->communication) {
            $res['communication'] = null !== $this->communication ? $this->communication->toArray($noStream) : $this->communication;
        }

        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['audioFrames'])) {
            if (!empty($map['audioFrames'])) {
                $model->audioFrames = [];
                $n1 = 0;
                foreach ($map['audioFrames'] as $item1) {
                    $model->audioFrames[$n1] = audioFrames::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['communication'])) {
            $model->communication = communication::fromMap($map['communication']);
        }

        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

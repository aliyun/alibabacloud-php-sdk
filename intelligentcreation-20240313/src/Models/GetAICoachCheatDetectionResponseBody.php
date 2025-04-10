<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachCheatDetectionResponseBody\imageCheat;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachCheatDetectionResponseBody\voiceCheat;

class GetAICoachCheatDetectionResponseBody extends Model
{
    /**
     * @var string
     */
    public $cheatId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var imageCheat
     */
    public $imageCheat;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var voiceCheat
     */
    public $voiceCheat;
    protected $_name = [
        'cheatId' => 'cheatId',
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'gmtCreate' => 'gmtCreate',
        'imageCheat' => 'imageCheat',
        'requestId' => 'requestId',
        'status' => 'status',
        'success' => 'success',
        'voiceCheat' => 'voiceCheat',
    ];

    public function validate()
    {
        if (null !== $this->imageCheat) {
            $this->imageCheat->validate();
        }
        if (null !== $this->voiceCheat) {
            $this->voiceCheat->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cheatId) {
            $res['cheatId'] = $this->cheatId;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->imageCheat) {
            $res['imageCheat'] = null !== $this->imageCheat ? $this->imageCheat->toArray($noStream) : $this->imageCheat;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->voiceCheat) {
            $res['voiceCheat'] = null !== $this->voiceCheat ? $this->voiceCheat->toArray($noStream) : $this->voiceCheat;
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
        if (isset($map['cheatId'])) {
            $model->cheatId = $map['cheatId'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['imageCheat'])) {
            $model->imageCheat = imageCheat::fromMap($map['imageCheat']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['voiceCheat'])) {
            $model->voiceCheat = voiceCheat::fromMap($map['voiceCheat']);
        }

        return $model;
    }
}

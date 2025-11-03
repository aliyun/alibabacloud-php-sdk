<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\BaiLianAgentTransformParameters\prompt;

class BaiLianAgentTransformParameters extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var prompt
     */
    public $prompt;

    /**
     * @var int
     */
    public $requestPerMinute;

    /**
     * @var int
     */
    public $tokenPerMinute;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'applicationId' => 'ApplicationId',
        'prompt' => 'Prompt',
        'requestPerMinute' => 'RequestPerMinute',
        'tokenPerMinute' => 'TokenPerMinute',
    ];

    public function validate()
    {
        if (null !== $this->prompt) {
            $this->prompt->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = null !== $this->prompt ? $this->prompt->toArray($noStream) : $this->prompt;
        }

        if (null !== $this->requestPerMinute) {
            $res['RequestPerMinute'] = $this->requestPerMinute;
        }

        if (null !== $this->tokenPerMinute) {
            $res['TokenPerMinute'] = $this->tokenPerMinute;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = prompt::fromMap($map['Prompt']);
        }

        if (isset($map['RequestPerMinute'])) {
            $model->requestPerMinute = $map['RequestPerMinute'];
        }

        if (isset($map['TokenPerMinute'])) {
            $model->tokenPerMinute = $map['TokenPerMinute'];
        }

        return $model;
    }
}

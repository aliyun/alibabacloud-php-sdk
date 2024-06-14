<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Tea\Model;

class RunCompletionMessageResponseBody extends Model
{
    /**
     * @var string
     */
    public $finishReason;

    /**
     * @example 17204B98-xxxx-4F9A-8464-2446A84821CA
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'finishReason' => 'FinishReason',
        'requestId'    => 'RequestId',
        'text'         => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishReason) {
            $res['FinishReason'] = $this->finishReason;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCompletionMessageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinishReason'])) {
            $model->finishReason = $map['FinishReason'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ShoppingAssistantResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ShoppingAssistantResponseBody\result\citation;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ShoppingAssistantResponseBody\result\stepInfo;

class result extends Model
{
    /**
     * @var citation
     */
    public $citation;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var stepInfo
     */
    public $stepInfo;

    /**
     * @var string
     */
    public $stopReason;
    protected $_name = [
        'citation' => 'Citation',
        'content' => 'Content',
        'errorCode' => 'ErrorCode',
        'stepInfo' => 'StepInfo',
        'stopReason' => 'StopReason',
    ];

    public function validate()
    {
        if (null !== $this->citation) {
            $this->citation->validate();
        }
        if (null !== $this->stepInfo) {
            $this->stepInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->citation) {
            $res['Citation'] = null !== $this->citation ? $this->citation->toArray($noStream) : $this->citation;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->stepInfo) {
            $res['StepInfo'] = null !== $this->stepInfo ? $this->stepInfo->toArray($noStream) : $this->stepInfo;
        }

        if (null !== $this->stopReason) {
            $res['StopReason'] = $this->stopReason;
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
        if (isset($map['Citation'])) {
            $model->citation = citation::fromMap($map['Citation']);
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['StepInfo'])) {
            $model->stepInfo = stepInfo::fromMap($map['StepInfo']);
        }

        if (isset($map['StopReason'])) {
            $model->stopReason = $map['StopReason'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListDialogueFlowsResponseBody\dialogueFlows;

class ListDialogueFlowsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var dialogueFlows[]
     */
    public $dialogueFlows;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'dialogueFlows' => 'DialogueFlows',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->dialogueFlows)) {
            Model::validateArray($this->dialogueFlows);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->dialogueFlows) {
            if (\is_array($this->dialogueFlows)) {
                $res['DialogueFlows'] = [];
                $n1 = 0;
                foreach ($this->dialogueFlows as $item1) {
                    $res['DialogueFlows'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DialogueFlows'])) {
            if (!empty($map['DialogueFlows'])) {
                $model->dialogueFlows = [];
                $n1 = 0;
                foreach ($map['DialogueFlows'] as $item1) {
                    $model->dialogueFlows[$n1++] = dialogueFlows::fromMap($item1);
                }
            }
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

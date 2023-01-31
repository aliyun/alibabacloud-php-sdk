<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ModifyDialogueFlowResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $dialogueFlowDefinition;

    /**
     * @example 390515b5-6115-4ccf-83e2-52d5bfaf2ddf
     *
     * @var string
     */
    public $dialogueFlowId;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example Succcess
     *
     * @var string
     */
    public $message;

    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                   => 'Code',
        'dialogueFlowDefinition' => 'DialogueFlowDefinition',
        'dialogueFlowId'         => 'DialogueFlowId',
        'httpStatusCode'         => 'HttpStatusCode',
        'message'                => 'Message',
        'requestId'              => 'RequestId',
        'success'                => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->dialogueFlowDefinition) {
            $res['DialogueFlowDefinition'] = $this->dialogueFlowDefinition;
        }
        if (null !== $this->dialogueFlowId) {
            $res['DialogueFlowId'] = $this->dialogueFlowId;
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

    /**
     * @param array $map
     *
     * @return ModifyDialogueFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DialogueFlowDefinition'])) {
            $model->dialogueFlowDefinition = $map['DialogueFlowDefinition'];
        }
        if (isset($map['DialogueFlowId'])) {
            $model->dialogueFlowId = $map['DialogueFlowId'];
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

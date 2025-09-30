<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamResponseBody\chatCompletion;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamResponseBody\multiCollectionRecallResult;

class ChatWithKnowledgeBaseStreamResponseBody extends Model
{
    /**
     * @var chatCompletion
     */
    public $chatCompletion;

    /**
     * @var string
     */
    public $message;

    /**
     * @var multiCollectionRecallResult
     */
    public $multiCollectionRecallResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'chatCompletion' => 'ChatCompletion',
        'message' => 'Message',
        'multiCollectionRecallResult' => 'MultiCollectionRecallResult',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->chatCompletion) {
            $this->chatCompletion->validate();
        }
        if (null !== $this->multiCollectionRecallResult) {
            $this->multiCollectionRecallResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatCompletion) {
            $res['ChatCompletion'] = null !== $this->chatCompletion ? $this->chatCompletion->toArray($noStream) : $this->chatCompletion;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->multiCollectionRecallResult) {
            $res['MultiCollectionRecallResult'] = null !== $this->multiCollectionRecallResult ? $this->multiCollectionRecallResult->toArray($noStream) : $this->multiCollectionRecallResult;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ChatCompletion'])) {
            $model->chatCompletion = chatCompletion::fromMap($map['ChatCompletion']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MultiCollectionRecallResult'])) {
            $model->multiCollectionRecallResult = multiCollectionRecallResult::fromMap($map['MultiCollectionRecallResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

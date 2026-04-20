<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeChatMessageResponseBody\content;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeChatMessageResponseBody\data;

class DescribeChatMessageResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $completedAt;

    /**
     * @var content[]
     */
    public $content;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var data
     */
    public $data;

    /**
     * @var bool
     */
    public $delta;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $msgId;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var int
     */
    public $sequenceNumber;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'code' => 'Code',
        'completedAt' => 'CompletedAt',
        'content' => 'Content',
        'createdAt' => 'CreatedAt',
        'data' => 'Data',
        'delta' => 'Delta',
        'error' => 'Error',
        'id' => 'Id',
        'index' => 'Index',
        'message' => 'Message',
        'msgId' => 'MsgId',
        'object' => 'Object',
        'output' => 'Output',
        'requestId' => 'RequestId',
        'role' => 'Role',
        'sequenceNumber' => 'SequenceNumber',
        'sessionId' => 'SessionId',
        'status' => 'Status',
        'text' => 'Text',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->completedAt) {
            $res['CompletedAt'] = $this->completedAt;
        }

        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['Content'] = [];
                $n1 = 0;
                foreach ($this->content as $item1) {
                    $res['Content'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->delta) {
            $res['Delta'] = $this->delta;
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }

        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->sequenceNumber) {
            $res['SequenceNumber'] = $this->sequenceNumber;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['CompletedAt'])) {
            $model->completedAt = $map['CompletedAt'];
        }

        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                $n1 = 0;
                foreach ($map['Content'] as $item1) {
                    $model->content[$n1] = content::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }

        if (isset($map['Delta'])) {
            $model->delta = $map['Delta'];
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }

        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['SequenceNumber'])) {
            $model->sequenceNumber = $map['SequenceNumber'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

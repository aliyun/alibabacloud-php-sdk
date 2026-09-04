<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListCopilotMessagesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $clientMessageId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var int
     */
    public $messageSequence;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $turnId;
    protected $_name = [
        'clientMessageId' => 'ClientMessageId',
        'content' => 'Content',
        'createdAt' => 'CreatedAt',
        'messageId' => 'MessageId',
        'messageSequence' => 'MessageSequence',
        'role' => 'Role',
        'status' => 'Status',
        'turnId' => 'TurnId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientMessageId) {
            $res['ClientMessageId'] = $this->clientMessageId;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->messageSequence) {
            $res['MessageSequence'] = $this->messageSequence;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->turnId) {
            $res['TurnId'] = $this->turnId;
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
        if (isset($map['ClientMessageId'])) {
            $model->clientMessageId = $map['ClientMessageId'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['MessageSequence'])) {
            $model->messageSequence = $map['MessageSequence'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TurnId'])) {
            $model->turnId = $map['TurnId'];
        }

        return $model;
    }
}

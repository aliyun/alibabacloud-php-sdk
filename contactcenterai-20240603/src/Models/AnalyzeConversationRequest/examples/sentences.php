<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\examples;

use AlibabaCloud\Dara\Model;

class sentences extends Model
{
    /**
     * @var string
     */
    public $chatId;
    /**
     * @var string
     */
    public $role;
    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'chatId' => 'chatId',
        'role'   => 'role',
        'text'   => 'text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatId) {
            $res['chatId'] = $this->chatId;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['chatId'])) {
            $model->chatId = $map['chatId'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}

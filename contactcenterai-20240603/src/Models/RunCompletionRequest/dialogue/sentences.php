<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\dialogue;

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
        'chatId' => 'ChatId',
        'role' => 'Role',
        'text' => 'Text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatId) {
            $res['ChatId'] = $this->chatId;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['ChatId'])) {
            $model->chatId = $map['ChatId'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\dialogue;

use AlibabaCloud\Tea\Model;

class sentences extends Model
{
    /**
     * @var string
     */
    public $chatId;

    /**
     * @description This parameter is required.
     *
     * @example user
     *
     * @var string
     */
    public $role;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'chatId' => 'ChatId',
        'role'   => 'Role',
        'text'   => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return sentences
     */
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

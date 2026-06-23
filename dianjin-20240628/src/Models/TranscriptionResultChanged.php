<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class TranscriptionResultChanged extends Model
{
    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'messageId' => 'messageId',
        'content' => 'content',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
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
        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        return $model;
    }
}

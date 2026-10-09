<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class TranscriptionResultChanged extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $messageId;
    protected $_name = [
        'content' => 'content',
        'messageId' => 'messageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        return $model;
    }
}

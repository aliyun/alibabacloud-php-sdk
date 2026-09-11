<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\SearchAliDingGroupChatsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $chatId;

    /**
     * @var string
     */
    public $conversationType;

    /**
     * @var bool
     */
    public $muted;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'chatId' => 'chatId',
        'conversationType' => 'conversationType',
        'muted' => 'muted',
        'title' => 'title',
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

        if (null !== $this->conversationType) {
            $res['conversationType'] = $this->conversationType;
        }

        if (null !== $this->muted) {
            $res['muted'] = $this->muted;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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

        if (isset($map['conversationType'])) {
            $model->conversationType = $map['conversationType'];
        }

        if (isset($map['muted'])) {
            $model->muted = $map['muted'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}

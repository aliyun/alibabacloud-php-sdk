<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ConversationCreateCmd extends Model
{
    /**
     * @var string
     */
    public $chatData;

    /**
     * @var string
     */
    public $modelIds;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'chatData' => 'chatData',
        'modelIds' => 'modelIds',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatData) {
            $res['chatData'] = $this->chatData;
        }

        if (null !== $this->modelIds) {
            $res['modelIds'] = $this->modelIds;
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
        if (isset($map['chatData'])) {
            $model->chatData = $map['chatData'];
        }

        if (isset($map['modelIds'])) {
            $model->modelIds = $map['modelIds'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}

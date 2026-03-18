<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ConversationDTO extends Model
{
    /**
     * @var string
     */
    public $chatData;

    /**
     * @var int
     */
    public $deleteTag;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $messageCount;

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
        'deleteTag' => 'deleteTag',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'messageCount' => 'messageCount',
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

        if (null !== $this->deleteTag) {
            $res['deleteTag'] = $this->deleteTag;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->messageCount) {
            $res['messageCount'] = $this->messageCount;
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

        if (isset($map['deleteTag'])) {
            $model->deleteTag = $map['deleteTag'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['messageCount'])) {
            $model->messageCount = $map['messageCount'];
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

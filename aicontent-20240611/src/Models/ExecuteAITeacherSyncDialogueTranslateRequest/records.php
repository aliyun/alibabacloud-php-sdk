<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherSyncDialogueTranslateRequest;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $isOffTopicControl;

    /**
     * @var bool
     */
    public $isOnTopic;

    /**
     * @var int
     */
    public $order;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'content' => 'content',
        'isOffTopicControl' => 'isOffTopicControl',
        'isOnTopic' => 'isOnTopic',
        'order' => 'order',
        'role' => 'role',
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

        if (null !== $this->isOffTopicControl) {
            $res['isOffTopicControl'] = $this->isOffTopicControl;
        }

        if (null !== $this->isOnTopic) {
            $res['isOnTopic'] = $this->isOnTopic;
        }

        if (null !== $this->order) {
            $res['order'] = $this->order;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
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

        if (isset($map['isOffTopicControl'])) {
            $model->isOffTopicControl = $map['isOffTopicControl'];
        }

        if (isset($map['isOnTopic'])) {
            $model->isOnTopic = $map['isOnTopic'];
        }

        if (isset($map['order'])) {
            $model->order = $map['order'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        return $model;
    }
}

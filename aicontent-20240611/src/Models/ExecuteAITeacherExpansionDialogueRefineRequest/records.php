<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueRefineRequest;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example Ask Mark if he has thought about what his dream job might be.
     *
     * @var string
     */
    public $content;

    /**
     * @example 跑题：true, 不跑题：false
     *
     * @var bool
     */
    public $isOffTopicControl;

    /**
     * @example 扣题：true, 不扣题：false
     *
     * @var bool
     */
    public $isOnTopic;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $order;

    /**
     * @description This parameter is required.
     *
     * @example 老师：assistant；学生：user
     *
     * @var string
     */
    public $role;
    protected $_name = [
        'content'           => 'content',
        'isOffTopicControl' => 'isOffTopicControl',
        'isOnTopic'         => 'isOnTopic',
        'order'             => 'order',
        'role'              => 'role',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return records
     */
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

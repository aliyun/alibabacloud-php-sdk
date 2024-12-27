<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\GetAITeacherExpansionDialogueSuggestionRequest;

use AlibabaCloud\Tea\Model;

class dialogueTasks extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example Why might some people think dog walking is a great job?
     *
     * @var string
     */
    public $assistant;

    /**
     * @example 为什么有些人认为遛狗是份好差事?
     *
     * @var string
     */
    public $assistantTranslate;

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
     * @example They think it\\"s great because they won\\"t be stuck in an office.
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'assistant'          => 'assistant',
        'assistantTranslate' => 'assistantTranslate',
        'order'              => 'order',
        'user'               => 'user',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistant) {
            $res['assistant'] = $this->assistant;
        }
        if (null !== $this->assistantTranslate) {
            $res['assistantTranslate'] = $this->assistantTranslate;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        if (null !== $this->user) {
            $res['user'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialogueTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assistant'])) {
            $model->assistant = $map['assistant'];
        }
        if (isset($map['assistantTranslate'])) {
            $model->assistantTranslate = $map['assistantTranslate'];
        }
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }
        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueTranslateRequest;

use AlibabaCloud\Dara\Model;

class dialogueTasks extends Model
{
    /**
     * @var string
     */
    public $assistant;

    /**
     * @var string
     */
    public $assistantTranslate;

    /**
     * @var int
     */
    public $order;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'assistant' => 'assistant',
        'assistantTranslate' => 'assistantTranslate',
        'order' => 'order',
        'user' => 'user',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

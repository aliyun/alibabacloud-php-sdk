<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueTranslateRequest\dialogueTasks;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueTranslateRequest\records;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueTranslateRequest\roleInfo;
use AlibabaCloud\Tea\Model;

class ExecuteAITeacherExpansionDialogueTranslateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example In this dialogue, you will be playing the role of Lily, a young girl. I will be Jane, Lily\\"s mother. We are in the kitchen, where I am preparing dinner. I am asking you about your food preferences, specifically if you like meat, fish, and milk. You like meat and milk, but you don\\"t like fish because of its smell. I explain to you the nutritional benefits of these foods and suggest alternatives for the ones you don\\"t like. Finally, I invite you to start eating.
     *
     * @var string
     */
    public $background;

    /**
     * @description This parameter is required.
     *
     * @var dialogueTasks[]
     */
    public $dialogueTasks;

    /**
     * @var records[]
     */
    public $records;

    /**
     * @description This parameter is required.
     *
     * @var roleInfo
     */
    public $roleInfo;

    /**
     * @example Hello Lily, could you please come to the kitchen for a moment?
     *
     * @var string
     */
    public $startSentence;

    /**
     * @description This parameter is required.
     *
     * @example talk about food.
     *
     * @var string
     */
    public $topic;

    /**
     * @description This parameter is required.
     *
     * @example 886eba3702xxxxxxxxx4ba52a87a525
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'background'    => 'background',
        'dialogueTasks' => 'dialogueTasks',
        'records'       => 'records',
        'roleInfo'      => 'roleInfo',
        'startSentence' => 'startSentence',
        'topic'         => 'topic',
        'userId'        => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->background) {
            $res['background'] = $this->background;
        }
        if (null !== $this->dialogueTasks) {
            $res['dialogueTasks'] = [];
            if (null !== $this->dialogueTasks && \is_array($this->dialogueTasks)) {
                $n = 0;
                foreach ($this->dialogueTasks as $item) {
                    $res['dialogueTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->records) {
            $res['records'] = [];
            if (null !== $this->records && \is_array($this->records)) {
                $n = 0;
                foreach ($this->records as $item) {
                    $res['records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roleInfo) {
            $res['roleInfo'] = null !== $this->roleInfo ? $this->roleInfo->toMap() : null;
        }
        if (null !== $this->startSentence) {
            $res['startSentence'] = $this->startSentence;
        }
        if (null !== $this->topic) {
            $res['topic'] = $this->topic;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteAITeacherExpansionDialogueTranslateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['background'])) {
            $model->background = $map['background'];
        }
        if (isset($map['dialogueTasks'])) {
            if (!empty($map['dialogueTasks'])) {
                $model->dialogueTasks = [];
                $n                    = 0;
                foreach ($map['dialogueTasks'] as $item) {
                    $model->dialogueTasks[$n++] = null !== $item ? dialogueTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['records'])) {
            if (!empty($map['records'])) {
                $model->records = [];
                $n              = 0;
                foreach ($map['records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['roleInfo'])) {
            $model->roleInfo = roleInfo::fromMap($map['roleInfo']);
        }
        if (isset($map['startSentence'])) {
            $model->startSentence = $map['startSentence'];
        }
        if (isset($map['topic'])) {
            $model->topic = $map['topic'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}

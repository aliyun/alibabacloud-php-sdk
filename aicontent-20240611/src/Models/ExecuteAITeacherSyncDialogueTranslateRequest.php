<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherSyncDialogueTranslateRequest\dialogueTasks;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherSyncDialogueTranslateRequest\records;

class ExecuteAITeacherSyncDialogueTranslateRequest extends Model
{
    /**
     * @var dialogueTasks[]
     */
    public $dialogueTasks;

    /**
     * @var records[]
     */
    public $records;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'dialogueTasks' => 'dialogueTasks',
        'records' => 'records',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->dialogueTasks)) {
            Model::validateArray($this->dialogueTasks);
        }
        if (\is_array($this->records)) {
            Model::validateArray($this->records);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogueTasks) {
            if (\is_array($this->dialogueTasks)) {
                $res['dialogueTasks'] = [];
                $n1 = 0;
                foreach ($this->dialogueTasks as $item1) {
                    $res['dialogueTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->records) {
            if (\is_array($this->records)) {
                $res['records'] = [];
                $n1 = 0;
                foreach ($this->records as $item1) {
                    $res['records'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['dialogueTasks'])) {
            if (!empty($map['dialogueTasks'])) {
                $model->dialogueTasks = [];
                $n1 = 0;
                foreach ($map['dialogueTasks'] as $item1) {
                    $model->dialogueTasks[$n1++] = dialogueTasks::fromMap($item1);
                }
            }
        }

        if (isset($map['records'])) {
            if (!empty($map['records'])) {
                $model->records = [];
                $n1 = 0;
                foreach ($map['records'] as $item1) {
                    $model->records[$n1++] = records::fromMap($item1);
                }
            }
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}

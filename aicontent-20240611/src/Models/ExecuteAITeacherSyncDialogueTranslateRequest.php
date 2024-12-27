<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherSyncDialogueTranslateRequest\dialogueTasks;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherSyncDialogueTranslateRequest\records;
use AlibabaCloud\Tea\Model;

class ExecuteAITeacherSyncDialogueTranslateRequest extends Model
{
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
     * @example 886eba3702xxxxxxxxx4ba52a87a525
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'dialogueTasks' => 'dialogueTasks',
        'records'       => 'records',
        'userId'        => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteAITeacherSyncDialogueTranslateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}

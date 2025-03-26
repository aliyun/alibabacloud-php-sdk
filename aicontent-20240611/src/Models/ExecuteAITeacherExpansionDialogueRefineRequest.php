<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueRefineRequest\dialogueTasks;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueRefineRequest\records;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueRefineRequest\roleInfo;

class ExecuteAITeacherExpansionDialogueRefineRequest extends Model
{
    /**
     * @var string
     */
    public $background;

    /**
     * @var dialogueTasks[]
     */
    public $dialogueTasks;

    /**
     * @var string
     */
    public $languageCode;

    /**
     * @var records[]
     */
    public $records;

    /**
     * @var roleInfo
     */
    public $roleInfo;

    /**
     * @var string
     */
    public $startSentence;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'background' => 'background',
        'dialogueTasks' => 'dialogueTasks',
        'languageCode' => 'languageCode',
        'records' => 'records',
        'roleInfo' => 'roleInfo',
        'startSentence' => 'startSentence',
        'topic' => 'topic',
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
        if (null !== $this->roleInfo) {
            $this->roleInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->background) {
            $res['background'] = $this->background;
        }

        if (null !== $this->dialogueTasks) {
            if (\is_array($this->dialogueTasks)) {
                $res['dialogueTasks'] = [];
                $n1 = 0;
                foreach ($this->dialogueTasks as $item1) {
                    $res['dialogueTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->languageCode) {
            $res['languageCode'] = $this->languageCode;
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

        if (null !== $this->roleInfo) {
            $res['roleInfo'] = null !== $this->roleInfo ? $this->roleInfo->toArray($noStream) : $this->roleInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['background'])) {
            $model->background = $map['background'];
        }

        if (isset($map['dialogueTasks'])) {
            if (!empty($map['dialogueTasks'])) {
                $model->dialogueTasks = [];
                $n1 = 0;
                foreach ($map['dialogueTasks'] as $item1) {
                    $model->dialogueTasks[$n1++] = dialogueTasks::fromMap($item1);
                }
            }
        }

        if (isset($map['languageCode'])) {
            $model->languageCode = $map['languageCode'];
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

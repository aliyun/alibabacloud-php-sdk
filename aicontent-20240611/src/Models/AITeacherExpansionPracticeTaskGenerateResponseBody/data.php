<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateResponseBody\data\roleSet;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateResponseBody\data\taskContent;

class data extends Model
{
    /**
     * @var string
     */
    public $backgroundDescription;

    /**
     * @var roleSet
     */
    public $roleSet;

    /**
     * @var string
     */
    public $startSentence;

    /**
     * @var taskContent[]
     */
    public $taskContent;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'backgroundDescription' => 'backgroundDescription',
        'roleSet' => 'roleSet',
        'startSentence' => 'startSentence',
        'taskContent' => 'taskContent',
        'taskType' => 'taskType',
    ];

    public function validate()
    {
        if (null !== $this->roleSet) {
            $this->roleSet->validate();
        }
        if (\is_array($this->taskContent)) {
            Model::validateArray($this->taskContent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundDescription) {
            $res['backgroundDescription'] = $this->backgroundDescription;
        }

        if (null !== $this->roleSet) {
            $res['roleSet'] = null !== $this->roleSet ? $this->roleSet->toArray($noStream) : $this->roleSet;
        }

        if (null !== $this->startSentence) {
            $res['startSentence'] = $this->startSentence;
        }

        if (null !== $this->taskContent) {
            if (\is_array($this->taskContent)) {
                $res['taskContent'] = [];
                $n1 = 0;
                foreach ($this->taskContent as $item1) {
                    $res['taskContent'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
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
        if (isset($map['backgroundDescription'])) {
            $model->backgroundDescription = $map['backgroundDescription'];
        }

        if (isset($map['roleSet'])) {
            $model->roleSet = roleSet::fromMap($map['roleSet']);
        }

        if (isset($map['startSentence'])) {
            $model->startSentence = $map['startSentence'];
        }

        if (isset($map['taskContent'])) {
            if (!empty($map['taskContent'])) {
                $model->taskContent = [];
                $n1 = 0;
                foreach ($map['taskContent'] as $item1) {
                    $model->taskContent[$n1++] = taskContent::fromMap($item1);
                }
            }
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        return $model;
    }
}

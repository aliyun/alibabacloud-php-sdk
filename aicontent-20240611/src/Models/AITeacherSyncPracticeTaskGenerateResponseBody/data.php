<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherSyncPracticeTaskGenerateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherSyncPracticeTaskGenerateResponseBody\data\taskContent;

class data extends Model
{
    /**
     * @var taskContent[]
     */
    public $taskContent;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'taskContent' => 'taskContent',
        'taskType' => 'taskType',
    ];

    public function validate()
    {
        if (\is_array($this->taskContent)) {
            Model::validateArray($this->taskContent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

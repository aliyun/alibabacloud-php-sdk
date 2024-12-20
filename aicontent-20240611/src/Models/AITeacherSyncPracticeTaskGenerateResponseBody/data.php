<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherSyncPracticeTaskGenerateResponseBody;

use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherSyncPracticeTaskGenerateResponseBody\data\taskContent;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var taskContent[]
     */
    public $taskContent;

    /**
     * @example textbook_question_answering
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'taskContent' => 'taskContent',
        'taskType'    => 'taskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskContent) {
            $res['taskContent'] = [];
            if (null !== $this->taskContent && \is_array($this->taskContent)) {
                $n = 0;
                foreach ($this->taskContent as $item) {
                    $res['taskContent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['taskContent'])) {
            if (!empty($map['taskContent'])) {
                $model->taskContent = [];
                $n                  = 0;
                foreach ($map['taskContent'] as $item) {
                    $model->taskContent[$n++] = null !== $item ? taskContent::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        return $model;
    }
}

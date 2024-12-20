<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateResponseBody;

use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateResponseBody\data\roleSet;
use AlibabaCloud\SDK\AiContent\V20240611\Models\AITeacherExpansionPracticeTaskGenerateResponseBody\data\taskContent;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example In a career counseling session, we are going to discuss our dream jobs and the responsibilities associated with them. Alex, who dreams of becoming a professional travel blogger, will share the tasks and skills required for this role, while Jamie, aspiring to be a wildlife photographer, will outline the responsibilities and challenges of capturing nature\\"s moments. Both will explore how their interests align with the practical aspects of their chosen careers, discussing the potential for travel, creativity, and the impact of their work on society and the environment.
     *
     * @var string
     */
    public $backgroundDescription;

    /**
     * @var roleSet
     */
    public $roleSet;

    /**
     * @example Hey Jamie, do you know what a travel blogger does?
     *
     * @var string
     */
    public $startSentence;

    /**
     * @var taskContent[]
     */
    public $taskContent;

    /**
     * @example textbook_dialogue
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'backgroundDescription' => 'backgroundDescription',
        'roleSet'               => 'roleSet',
        'startSentence'         => 'startSentence',
        'taskContent'           => 'taskContent',
        'taskType'              => 'taskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundDescription) {
            $res['backgroundDescription'] = $this->backgroundDescription;
        }
        if (null !== $this->roleSet) {
            $res['roleSet'] = null !== $this->roleSet ? $this->roleSet->toMap() : null;
        }
        if (null !== $this->startSentence) {
            $res['startSentence'] = $this->startSentence;
        }
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueRequest\dialogueTasks;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueRequest\records;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueRequest\roleInfo;
use AlibabaCloud\Tea\Model;

class ExecuteAITeacherExpansionDialogueRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example In a career counseling session, we are going to discuss our dream jobs and the responsibilities associated with them. Alex, who dreams of becoming a professional travel blogger, will share the tasks and skills required for this role, while Jamie, aspiring to be a wildlife photographer, will outline the responsibilities and challenges of capturing nature\\"s moments. Both will explore how their interests align with the practical aspects of their chosen careers, discussing the potential for travel, creativity, and the impact of their work on society and the environment.
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
     * @example en-gb
     *
     * @var string
     */
    public $languageCode;

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
     * @example Let\\"s talk about traffic rules.
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
        'languageCode'  => 'languageCode',
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
        if (null !== $this->languageCode) {
            $res['languageCode'] = $this->languageCode;
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
     * @return ExecuteAITeacherExpansionDialogueRequest
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
        if (isset($map['languageCode'])) {
            $model->languageCode = $map['languageCode'];
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

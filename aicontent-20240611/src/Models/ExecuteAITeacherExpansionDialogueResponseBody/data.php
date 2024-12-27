<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $chineseResult;

    /**
     * @example 1
     *
     * @var string
     */
    public $englishResult;

    /**
     * @example true
     *
     * @var bool
     */
    public $isFinish;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOffTopicControl;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOnTopic;

    /**
     * @example 2
     *
     * @var int
     */
    public $questionIndex;
    protected $_name = [
        'chineseResult'     => 'chineseResult',
        'englishResult'     => 'englishResult',
        'isFinish'          => 'isFinish',
        'isOffTopicControl' => 'isOffTopicControl',
        'isOnTopic'         => 'isOnTopic',
        'questionIndex'     => 'questionIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chineseResult) {
            $res['chineseResult'] = $this->chineseResult;
        }
        if (null !== $this->englishResult) {
            $res['englishResult'] = $this->englishResult;
        }
        if (null !== $this->isFinish) {
            $res['isFinish'] = $this->isFinish;
        }
        if (null !== $this->isOffTopicControl) {
            $res['isOffTopicControl'] = $this->isOffTopicControl;
        }
        if (null !== $this->isOnTopic) {
            $res['isOnTopic'] = $this->isOnTopic;
        }
        if (null !== $this->questionIndex) {
            $res['questionIndex'] = $this->questionIndex;
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
        if (isset($map['chineseResult'])) {
            $model->chineseResult = $map['chineseResult'];
        }
        if (isset($map['englishResult'])) {
            $model->englishResult = $map['englishResult'];
        }
        if (isset($map['isFinish'])) {
            $model->isFinish = $map['isFinish'];
        }
        if (isset($map['isOffTopicControl'])) {
            $model->isOffTopicControl = $map['isOffTopicControl'];
        }
        if (isset($map['isOnTopic'])) {
            $model->isOnTopic = $map['isOnTopic'];
        }
        if (isset($map['questionIndex'])) {
            $model->questionIndex = $map['questionIndex'];
        }

        return $model;
    }
}

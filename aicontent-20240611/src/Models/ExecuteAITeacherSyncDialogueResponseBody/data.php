<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherSyncDialogueResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $englishResult;

    /**
     * @var bool
     */
    public $isFinish;

    /**
     * @var bool
     */
    public $isOnTopic;

    /**
     * @var int
     */
    public $questionIndex;
    protected $_name = [
        'englishResult' => 'englishResult',
        'isFinish' => 'isFinish',
        'isOnTopic' => 'isOnTopic',
        'questionIndex' => 'questionIndex',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->englishResult) {
            $res['englishResult'] = $this->englishResult;
        }

        if (null !== $this->isFinish) {
            $res['isFinish'] = $this->isFinish;
        }

        if (null !== $this->isOnTopic) {
            $res['isOnTopic'] = $this->isOnTopic;
        }

        if (null !== $this->questionIndex) {
            $res['questionIndex'] = $this->questionIndex;
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
        if (isset($map['englishResult'])) {
            $model->englishResult = $map['englishResult'];
        }

        if (isset($map['isFinish'])) {
            $model->isFinish = $map['isFinish'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantDialogueResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $chineseResult;

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
    public $isTaskCompleted;
    protected $_name = [
        'chineseResult'   => 'chineseResult',
        'englishResult'   => 'englishResult',
        'isFinish'        => 'isFinish',
        'isTaskCompleted' => 'isTaskCompleted',
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
        if (null !== $this->isTaskCompleted) {
            $res['isTaskCompleted'] = $this->isTaskCompleted;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
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
        if (isset($map['isTaskCompleted'])) {
            $model->isTaskCompleted = $map['isTaskCompleted'];
        }

        return $model;
    }
}

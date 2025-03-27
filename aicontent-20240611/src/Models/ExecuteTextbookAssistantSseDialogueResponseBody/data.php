<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantSseDialogueResponseBody;

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
    protected $_name = [
        'englishResult' => 'englishResult',
        'isFinish' => 'isFinish',
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

        return $model;
    }
}

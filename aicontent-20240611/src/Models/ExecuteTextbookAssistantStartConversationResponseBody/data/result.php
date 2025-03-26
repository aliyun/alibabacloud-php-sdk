<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantStartConversationResponseBody\data;

use AlibabaCloud\Dara\Model;

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
    protected $_name = [
        'chineseResult' => 'chineseResult',
        'englishResult' => 'englishResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chineseResult) {
            $res['chineseResult'] = $this->chineseResult;
        }

        if (null !== $this->englishResult) {
            $res['englishResult'] = $this->englishResult;
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
        if (isset($map['chineseResult'])) {
            $model->chineseResult = $map['chineseResult'];
        }

        if (isset($map['englishResult'])) {
            $model->englishResult = $map['englishResult'];
        }

        return $model;
    }
}

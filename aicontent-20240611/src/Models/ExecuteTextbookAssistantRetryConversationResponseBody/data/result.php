<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteTextbookAssistantRetryConversationResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $chineseResult;

    /**
     * @example Good evening! From the book, how does Mike Black introduce himself?
     *
     * @var string
     */
    public $englishResult;
    protected $_name = [
        'chineseResult' => 'chineseResult',
        'englishResult' => 'englishResult',
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

        return $model;
    }
}

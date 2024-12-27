<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\GetAITeacherExpansionDialogueSuggestionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 谢谢莉莉.你喜欢吃肉吗，莉莉？
     *
     * @var string
     */
    public $chineseResult;

    /**
     * @example Thanks, Lily. Do you like meat, Lily?
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

        return $model;
    }
}

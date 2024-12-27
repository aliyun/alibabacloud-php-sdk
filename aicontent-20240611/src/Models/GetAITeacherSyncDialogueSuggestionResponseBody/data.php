<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\GetAITeacherSyncDialogueSuggestionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example Thanks, Lily. Do you like meat, Lily?
     *
     * @var string
     */
    public $englishResult;

    /**
     * @example 谢谢莉莉.你喜欢吃肉吗，莉莉？
     *
     * @var string
     */
    public $englishResult1;
    protected $_name = [
        'englishResult'  => 'englishResult',
        'englishResult1' => 'englishResult1',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->englishResult) {
            $res['englishResult'] = $this->englishResult;
        }
        if (null !== $this->englishResult1) {
            $res['englishResult1'] = $this->englishResult1;
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
        if (isset($map['englishResult'])) {
            $model->englishResult = $map['englishResult'];
        }
        if (isset($map['englishResult1'])) {
            $model->englishResult1 = $map['englishResult1'];
        }

        return $model;
    }
}

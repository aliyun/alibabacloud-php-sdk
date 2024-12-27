<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueTranslateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 太好了，谢谢你过来，莉莉。你喜欢吃肉吗？
     *
     * @var string
     */
    public $result;
    protected $_name = [
        'result' => 'result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = $this->result;
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
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        return $model;
    }
}

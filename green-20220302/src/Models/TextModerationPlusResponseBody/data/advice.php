<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data;

use AlibabaCloud\Tea\Model;

class advice extends Model
{
    /**
     * @example XXX
     *
     * @var string
     */
    public $answer;
    protected $_name = [
        'answer' => 'Answer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = $this->answer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return advice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Answer'])) {
            $model->answer = $map['Answer'];
        }

        return $model;
    }
}

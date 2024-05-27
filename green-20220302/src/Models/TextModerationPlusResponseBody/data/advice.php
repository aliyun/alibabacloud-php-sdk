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

    /**
     * @var string
     */
    public $hitLabel;

    /**
     * @var string
     */
    public $hitLibName;
    protected $_name = [
        'answer'     => 'Answer',
        'hitLabel'   => 'HitLabel',
        'hitLibName' => 'HitLibName',
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
        if (null !== $this->hitLabel) {
            $res['HitLabel'] = $this->hitLabel;
        }
        if (null !== $this->hitLibName) {
            $res['HitLibName'] = $this->hitLibName;
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
        if (isset($map['HitLabel'])) {
            $model->hitLabel = $map['HitLabel'];
        }
        if (isset($map['HitLibName'])) {
            $model->hitLibName = $map['HitLibName'];
        }

        return $model;
    }
}

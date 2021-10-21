<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody;

use AlibabaCloud\Tea\Model;

class judgeResultUrl extends Model
{
    /**
     * @var string[]
     */
    public $judgeResultUrl;
    protected $_name = [
        'judgeResultUrl' => 'JudgeResultUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->judgeResultUrl) {
            $res['JudgeResultUrl'] = $this->judgeResultUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return judgeResultUrl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JudgeResultUrl'])) {
            if (!empty($map['JudgeResultUrl'])) {
                $model->judgeResultUrl = $map['JudgeResultUrl'];
            }
        }

        return $model;
    }
}

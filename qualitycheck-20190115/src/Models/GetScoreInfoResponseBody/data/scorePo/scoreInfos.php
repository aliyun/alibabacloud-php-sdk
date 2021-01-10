<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponseBody\data\scorePo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponseBody\data\scorePo\scoreInfos\scoreParam;
use AlibabaCloud\Tea\Model;

class scoreInfos extends Model
{
    /**
     * @var scoreParam[]
     */
    public $scoreParam;
    protected $_name = [
        'scoreParam' => 'ScoreParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scoreParam) {
            $res['ScoreParam'] = [];
            if (null !== $this->scoreParam && \is_array($this->scoreParam)) {
                $n = 0;
                foreach ($this->scoreParam as $item) {
                    $res['ScoreParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scoreInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScoreParam'])) {
            if (!empty($map['ScoreParam'])) {
                $model->scoreParam = [];
                $n                 = 0;
                foreach ($map['ScoreParam'] as $item) {
                    $model->scoreParam[$n++] = null !== $item ? scoreParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

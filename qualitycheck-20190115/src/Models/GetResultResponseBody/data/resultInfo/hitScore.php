<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo;

use AlibabaCloud\Tea\Model;

class hitScore extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitScore\hitScore[]
     */
    public $hitScore;
    protected $_name = [
        'hitScore' => 'HitScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitScore) {
            $res['HitScore'] = [];
            if (null !== $this->hitScore && \is_array($this->hitScore)) {
                $n = 0;
                foreach ($this->hitScore as $item) {
                    $res['HitScore'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hitScore
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HitScore'])) {
            if (!empty($map['HitScore'])) {
                $model->hitScore = [];
                $n               = 0;
                foreach ($map['HitScore'] as $item) {
                    $model->hitScore[$n++] = null !== $item ? \AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitScore\hitScore::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

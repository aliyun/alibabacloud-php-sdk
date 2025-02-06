<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitScore\hitScore;

class hitScore extends Model
{
    /**
     * @var hitScore[]
     */
    public $hitScore;
    protected $_name = [
        'hitScore' => 'HitScore',
    ];

    public function validate()
    {
        if (\is_array($this->hitScore)) {
            Model::validateArray($this->hitScore);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hitScore) {
            if (\is_array($this->hitScore)) {
                $res['HitScore'] = [];
                $n1              = 0;
                foreach ($this->hitScore as $item1) {
                    $res['HitScore'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['HitScore'])) {
            if (!empty($map['HitScore'])) {
                $model->hitScore = [];
                $n1              = 0;
                foreach ($map['HitScore'] as $item1) {
                    $model->hitScore[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

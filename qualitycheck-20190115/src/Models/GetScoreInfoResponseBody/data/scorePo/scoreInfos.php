<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponseBody\data\scorePo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponseBody\data\scorePo\scoreInfos\scoreParam;

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
        if (\is_array($this->scoreParam)) {
            Model::validateArray($this->scoreParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scoreParam) {
            if (\is_array($this->scoreParam)) {
                $res['ScoreParam'] = [];
                $n1                = 0;
                foreach ($this->scoreParam as $item1) {
                    $res['ScoreParam'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ScoreParam'])) {
            if (!empty($map['ScoreParam'])) {
                $model->scoreParam = [];
                $n1                = 0;
                foreach ($map['ScoreParam'] as $item1) {
                    $model->scoreParam[$n1++] = scoreParam::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

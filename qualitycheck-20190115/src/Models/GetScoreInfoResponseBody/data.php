<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponseBody\data\scorePo;

class data extends Model
{
    /**
     * @var scorePo[]
     */
    public $scorePo;
    protected $_name = [
        'scorePo' => 'ScorePo',
    ];

    public function validate()
    {
        if (\is_array($this->scorePo)) {
            Model::validateArray($this->scorePo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scorePo) {
            if (\is_array($this->scorePo)) {
                $res['ScorePo'] = [];
                $n1             = 0;
                foreach ($this->scorePo as $item1) {
                    $res['ScorePo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ScorePo'])) {
            if (!empty($map['ScorePo'])) {
                $model->scorePo = [];
                $n1             = 0;
                foreach ($map['ScorePo'] as $item1) {
                    $model->scorePo[$n1++] = scorePo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data\dataQuality\score;

class dataQuality extends Model
{
    /**
     * @var string
     */
    public $inventory;

    /**
     * @var score
     */
    public $score;
    protected $_name = [
        'inventory' => 'inventory',
        'score' => 'score',
    ];

    public function validate()
    {
        if (null !== $this->score) {
            $this->score->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inventory) {
            $res['inventory'] = $this->inventory;
        }

        if (null !== $this->score) {
            $res['score'] = null !== $this->score ? $this->score->toArray($noStream) : $this->score;
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
        if (isset($map['inventory'])) {
            $model->inventory = $map['inventory'];
        }

        if (isset($map['score'])) {
            $model->score = score::fromMap($map['score']);
        }

        return $model;
    }
}

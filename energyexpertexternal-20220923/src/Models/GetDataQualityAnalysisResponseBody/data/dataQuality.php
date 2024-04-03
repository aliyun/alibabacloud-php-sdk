<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data\dataQuality\score;
use AlibabaCloud\Tea\Model;

class dataQuality extends Model
{
    /**
     * @description Inventory name
     *
     * @example energy
     *
     * @var string
     */
    public $inventory;

    /**
     * @description Score. The distribution ranges from 1 to 5. A value closer to 1 indicates better data quality.
     *
     * @var score
     */
    public $score;
    protected $_name = [
        'inventory' => 'inventory',
        'score'     => 'score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inventory) {
            $res['inventory'] = $this->inventory;
        }
        if (null !== $this->score) {
            $res['score'] = null !== $this->score ? $this->score->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataQuality
     */
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

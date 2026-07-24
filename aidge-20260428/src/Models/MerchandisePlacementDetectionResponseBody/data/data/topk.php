<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePlacementDetectionResponseBody\data\data;

use AlibabaCloud\Dara\Model;

class topk extends Model
{
    /**
     * @var int
     */
    public $rank;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuName;
    protected $_name = [
        'rank' => 'Rank',
        'score' => 'Score',
        'skuId' => 'SkuId',
        'skuName' => 'SkuName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rank) {
            $res['Rank'] = $this->rank;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }

        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
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
        if (isset($map['Rank'])) {
            $model->rank = $map['Rank'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }

        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }

        return $model;
    }
}

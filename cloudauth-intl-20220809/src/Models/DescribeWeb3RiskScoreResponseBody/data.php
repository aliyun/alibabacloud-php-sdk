<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeWeb3RiskScoreResponseBody;

use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeWeb3RiskScoreResponseBody\data\riskResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description risk results
     *
     * @var riskResults[]
     */
    public $riskResults;

    /**
     * @description Risk score
     *
     * @example 80
     *
     * @var string
     */
    public $score;
    protected $_name = [
        'riskResults' => 'RiskResults',
        'score'       => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskResults) {
            $res['RiskResults'] = [];
            if (null !== $this->riskResults && \is_array($this->riskResults)) {
                $n = 0;
                foreach ($this->riskResults as $item) {
                    $res['RiskResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskResults'])) {
            if (!empty($map['RiskResults'])) {
                $model->riskResults = [];
                $n                  = 0;
                foreach ($map['RiskResults'] as $item) {
                    $model->riskResults[$n++] = null !== $item ? riskResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}

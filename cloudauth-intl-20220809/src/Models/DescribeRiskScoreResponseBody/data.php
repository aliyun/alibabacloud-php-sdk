<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeRiskScoreResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $detailList;

    /**
     * @example MMFinance Exploiter
     *
     * @var string
     */
    public $hackingEvent;

    /**
     * @example Severe
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @example 100
     *
     * @var int
     */
    public $score;
    protected $_name = [
        'detailList'   => 'DetailList',
        'hackingEvent' => 'HackingEvent',
        'riskLevel'    => 'RiskLevel',
        'score'        => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailList) {
            $res['DetailList'] = $this->detailList;
        }
        if (null !== $this->hackingEvent) {
            $res['HackingEvent'] = $this->hackingEvent;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
        if (isset($map['DetailList'])) {
            if (!empty($map['DetailList'])) {
                $model->detailList = $map['DetailList'];
            }
        }
        if (isset($map['HackingEvent'])) {
            $model->hackingEvent = $map['HackingEvent'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}

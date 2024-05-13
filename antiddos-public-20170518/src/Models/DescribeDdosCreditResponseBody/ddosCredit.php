<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCreditResponseBody;

use AlibabaCloud\Tea\Model;

class ddosCredit extends Model
{
    /**
     * @description The time period after which blackhole filtering is automatically deactivated in the specified region. Unit: minutes.
     *
     * @example 150
     *
     * @var int
     */
    public $blackholeTime;

    /**
     * @description The security credit score. The full score is **1000**.
     *
     * @example 550
     *
     * @var int
     */
    public $score;

    /**
     * @description The security credit level. Valid values:
     *
     *   **A**: outstanding
     *   **B**: excellent
     *   **C**: good
     *   **D**: average
     *   **E**: poor
     *   **F**: poorer
     *
     * @example D
     *
     * @var string
     */
    public $scoreLevel;
    protected $_name = [
        'blackholeTime' => 'BlackholeTime',
        'score'         => 'Score',
        'scoreLevel'    => 'ScoreLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackholeTime) {
            $res['BlackholeTime'] = $this->blackholeTime;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->scoreLevel) {
            $res['ScoreLevel'] = $this->scoreLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ddosCredit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackholeTime'])) {
            $model->blackholeTime = $map['BlackholeTime'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ScoreLevel'])) {
            $model->scoreLevel = $map['ScoreLevel'];
        }

        return $model;
    }
}

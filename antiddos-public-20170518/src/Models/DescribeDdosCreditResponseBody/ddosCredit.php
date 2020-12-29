<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCreditResponseBody;

use AlibabaCloud\Tea\Model;

class ddosCredit extends Model
{
    /**
     * @var int
     */
    public $score;

    /**
     * @var string
     */
    public $scoreLevel;

    /**
     * @var int
     */
    public $blackholeTime;
    protected $_name = [
        'score'         => 'Score',
        'scoreLevel'    => 'ScoreLevel',
        'blackholeTime' => 'BlackholeTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->scoreLevel) {
            $res['ScoreLevel'] = $this->scoreLevel;
        }
        if (null !== $this->blackholeTime) {
            $res['BlackholeTime'] = $this->blackholeTime;
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
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ScoreLevel'])) {
            $model->scoreLevel = $map['ScoreLevel'];
        }
        if (isset($map['BlackholeTime'])) {
            $model->blackholeTime = $map['BlackholeTime'];
        }

        return $model;
    }
}

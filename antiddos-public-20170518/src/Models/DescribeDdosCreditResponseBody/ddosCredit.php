<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCreditResponseBody;

use AlibabaCloud\Dara\Model;

class ddosCredit extends Model
{
    /**
     * @var int
     */
    public $blackholeTime;

    /**
     * @var int
     */
    public $score;

    /**
     * @var string
     */
    public $scoreLevel;
    protected $_name = [
        'blackholeTime' => 'BlackholeTime',
        'score' => 'Score',
        'scoreLevel' => 'ScoreLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

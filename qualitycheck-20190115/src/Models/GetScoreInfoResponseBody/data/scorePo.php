<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponseBody\data\scorePo\scoreInfos;

class scorePo extends Model
{
    /**
     * @var int
     */
    public $scoreId;

    /**
     * @var scoreInfos
     */
    public $scoreInfos;

    /**
     * @var string
     */
    public $scoreName;
    protected $_name = [
        'scoreId' => 'ScoreId',
        'scoreInfos' => 'ScoreInfos',
        'scoreName' => 'ScoreName',
    ];

    public function validate()
    {
        if (null !== $this->scoreInfos) {
            $this->scoreInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scoreId) {
            $res['ScoreId'] = $this->scoreId;
        }

        if (null !== $this->scoreInfos) {
            $res['ScoreInfos'] = null !== $this->scoreInfos ? $this->scoreInfos->toArray($noStream) : $this->scoreInfos;
        }

        if (null !== $this->scoreName) {
            $res['ScoreName'] = $this->scoreName;
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
        if (isset($map['ScoreId'])) {
            $model->scoreId = $map['ScoreId'];
        }

        if (isset($map['ScoreInfos'])) {
            $model->scoreInfos = scoreInfos::fromMap($map['ScoreInfos']);
        }

        if (isset($map['ScoreName'])) {
            $model->scoreName = $map['ScoreName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponseBody\data\scorePo\scoreInfos;
use AlibabaCloud\Tea\Model;

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
        'scoreId'    => 'ScoreId',
        'scoreInfos' => 'ScoreInfos',
        'scoreName'  => 'ScoreName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scoreId) {
            $res['ScoreId'] = $this->scoreId;
        }
        if (null !== $this->scoreInfos) {
            $res['ScoreInfos'] = null !== $this->scoreInfos ? $this->scoreInfos->toMap() : null;
        }
        if (null !== $this->scoreName) {
            $res['ScoreName'] = $this->scoreName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scorePo
     */
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

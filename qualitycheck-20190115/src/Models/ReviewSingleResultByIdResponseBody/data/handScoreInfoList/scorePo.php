<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data\handScoreInfoList;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data\handScoreInfoList\scorePo\scoreInfos;
use AlibabaCloud\Tea\Model;

class scorePo extends Model
{
    /**
     * @var scoreInfos
     */
    public $scoreInfos;

    /**
     * @var string
     */
    public $scoreName;

    /**
     * @var int
     */
    public $scoreId;
    protected $_name = [
        'scoreInfos' => 'ScoreInfos',
        'scoreName'  => 'ScoreName',
        'scoreId'    => 'ScoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scoreInfos) {
            $res['ScoreInfos'] = null !== $this->scoreInfos ? $this->scoreInfos->toMap() : null;
        }
        if (null !== $this->scoreName) {
            $res['ScoreName'] = $this->scoreName;
        }
        if (null !== $this->scoreId) {
            $res['ScoreId'] = $this->scoreId;
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
        if (isset($map['ScoreInfos'])) {
            $model->scoreInfos = scoreInfos::fromMap($map['ScoreInfos']);
        }
        if (isset($map['ScoreName'])) {
            $model->scoreName = $map['ScoreName'];
        }
        if (isset($map['ScoreId'])) {
            $model->scoreId = $map['ScoreId'];
        }

        return $model;
    }
}

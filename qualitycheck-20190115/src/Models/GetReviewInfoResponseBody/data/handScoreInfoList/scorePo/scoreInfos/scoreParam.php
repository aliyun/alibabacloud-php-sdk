<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetReviewInfoResponseBody\data\handScoreInfoList\scorePo\scoreInfos;

use AlibabaCloud\Tea\Model;

class scoreParam extends Model
{
    /**
     * @var string
     */
    public $scoreSubName;

    /**
     * @var int
     */
    public $scoreNum;

    /**
     * @var int
     */
    public $scoreSubId;

    /**
     * @var int
     */
    public $scoreType;

    /**
     * @var int
     */
    public $hit;
    protected $_name = [
        'scoreSubName' => 'ScoreSubName',
        'scoreNum'     => 'ScoreNum',
        'scoreSubId'   => 'ScoreSubId',
        'scoreType'    => 'ScoreType',
        'hit'          => 'Hit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scoreSubName) {
            $res['ScoreSubName'] = $this->scoreSubName;
        }
        if (null !== $this->scoreNum) {
            $res['ScoreNum'] = $this->scoreNum;
        }
        if (null !== $this->scoreSubId) {
            $res['ScoreSubId'] = $this->scoreSubId;
        }
        if (null !== $this->scoreType) {
            $res['ScoreType'] = $this->scoreType;
        }
        if (null !== $this->hit) {
            $res['Hit'] = $this->hit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scoreParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScoreSubName'])) {
            $model->scoreSubName = $map['ScoreSubName'];
        }
        if (isset($map['ScoreNum'])) {
            $model->scoreNum = $map['ScoreNum'];
        }
        if (isset($map['ScoreSubId'])) {
            $model->scoreSubId = $map['ScoreSubId'];
        }
        if (isset($map['ScoreType'])) {
            $model->scoreType = $map['ScoreType'];
        }
        if (isset($map['Hit'])) {
            $model->hit = $map['Hit'];
        }

        return $model;
    }
}

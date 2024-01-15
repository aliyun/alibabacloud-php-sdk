<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\manualScoreInfoList;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\manualScoreInfoList\manualScoreInfo\complainHistories;
use AlibabaCloud\Tea\Model;

class manualScoreInfo extends Model
{
    /**
     * @var complainHistories
     */
    public $complainHistories;

    /**
     * @example true
     *
     * @var bool
     */
    public $complainable;

    /**
     * @example xxx
     *
     * @var int
     */
    public $scoreId;

    /**
     * @example -10
     *
     * @var int
     */
    public $scoreNum;

    /**
     * @example xxx
     *
     * @var int
     */
    public $scoreSubId;

    /**
     * @var string
     */
    public $scoreSubName;
    protected $_name = [
        'complainHistories' => 'ComplainHistories',
        'complainable'      => 'Complainable',
        'scoreId'           => 'ScoreId',
        'scoreNum'          => 'ScoreNum',
        'scoreSubId'        => 'ScoreSubId',
        'scoreSubName'      => 'ScoreSubName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complainHistories) {
            $res['ComplainHistories'] = null !== $this->complainHistories ? $this->complainHistories->toMap() : null;
        }
        if (null !== $this->complainable) {
            $res['Complainable'] = $this->complainable;
        }
        if (null !== $this->scoreId) {
            $res['ScoreId'] = $this->scoreId;
        }
        if (null !== $this->scoreNum) {
            $res['ScoreNum'] = $this->scoreNum;
        }
        if (null !== $this->scoreSubId) {
            $res['ScoreSubId'] = $this->scoreSubId;
        }
        if (null !== $this->scoreSubName) {
            $res['ScoreSubName'] = $this->scoreSubName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return manualScoreInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplainHistories'])) {
            $model->complainHistories = complainHistories::fromMap($map['ComplainHistories']);
        }
        if (isset($map['Complainable'])) {
            $model->complainable = $map['Complainable'];
        }
        if (isset($map['ScoreId'])) {
            $model->scoreId = $map['ScoreId'];
        }
        if (isset($map['ScoreNum'])) {
            $model->scoreNum = $map['ScoreNum'];
        }
        if (isset($map['ScoreSubId'])) {
            $model->scoreSubId = $map['ScoreSubId'];
        }
        if (isset($map['ScoreSubName'])) {
            $model->scoreSubName = $map['ScoreSubName'];
        }

        return $model;
    }
}

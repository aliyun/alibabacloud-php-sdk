<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\manualScoreInfoList;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\manualScoreInfoList\manualScoreInfo\complainHistories;
use AlibabaCloud\Tea\Model;

class manualScoreInfo extends Model
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
     * @var complainHistories
     */
    public $complainHistories;

    /**
     * @var bool
     */
    public $complainable;

    /**
     * @var int
     */
    public $scoreId;
    protected $_name = [
        'scoreSubName'      => 'ScoreSubName',
        'scoreNum'          => 'ScoreNum',
        'scoreSubId'        => 'ScoreSubId',
        'complainHistories' => 'ComplainHistories',
        'complainable'      => 'Complainable',
        'scoreId'           => 'ScoreId',
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
        if (null !== $this->complainHistories) {
            $res['ComplainHistories'] = null !== $this->complainHistories ? $this->complainHistories->toMap() : null;
        }
        if (null !== $this->complainable) {
            $res['Complainable'] = $this->complainable;
        }
        if (null !== $this->scoreId) {
            $res['ScoreId'] = $this->scoreId;
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
        if (isset($map['ScoreSubName'])) {
            $model->scoreSubName = $map['ScoreSubName'];
        }
        if (isset($map['ScoreNum'])) {
            $model->scoreNum = $map['ScoreNum'];
        }
        if (isset($map['ScoreSubId'])) {
            $model->scoreSubId = $map['ScoreSubId'];
        }
        if (isset($map['ComplainHistories'])) {
            $model->complainHistories = complainHistories::fromMap($map['ComplainHistories']);
        }
        if (isset($map['Complainable'])) {
            $model->complainable = $map['Complainable'];
        }
        if (isset($map['ScoreId'])) {
            $model->scoreId = $map['ScoreId'];
        }

        return $model;
    }
}

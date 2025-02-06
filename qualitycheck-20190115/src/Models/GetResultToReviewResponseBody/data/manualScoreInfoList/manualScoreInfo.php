<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\manualScoreInfoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\manualScoreInfoList\manualScoreInfo\complainHistories;

class manualScoreInfo extends Model
{
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
    /**
     * @var int
     */
    public $scoreNum;
    /**
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
        if (null !== $this->complainHistories) {
            $this->complainHistories->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complainHistories) {
            $res['ComplainHistories'] = null !== $this->complainHistories ? $this->complainHistories->toArray($noStream) : $this->complainHistories;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

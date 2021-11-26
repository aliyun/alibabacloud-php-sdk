<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetScoreInfoResponseBody\data\scorePo\scoreInfos;

use AlibabaCloud\Tea\Model;

class scoreParam extends Model
{
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

    /**
     * @var int
     */
    public $scoreType;
    protected $_name = [
        'scoreNum'     => 'ScoreNum',
        'scoreSubId'   => 'ScoreSubId',
        'scoreSubName' => 'ScoreSubName',
        'scoreType'    => 'ScoreType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scoreNum) {
            $res['ScoreNum'] = $this->scoreNum;
        }
        if (null !== $this->scoreSubId) {
            $res['ScoreSubId'] = $this->scoreSubId;
        }
        if (null !== $this->scoreSubName) {
            $res['ScoreSubName'] = $this->scoreSubName;
        }
        if (null !== $this->scoreType) {
            $res['ScoreType'] = $this->scoreType;
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
        if (isset($map['ScoreNum'])) {
            $model->scoreNum = $map['ScoreNum'];
        }
        if (isset($map['ScoreSubId'])) {
            $model->scoreSubId = $map['ScoreSubId'];
        }
        if (isset($map['ScoreSubName'])) {
            $model->scoreSubName = $map['ScoreSubName'];
        }
        if (isset($map['ScoreType'])) {
            $model->scoreType = $map['ScoreType'];
        }

        return $model;
    }
}

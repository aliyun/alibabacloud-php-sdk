<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\InsertScoreForApiResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 5728
     *
     * @var int
     */
    public $scoreId;

    /**
     * @var string
     */
    public $scoreName;
    protected $_name = [
        'scoreId'   => 'ScoreId',
        'scoreName' => 'ScoreName',
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
        if (null !== $this->scoreName) {
            $res['ScoreName'] = $this->scoreName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScoreId'])) {
            $model->scoreId = $map['ScoreId'];
        }
        if (isset($map['ScoreName'])) {
            $model->scoreName = $map['ScoreName'];
        }

        return $model;
    }
}

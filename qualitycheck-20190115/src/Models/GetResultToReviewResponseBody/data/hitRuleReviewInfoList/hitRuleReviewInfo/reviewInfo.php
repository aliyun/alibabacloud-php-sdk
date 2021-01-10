<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo;

use AlibabaCloud\Tea\Model;

class reviewInfo extends Model
{
    /**
     * @var string
     */
    public $reviewTime;

    /**
     * @var string
     */
    public $reviewer;

    /**
     * @var int
     */
    public $reviewResult;

    /**
     * @var string
     */
    public $hitId;

    /**
     * @var int
     */
    public $rid;
    protected $_name = [
        'reviewTime'   => 'ReviewTime',
        'reviewer'     => 'Reviewer',
        'reviewResult' => 'ReviewResult',
        'hitId'        => 'HitId',
        'rid'          => 'Rid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reviewTime) {
            $res['ReviewTime'] = $this->reviewTime;
        }
        if (null !== $this->reviewer) {
            $res['Reviewer'] = $this->reviewer;
        }
        if (null !== $this->reviewResult) {
            $res['ReviewResult'] = $this->reviewResult;
        }
        if (null !== $this->hitId) {
            $res['HitId'] = $this->hitId;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReviewTime'])) {
            $model->reviewTime = $map['ReviewTime'];
        }
        if (isset($map['Reviewer'])) {
            $model->reviewer = $map['Reviewer'];
        }
        if (isset($map['ReviewResult'])) {
            $model->reviewResult = $map['ReviewResult'];
        }
        if (isset($map['HitId'])) {
            $model->hitId = $map['HitId'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        return $model;
    }
}

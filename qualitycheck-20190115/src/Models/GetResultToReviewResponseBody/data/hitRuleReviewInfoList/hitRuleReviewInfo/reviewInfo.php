<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo;

use AlibabaCloud\Tea\Model;

class reviewInfo extends Model
{
    /**
     * @example 013c68142fec4f0899fa6ee0exxx
     *
     * @var string
     */
    public $hitId;

    /**
     * @example 1
     *
     * @var int
     */
    public $reviewResult;

    /**
     * @example 2019-10-12 17:06:00
     *
     * @var string
     */
    public $reviewTime;

    /**
     * @example 123
     *
     * @var string
     */
    public $reviewer;

    /**
     * @example 451
     *
     * @var int
     */
    public $rid;
    protected $_name = [
        'hitId'        => 'HitId',
        'reviewResult' => 'ReviewResult',
        'reviewTime'   => 'ReviewTime',
        'reviewer'     => 'Reviewer',
        'rid'          => 'Rid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitId) {
            $res['HitId'] = $this->hitId;
        }
        if (null !== $this->reviewResult) {
            $res['ReviewResult'] = $this->reviewResult;
        }
        if (null !== $this->reviewTime) {
            $res['ReviewTime'] = $this->reviewTime;
        }
        if (null !== $this->reviewer) {
            $res['Reviewer'] = $this->reviewer;
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
        if (isset($map['HitId'])) {
            $model->hitId = $map['HitId'];
        }
        if (isset($map['ReviewResult'])) {
            $model->reviewResult = $map['ReviewResult'];
        }
        if (isset($map['ReviewTime'])) {
            $model->reviewTime = $map['ReviewTime'];
        }
        if (isset($map['Reviewer'])) {
            $model->reviewer = $map['Reviewer'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        return $model;
    }
}

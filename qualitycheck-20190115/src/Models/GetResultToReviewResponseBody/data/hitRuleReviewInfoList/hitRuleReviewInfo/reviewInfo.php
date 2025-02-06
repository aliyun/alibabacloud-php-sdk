<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo;

use AlibabaCloud\Dara\Model;

class reviewInfo extends Model
{
    /**
     * @var string
     */
    public $hitId;
    /**
     * @var int
     */
    public $reviewResult;
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

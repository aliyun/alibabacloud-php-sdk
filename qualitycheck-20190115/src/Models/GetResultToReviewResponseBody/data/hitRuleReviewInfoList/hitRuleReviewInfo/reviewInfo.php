<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\reviewInfo\sentenceReviewResults;

class reviewInfo extends Model
{
    /**
     * @var string
     */
    public $comment;

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

    /**
     * @var sentenceReviewResults
     */
    public $sentenceReviewResults;
    protected $_name = [
        'comment' => 'Comment',
        'hitId' => 'HitId',
        'reviewResult' => 'ReviewResult',
        'reviewTime' => 'ReviewTime',
        'reviewer' => 'Reviewer',
        'rid' => 'Rid',
        'sentenceReviewResults' => 'SentenceReviewResults',
    ];

    public function validate()
    {
        if (null !== $this->sentenceReviewResults) {
            $this->sentenceReviewResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

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

        if (null !== $this->sentenceReviewResults) {
            $res['SentenceReviewResults'] = null !== $this->sentenceReviewResults ? $this->sentenceReviewResults->toArray($noStream) : $this->sentenceReviewResults;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

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

        if (isset($map['SentenceReviewResults'])) {
            $model->sentenceReviewResults = sentenceReviewResults::fromMap($map['SentenceReviewResults']);
        }

        return $model;
    }
}

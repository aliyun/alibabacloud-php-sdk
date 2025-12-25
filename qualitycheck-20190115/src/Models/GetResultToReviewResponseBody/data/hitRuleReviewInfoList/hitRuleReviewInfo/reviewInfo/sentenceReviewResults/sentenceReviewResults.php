<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\reviewInfo\sentenceReviewResults;

use AlibabaCloud\Dara\Model;

class sentenceReviewResults extends Model
{
    /**
     * @var bool
     */
    public $changed;

    /**
     * @var int
     */
    public $cid;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $hitStatus;

    /**
     * @var string
     */
    public $originTaskId;

    /**
     * @var string
     */
    public $originVid;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $reviewDimensionType;

    /**
     * @var int
     */
    public $rid;

    /**
     * @var int
     */
    public $sid;
    protected $_name = [
        'changed' => 'Changed',
        'cid' => 'Cid',
        'comment' => 'Comment',
        'hitStatus' => 'HitStatus',
        'originTaskId' => 'OriginTaskId',
        'originVid' => 'OriginVid',
        'pid' => 'Pid',
        'reviewDimensionType' => 'ReviewDimensionType',
        'rid' => 'Rid',
        'sid' => 'Sid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changed) {
            $res['Changed'] = $this->changed;
        }

        if (null !== $this->cid) {
            $res['Cid'] = $this->cid;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->hitStatus) {
            $res['HitStatus'] = $this->hitStatus;
        }

        if (null !== $this->originTaskId) {
            $res['OriginTaskId'] = $this->originTaskId;
        }

        if (null !== $this->originVid) {
            $res['OriginVid'] = $this->originVid;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->reviewDimensionType) {
            $res['ReviewDimensionType'] = $this->reviewDimensionType;
        }

        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
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
        if (isset($map['Changed'])) {
            $model->changed = $map['Changed'];
        }

        if (isset($map['Cid'])) {
            $model->cid = $map['Cid'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['HitStatus'])) {
            $model->hitStatus = $map['HitStatus'];
        }

        if (isset($map['OriginTaskId'])) {
            $model->originTaskId = $map['OriginTaskId'];
        }

        if (isset($map['OriginVid'])) {
            $model->originVid = $map['OriginVid'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['ReviewDimensionType'])) {
            $model->reviewDimensionType = $map['ReviewDimensionType'];
        }

        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }

        return $model;
    }
}

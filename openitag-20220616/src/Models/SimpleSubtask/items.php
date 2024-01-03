<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\SimpleSubtask;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example False
     *
     * @var bool
     */
    public $abandonFlag;

    /**
     * @example None
     *
     * @var string
     */
    public $abandonRemark;

    /**
     * @example 1957578084
     *
     * @var string
     */
    public $dataId;

    /**
     * @example False
     *
     * @var bool
     */
    public $feedbackFlag;

    /**
     * @example None
     *
     * @var string
     */
    public $feedbackRemark;

    /**
     * @example False
     *
     * @var bool
     */
    public $fixedFlag;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @example 0
     *
     * @var int
     */
    public $mine;

    /**
     * @example False
     *
     * @var bool
     */
    public $rejectFlag;

    /**
     * @example HANDLING
     *
     * @var string
     */
    public $state;

    /**
     * @example 311011
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'abandonFlag'    => 'AbandonFlag',
        'abandonRemark'  => 'AbandonRemark',
        'dataId'         => 'DataId',
        'feedbackFlag'   => 'FeedbackFlag',
        'feedbackRemark' => 'FeedbackRemark',
        'fixedFlag'      => 'FixedFlag',
        'itemId'         => 'ItemId',
        'mine'           => 'Mine',
        'rejectFlag'     => 'RejectFlag',
        'state'          => 'State',
        'weight'         => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abandonFlag) {
            $res['AbandonFlag'] = $this->abandonFlag;
        }
        if (null !== $this->abandonRemark) {
            $res['AbandonRemark'] = $this->abandonRemark;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->feedbackFlag) {
            $res['FeedbackFlag'] = $this->feedbackFlag;
        }
        if (null !== $this->feedbackRemark) {
            $res['FeedbackRemark'] = $this->feedbackRemark;
        }
        if (null !== $this->fixedFlag) {
            $res['FixedFlag'] = $this->fixedFlag;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->mine) {
            $res['Mine'] = $this->mine;
        }
        if (null !== $this->rejectFlag) {
            $res['RejectFlag'] = $this->rejectFlag;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbandonFlag'])) {
            $model->abandonFlag = $map['AbandonFlag'];
        }
        if (isset($map['AbandonRemark'])) {
            $model->abandonRemark = $map['AbandonRemark'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['FeedbackFlag'])) {
            $model->feedbackFlag = $map['FeedbackFlag'];
        }
        if (isset($map['FeedbackRemark'])) {
            $model->feedbackRemark = $map['FeedbackRemark'];
        }
        if (isset($map['FixedFlag'])) {
            $model->fixedFlag = $map['FixedFlag'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['Mine'])) {
            $model->mine = $map['Mine'];
        }
        if (isset($map['RejectFlag'])) {
            $model->rejectFlag = $map['RejectFlag'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}

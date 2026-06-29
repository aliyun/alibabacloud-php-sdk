<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\SubtaskDetail;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var bool
     */
    public $abandonFlag;

    /**
     * @var string
     */
    public $abandonRemark;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var bool
     */
    public $feedbackFlag;

    /**
     * @var string
     */
    public $feedbackRemark;

    /**
     * @var bool
     */
    public $fixedFlag;

    /**
     * @var int
     */
    public $mine;

    /**
     * @var bool
     */
    public $rejectFlag;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'abandonFlag' => 'AbandonFlag',
        'abandonRemark' => 'AbandonRemark',
        'dataId' => 'DataId',
        'feedbackFlag' => 'FeedbackFlag',
        'feedbackRemark' => 'FeedbackRemark',
        'fixedFlag' => 'FixedFlag',
        'mine' => 'Mine',
        'rejectFlag' => 'RejectFlag',
        'state' => 'State',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class MarkResult extends Model
{
    /**
     * @var bool
     */
    public $isNeedVoteJudge;

    /**
     * @var string
     */
    public $markResult;

    /**
     * @var string
     */
    public $markResultId;

    /**
     * @var string
     */
    public $markTime;

    /**
     * @var string
     */
    public $markTitle;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $questionId;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var string
     */
    public $userMarkResultId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'isNeedVoteJudge' => 'IsNeedVoteJudge',
        'markResult' => 'MarkResult',
        'markResultId' => 'MarkResultId',
        'markTime' => 'MarkTime',
        'markTitle' => 'MarkTitle',
        'progress' => 'Progress',
        'questionId' => 'QuestionId',
        'resultType' => 'ResultType',
        'userMarkResultId' => 'UserMarkResultId',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isNeedVoteJudge) {
            $res['IsNeedVoteJudge'] = $this->isNeedVoteJudge;
        }

        if (null !== $this->markResult) {
            $res['MarkResult'] = $this->markResult;
        }

        if (null !== $this->markResultId) {
            $res['MarkResultId'] = $this->markResultId;
        }

        if (null !== $this->markTime) {
            $res['MarkTime'] = $this->markTime;
        }

        if (null !== $this->markTitle) {
            $res['MarkTitle'] = $this->markTitle;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->questionId) {
            $res['QuestionId'] = $this->questionId;
        }

        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }

        if (null !== $this->userMarkResultId) {
            $res['UserMarkResultId'] = $this->userMarkResultId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['IsNeedVoteJudge'])) {
            $model->isNeedVoteJudge = $map['IsNeedVoteJudge'];
        }

        if (isset($map['MarkResult'])) {
            $model->markResult = $map['MarkResult'];
        }

        if (isset($map['MarkResultId'])) {
            $model->markResultId = $map['MarkResultId'];
        }

        if (isset($map['MarkTime'])) {
            $model->markTime = $map['MarkTime'];
        }

        if (isset($map['MarkTitle'])) {
            $model->markTitle = $map['MarkTitle'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['QuestionId'])) {
            $model->questionId = $map['QuestionId'];
        }

        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }

        if (isset($map['UserMarkResultId'])) {
            $model->userMarkResultId = $map['UserMarkResultId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

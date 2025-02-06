<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\dialogues;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\manualScoreInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewTypeIdList;

class data extends Model
{
    /**
     * @var string
     */
    public $audioScheme;
    /**
     * @var string
     */
    public $audioURL;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var dialogues
     */
    public $dialogues;
    /**
     * @var string
     */
    public $fileId;
    /**
     * @var string
     */
    public $fileMergeName;
    /**
     * @var hitRuleReviewInfoList
     */
    public $hitRuleReviewInfoList;
    /**
     * @var manualScoreInfoList
     */
    public $manualScoreInfoList;
    /**
     * @var reviewHistoryList
     */
    public $reviewHistoryList;
    /**
     * @var reviewTypeIdList
     */
    public $reviewTypeIdList;
    /**
     * @var int
     */
    public $status;
    /**
     * @var int
     */
    public $totalScore;
    /**
     * @var string
     */
    public $vid;
    protected $_name = [
        'audioScheme'           => 'AudioScheme',
        'audioURL'              => 'AudioURL',
        'comments'              => 'Comments',
        'dialogues'             => 'Dialogues',
        'fileId'                => 'FileId',
        'fileMergeName'         => 'FileMergeName',
        'hitRuleReviewInfoList' => 'HitRuleReviewInfoList',
        'manualScoreInfoList'   => 'ManualScoreInfoList',
        'reviewHistoryList'     => 'ReviewHistoryList',
        'reviewTypeIdList'      => 'ReviewTypeIdList',
        'status'                => 'Status',
        'totalScore'            => 'TotalScore',
        'vid'                   => 'Vid',
    ];

    public function validate()
    {
        if (null !== $this->dialogues) {
            $this->dialogues->validate();
        }
        if (null !== $this->hitRuleReviewInfoList) {
            $this->hitRuleReviewInfoList->validate();
        }
        if (null !== $this->manualScoreInfoList) {
            $this->manualScoreInfoList->validate();
        }
        if (null !== $this->reviewHistoryList) {
            $this->reviewHistoryList->validate();
        }
        if (null !== $this->reviewTypeIdList) {
            $this->reviewTypeIdList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioScheme) {
            $res['AudioScheme'] = $this->audioScheme;
        }

        if (null !== $this->audioURL) {
            $res['AudioURL'] = $this->audioURL;
        }

        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }

        if (null !== $this->dialogues) {
            $res['Dialogues'] = null !== $this->dialogues ? $this->dialogues->toArray($noStream) : $this->dialogues;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->fileMergeName) {
            $res['FileMergeName'] = $this->fileMergeName;
        }

        if (null !== $this->hitRuleReviewInfoList) {
            $res['HitRuleReviewInfoList'] = null !== $this->hitRuleReviewInfoList ? $this->hitRuleReviewInfoList->toArray($noStream) : $this->hitRuleReviewInfoList;
        }

        if (null !== $this->manualScoreInfoList) {
            $res['ManualScoreInfoList'] = null !== $this->manualScoreInfoList ? $this->manualScoreInfoList->toArray($noStream) : $this->manualScoreInfoList;
        }

        if (null !== $this->reviewHistoryList) {
            $res['ReviewHistoryList'] = null !== $this->reviewHistoryList ? $this->reviewHistoryList->toArray($noStream) : $this->reviewHistoryList;
        }

        if (null !== $this->reviewTypeIdList) {
            $res['ReviewTypeIdList'] = null !== $this->reviewTypeIdList ? $this->reviewTypeIdList->toArray($noStream) : $this->reviewTypeIdList;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalScore) {
            $res['TotalScore'] = $this->totalScore;
        }

        if (null !== $this->vid) {
            $res['Vid'] = $this->vid;
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
        if (isset($map['AudioScheme'])) {
            $model->audioScheme = $map['AudioScheme'];
        }

        if (isset($map['AudioURL'])) {
            $model->audioURL = $map['AudioURL'];
        }

        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }

        if (isset($map['Dialogues'])) {
            $model->dialogues = dialogues::fromMap($map['Dialogues']);
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FileMergeName'])) {
            $model->fileMergeName = $map['FileMergeName'];
        }

        if (isset($map['HitRuleReviewInfoList'])) {
            $model->hitRuleReviewInfoList = hitRuleReviewInfoList::fromMap($map['HitRuleReviewInfoList']);
        }

        if (isset($map['ManualScoreInfoList'])) {
            $model->manualScoreInfoList = manualScoreInfoList::fromMap($map['ManualScoreInfoList']);
        }

        if (isset($map['ReviewHistoryList'])) {
            $model->reviewHistoryList = reviewHistoryList::fromMap($map['ReviewHistoryList']);
        }

        if (isset($map['ReviewTypeIdList'])) {
            $model->reviewTypeIdList = reviewTypeIdList::fromMap($map['ReviewTypeIdList']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalScore'])) {
            $model->totalScore = $map['TotalScore'];
        }

        if (isset($map['Vid'])) {
            $model->vid = $map['Vid'];
        }

        return $model;
    }
}

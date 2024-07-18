<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\dialogues;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\manualScoreInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewTypeIdList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example https
     *
     * @var string
     */
    public $audioScheme;

    /**
     * @example sca-ccc-test.oss-cn-beijing.aliyuncs.com/xxxxx
     *
     * @var string
     */
    public $audioURL;

    /**
     * @example xxx
     *
     * @var string
     */
    public $comments;

    /**
     * @var dialogues
     */
    public $dialogues;

    /**
     * @example e790e6c919d84b82b64ee*****
     *
     * @var string
     */
    public $fileId;

    /**
     * @example xxx.wav
     *
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
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 99
     *
     * @var int
     */
    public $totalScore;

    /**
     * @example 6fa76916-3ce6-45d8-ac64-01b7f31***
     *
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
    }

    public function toMap()
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
            $res['Dialogues'] = null !== $this->dialogues ? $this->dialogues->toMap() : null;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileMergeName) {
            $res['FileMergeName'] = $this->fileMergeName;
        }
        if (null !== $this->hitRuleReviewInfoList) {
            $res['HitRuleReviewInfoList'] = null !== $this->hitRuleReviewInfoList ? $this->hitRuleReviewInfoList->toMap() : null;
        }
        if (null !== $this->manualScoreInfoList) {
            $res['ManualScoreInfoList'] = null !== $this->manualScoreInfoList ? $this->manualScoreInfoList->toMap() : null;
        }
        if (null !== $this->reviewHistoryList) {
            $res['ReviewHistoryList'] = null !== $this->reviewHistoryList ? $this->reviewHistoryList->toMap() : null;
        }
        if (null !== $this->reviewTypeIdList) {
            $res['ReviewTypeIdList'] = null !== $this->reviewTypeIdList ? $this->reviewTypeIdList->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return data
     */
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

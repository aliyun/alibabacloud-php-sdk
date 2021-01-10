<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\dialogues;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\manualScoreInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\reviewHistoryList;
use AlibabaCloud\Tea\Model;

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
     * @var reviewHistoryList
     */
    public $reviewHistoryList;

    /**
     * @var hitRuleReviewInfoList
     */
    public $hitRuleReviewInfoList;

    /**
     * @var int
     */
    public $totalScore;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var manualScoreInfoList
     */
    public $manualScoreInfoList;

    /**
     * @var string
     */
    public $fileMergeName;

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
    public $vid;
    protected $_name = [
        'audioScheme'           => 'AudioScheme',
        'audioURL'              => 'AudioURL',
        'reviewHistoryList'     => 'ReviewHistoryList',
        'hitRuleReviewInfoList' => 'HitRuleReviewInfoList',
        'totalScore'            => 'TotalScore',
        'fileId'                => 'FileId',
        'manualScoreInfoList'   => 'ManualScoreInfoList',
        'fileMergeName'         => 'FileMergeName',
        'comments'              => 'Comments',
        'dialogues'             => 'Dialogues',
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
        if (null !== $this->reviewHistoryList) {
            $res['ReviewHistoryList'] = null !== $this->reviewHistoryList ? $this->reviewHistoryList->toMap() : null;
        }
        if (null !== $this->hitRuleReviewInfoList) {
            $res['HitRuleReviewInfoList'] = null !== $this->hitRuleReviewInfoList ? $this->hitRuleReviewInfoList->toMap() : null;
        }
        if (null !== $this->totalScore) {
            $res['TotalScore'] = $this->totalScore;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->manualScoreInfoList) {
            $res['ManualScoreInfoList'] = null !== $this->manualScoreInfoList ? $this->manualScoreInfoList->toMap() : null;
        }
        if (null !== $this->fileMergeName) {
            $res['FileMergeName'] = $this->fileMergeName;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->dialogues) {
            $res['Dialogues'] = null !== $this->dialogues ? $this->dialogues->toMap() : null;
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
        if (isset($map['ReviewHistoryList'])) {
            $model->reviewHistoryList = reviewHistoryList::fromMap($map['ReviewHistoryList']);
        }
        if (isset($map['HitRuleReviewInfoList'])) {
            $model->hitRuleReviewInfoList = hitRuleReviewInfoList::fromMap($map['HitRuleReviewInfoList']);
        }
        if (isset($map['TotalScore'])) {
            $model->totalScore = $map['TotalScore'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['ManualScoreInfoList'])) {
            $model->manualScoreInfoList = manualScoreInfoList::fromMap($map['ManualScoreInfoList']);
        }
        if (isset($map['FileMergeName'])) {
            $model->fileMergeName = $map['FileMergeName'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['Dialogues'])) {
            $model->dialogues = dialogues::fromMap($map['Dialogues']);
        }
        if (isset($map['Vid'])) {
            $model->vid = $map['Vid'];
        }

        return $model;
    }
}

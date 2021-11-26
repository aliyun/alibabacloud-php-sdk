<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data\dialogues;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data\handScoreInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data\hitRuleReviewInfoList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ReviewSingleResultByIdResponseBody\data\manualScoreMappingList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $asrWordsCount;

    /**
     * @var bool
     */
    public $audio;

    /**
     * @var string
     */
    public $audioURL;

    /**
     * @var int
     */
    public $businessType;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var dialogues
     */
    public $dialogues;

    /**
     * @var string
     */
    public $fileMergeName;

    /**
     * @var handScoreInfoList
     */
    public $handScoreInfoList;

    /**
     * @var int
     */
    public $hitNumber;

    /**
     * @var hitRuleReviewInfoList
     */
    public $hitRuleReviewInfoList;

    /**
     * @var bool
     */
    public $isAudio;

    /**
     * @var bool
     */
    public $isDeleted;

    /**
     * @var manualScoreMappingList
     */
    public $manualScoreMappingList;

    /**
     * @var string
     */
    public $nextVid;

    /**
     * @var string
     */
    public $preVid;

    /**
     * @var int
     */
    public $reviewNumber;

    /**
     * @var int
     */
    public $totalScore;

    /**
     * @var int
     */
    public $vid;
    protected $_name = [
        'asrWordsCount'          => 'AsrWordsCount',
        'audio'                  => 'Audio',
        'audioURL'               => 'AudioURL',
        'businessType'           => 'BusinessType',
        'deleted'                => 'Deleted',
        'dialogues'              => 'Dialogues',
        'fileMergeName'          => 'FileMergeName',
        'handScoreInfoList'      => 'HandScoreInfoList',
        'hitNumber'              => 'HitNumber',
        'hitRuleReviewInfoList'  => 'HitRuleReviewInfoList',
        'isAudio'                => 'IsAudio',
        'isDeleted'              => 'IsDeleted',
        'manualScoreMappingList' => 'ManualScoreMappingList',
        'nextVid'                => 'NextVid',
        'preVid'                 => 'PreVid',
        'reviewNumber'           => 'ReviewNumber',
        'totalScore'             => 'TotalScore',
        'vid'                    => 'Vid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrWordsCount) {
            $res['AsrWordsCount'] = $this->asrWordsCount;
        }
        if (null !== $this->audio) {
            $res['Audio'] = $this->audio;
        }
        if (null !== $this->audioURL) {
            $res['AudioURL'] = $this->audioURL;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->dialogues) {
            $res['Dialogues'] = null !== $this->dialogues ? $this->dialogues->toMap() : null;
        }
        if (null !== $this->fileMergeName) {
            $res['FileMergeName'] = $this->fileMergeName;
        }
        if (null !== $this->handScoreInfoList) {
            $res['HandScoreInfoList'] = null !== $this->handScoreInfoList ? $this->handScoreInfoList->toMap() : null;
        }
        if (null !== $this->hitNumber) {
            $res['HitNumber'] = $this->hitNumber;
        }
        if (null !== $this->hitRuleReviewInfoList) {
            $res['HitRuleReviewInfoList'] = null !== $this->hitRuleReviewInfoList ? $this->hitRuleReviewInfoList->toMap() : null;
        }
        if (null !== $this->isAudio) {
            $res['IsAudio'] = $this->isAudio;
        }
        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }
        if (null !== $this->manualScoreMappingList) {
            $res['ManualScoreMappingList'] = null !== $this->manualScoreMappingList ? $this->manualScoreMappingList->toMap() : null;
        }
        if (null !== $this->nextVid) {
            $res['NextVid'] = $this->nextVid;
        }
        if (null !== $this->preVid) {
            $res['PreVid'] = $this->preVid;
        }
        if (null !== $this->reviewNumber) {
            $res['ReviewNumber'] = $this->reviewNumber;
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
        if (isset($map['AsrWordsCount'])) {
            $model->asrWordsCount = $map['AsrWordsCount'];
        }
        if (isset($map['Audio'])) {
            $model->audio = $map['Audio'];
        }
        if (isset($map['AudioURL'])) {
            $model->audioURL = $map['AudioURL'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['Dialogues'])) {
            $model->dialogues = dialogues::fromMap($map['Dialogues']);
        }
        if (isset($map['FileMergeName'])) {
            $model->fileMergeName = $map['FileMergeName'];
        }
        if (isset($map['HandScoreInfoList'])) {
            $model->handScoreInfoList = handScoreInfoList::fromMap($map['HandScoreInfoList']);
        }
        if (isset($map['HitNumber'])) {
            $model->hitNumber = $map['HitNumber'];
        }
        if (isset($map['HitRuleReviewInfoList'])) {
            $model->hitRuleReviewInfoList = hitRuleReviewInfoList::fromMap($map['HitRuleReviewInfoList']);
        }
        if (isset($map['IsAudio'])) {
            $model->isAudio = $map['IsAudio'];
        }
        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }
        if (isset($map['ManualScoreMappingList'])) {
            $model->manualScoreMappingList = manualScoreMappingList::fromMap($map['ManualScoreMappingList']);
        }
        if (isset($map['NextVid'])) {
            $model->nextVid = $map['NextVid'];
        }
        if (isset($map['PreVid'])) {
            $model->preVid = $map['PreVid'];
        }
        if (isset($map['ReviewNumber'])) {
            $model->reviewNumber = $map['ReviewNumber'];
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

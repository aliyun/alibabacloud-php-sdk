<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param\antModelInfo;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param\excludes;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param\operKeyWords;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param\pvalues;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param\references;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param\similarlySentences;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @var antModelInfo
     */
    public $antModelInfo;

    /**
     * @example true
     *
     * @var bool
     */
    public $average;

    /**
     * @example DIALOGUE
     *
     * @var string
     */
    public $beginType;

    /**
     * @example 1
     *
     * @var int
     */
    public $checkType;

    /**
     * @example gt
     *
     * @var string
     */
    public $compareOperator;

    /**
     * @example true
     *
     * @var bool
     */
    public $contextChatMatch;

    /**
     * @example 1000
     *
     * @var int
     */
    public $delayTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $differentRole;

    /**
     * @var excludes
     */
    public $excludes;

    /**
     * @example 3
     *
     * @var int
     */
    public $from;

    /**
     * @example true
     *
     * @var bool
     */
    public $fromEnd;

    /**
     * @example 1
     *
     * @var int
     */
    public $hitTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $inSentence;

    /**
     * @example 5000
     *
     * @var int
     */
    public $interval;

    /**
     * @example true
     *
     * @var bool
     */
    public $keywordExtension;

    /**
     * @example 3
     *
     * @var int
     */
    public $keywordMatchSize;

    /**
     * @example 8
     *
     * @var int
     */
    public $maxEmotionChangeValue;

    /**
     * @example 4
     *
     * @var int
     */
    public $minWordSize;

    /**
     * @var string
     */
    public $notRegex;

    /**
     * @var operKeyWords
     */
    public $operKeyWords;

    /**
     * @example xxx
     *
     * @var string
     */
    public $phrase;

    /**
     * @var pvalues
     */
    public $pvalues;

    /**
     * @var references
     */
    public $references;

    /**
     * @var string
     */
    public $regex;

    /**
     * @example 80
     *
     * @var int
     */
    public $score;

    /**
     * @example 90
     *
     * @var float
     */
    public $similarityThreshold;

    /**
     * @var similarlySentences
     */
    public $similarlySentences;

    /**
     * @example 1
     *
     * @var int
     */
    public $target;

    /**
     * @var string
     */
    public $targetRole;

    /**
     * @example 4
     *
     * @var float
     */
    public $threshold;

    /**
     * @example 280
     *
     * @var int
     */
    public $velocityInMint;
    protected $_name = [
        'antModelInfo'          => 'AntModelInfo',
        'average'               => 'Average',
        'beginType'             => 'BeginType',
        'checkType'             => 'CheckType',
        'compareOperator'       => 'CompareOperator',
        'contextChatMatch'      => 'ContextChatMatch',
        'delayTime'             => 'DelayTime',
        'differentRole'         => 'DifferentRole',
        'excludes'              => 'Excludes',
        'from'                  => 'From',
        'fromEnd'               => 'FromEnd',
        'hitTime'               => 'HitTime',
        'inSentence'            => 'InSentence',
        'interval'              => 'Interval',
        'keywordExtension'      => 'KeywordExtension',
        'keywordMatchSize'      => 'KeywordMatchSize',
        'maxEmotionChangeValue' => 'MaxEmotionChangeValue',
        'minWordSize'           => 'MinWordSize',
        'notRegex'              => 'NotRegex',
        'operKeyWords'          => 'OperKeyWords',
        'phrase'                => 'Phrase',
        'pvalues'               => 'Pvalues',
        'references'            => 'References',
        'regex'                 => 'Regex',
        'score'                 => 'Score',
        'similarityThreshold'   => 'Similarity_threshold',
        'similarlySentences'    => 'SimilarlySentences',
        'target'                => 'Target',
        'targetRole'            => 'TargetRole',
        'threshold'             => 'Threshold',
        'velocityInMint'        => 'VelocityInMint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antModelInfo) {
            $res['AntModelInfo'] = null !== $this->antModelInfo ? $this->antModelInfo->toMap() : null;
        }
        if (null !== $this->average) {
            $res['Average'] = $this->average;
        }
        if (null !== $this->beginType) {
            $res['BeginType'] = $this->beginType;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->compareOperator) {
            $res['CompareOperator'] = $this->compareOperator;
        }
        if (null !== $this->contextChatMatch) {
            $res['ContextChatMatch'] = $this->contextChatMatch;
        }
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }
        if (null !== $this->differentRole) {
            $res['DifferentRole'] = $this->differentRole;
        }
        if (null !== $this->excludes) {
            $res['Excludes'] = null !== $this->excludes ? $this->excludes->toMap() : null;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->fromEnd) {
            $res['FromEnd'] = $this->fromEnd;
        }
        if (null !== $this->hitTime) {
            $res['HitTime'] = $this->hitTime;
        }
        if (null !== $this->inSentence) {
            $res['InSentence'] = $this->inSentence;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->keywordExtension) {
            $res['KeywordExtension'] = $this->keywordExtension;
        }
        if (null !== $this->keywordMatchSize) {
            $res['KeywordMatchSize'] = $this->keywordMatchSize;
        }
        if (null !== $this->maxEmotionChangeValue) {
            $res['MaxEmotionChangeValue'] = $this->maxEmotionChangeValue;
        }
        if (null !== $this->minWordSize) {
            $res['MinWordSize'] = $this->minWordSize;
        }
        if (null !== $this->notRegex) {
            $res['NotRegex'] = $this->notRegex;
        }
        if (null !== $this->operKeyWords) {
            $res['OperKeyWords'] = null !== $this->operKeyWords ? $this->operKeyWords->toMap() : null;
        }
        if (null !== $this->phrase) {
            $res['Phrase'] = $this->phrase;
        }
        if (null !== $this->pvalues) {
            $res['Pvalues'] = null !== $this->pvalues ? $this->pvalues->toMap() : null;
        }
        if (null !== $this->references) {
            $res['References'] = null !== $this->references ? $this->references->toMap() : null;
        }
        if (null !== $this->regex) {
            $res['Regex'] = $this->regex;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->similarityThreshold) {
            $res['Similarity_threshold'] = $this->similarityThreshold;
        }
        if (null !== $this->similarlySentences) {
            $res['SimilarlySentences'] = null !== $this->similarlySentences ? $this->similarlySentences->toMap() : null;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetRole) {
            $res['TargetRole'] = $this->targetRole;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->velocityInMint) {
            $res['VelocityInMint'] = $this->velocityInMint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntModelInfo'])) {
            $model->antModelInfo = antModelInfo::fromMap($map['AntModelInfo']);
        }
        if (isset($map['Average'])) {
            $model->average = $map['Average'];
        }
        if (isset($map['BeginType'])) {
            $model->beginType = $map['BeginType'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['CompareOperator'])) {
            $model->compareOperator = $map['CompareOperator'];
        }
        if (isset($map['ContextChatMatch'])) {
            $model->contextChatMatch = $map['ContextChatMatch'];
        }
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }
        if (isset($map['DifferentRole'])) {
            $model->differentRole = $map['DifferentRole'];
        }
        if (isset($map['Excludes'])) {
            $model->excludes = excludes::fromMap($map['Excludes']);
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['FromEnd'])) {
            $model->fromEnd = $map['FromEnd'];
        }
        if (isset($map['HitTime'])) {
            $model->hitTime = $map['HitTime'];
        }
        if (isset($map['InSentence'])) {
            $model->inSentence = $map['InSentence'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['KeywordExtension'])) {
            $model->keywordExtension = $map['KeywordExtension'];
        }
        if (isset($map['KeywordMatchSize'])) {
            $model->keywordMatchSize = $map['KeywordMatchSize'];
        }
        if (isset($map['MaxEmotionChangeValue'])) {
            $model->maxEmotionChangeValue = $map['MaxEmotionChangeValue'];
        }
        if (isset($map['MinWordSize'])) {
            $model->minWordSize = $map['MinWordSize'];
        }
        if (isset($map['NotRegex'])) {
            $model->notRegex = $map['NotRegex'];
        }
        if (isset($map['OperKeyWords'])) {
            $model->operKeyWords = operKeyWords::fromMap($map['OperKeyWords']);
        }
        if (isset($map['Phrase'])) {
            $model->phrase = $map['Phrase'];
        }
        if (isset($map['Pvalues'])) {
            $model->pvalues = pvalues::fromMap($map['Pvalues']);
        }
        if (isset($map['References'])) {
            $model->references = references::fromMap($map['References']);
        }
        if (isset($map['Regex'])) {
            $model->regex = $map['Regex'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Similarity_threshold'])) {
            $model->similarityThreshold = $map['Similarity_threshold'];
        }
        if (isset($map['SimilarlySentences'])) {
            $model->similarlySentences = similarlySentences::fromMap($map['SimilarlySentences']);
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetRole'])) {
            $model->targetRole = $map['TargetRole'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['VelocityInMint'])) {
            $model->velocityInMint = $map['VelocityInMint'];
        }

        return $model;
    }
}

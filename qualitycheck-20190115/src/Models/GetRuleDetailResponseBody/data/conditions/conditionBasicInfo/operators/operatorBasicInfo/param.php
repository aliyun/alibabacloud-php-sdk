<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param\excludes;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param\operKeyWords;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param\references;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param\similarlySentences;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @var string
     */
    public $regex;

    /**
     * @var string
     */
    public $phrase;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var bool
     */
    public $inSentence;

    /**
     * @var int
     */
    public $target;

    /**
     * @var bool
     */
    public $fromEnd;

    /**
     * @var bool
     */
    public $differentRole;

    /**
     * @var string
     */
    public $targetRole;

    /**
     * @var int
     */
    public $score;

    /**
     * @var bool
     */
    public $contextChatMatch;

    /**
     * @var int
     */
    public $keywordMatchSize;

    /**
     * @var bool
     */
    public $average;

    /**
     * @var int
     */
    public $velocityInMint;

    /**
     * @var int
     */
    public $minWordSize;

    /**
     * @var bool
     */
    public $keywordExtension;

    /**
     * @var int
     */
    public $hitTime;

    /**
     * @var int
     */
    public $from;

    /**
     * @var string
     */
    public $beginType;

    /**
     * @var string
     */
    public $compareOperator;

    /**
     * @var int
     */
    public $checkType;

    /**
     * @var int
     */
    public $maxEmotionChangeValue;

    /**
     * @var operKeyWords
     */
    public $operKeyWords;

    /**
     * @var references
     */
    public $references;

    /**
     * @var similarlySentences
     */
    public $similarlySentences;

    /**
     * @var excludes
     */
    public $excludes;
    protected $_name = [
        'regex'                 => 'Regex',
        'phrase'                => 'Phrase',
        'interval'              => 'Interval',
        'threshold'             => 'Threshold',
        'inSentence'            => 'InSentence',
        'target'                => 'Target',
        'fromEnd'               => 'FromEnd',
        'differentRole'         => 'DifferentRole',
        'targetRole'            => 'TargetRole',
        'score'                 => 'Score',
        'contextChatMatch'      => 'ContextChatMatch',
        'keywordMatchSize'      => 'KeywordMatchSize',
        'average'               => 'Average',
        'velocityInMint'        => 'VelocityInMint',
        'minWordSize'           => 'MinWordSize',
        'keywordExtension'      => 'KeywordExtension',
        'hitTime'               => 'HitTime',
        'from'                  => 'From',
        'beginType'             => 'BeginType',
        'compareOperator'       => 'CompareOperator',
        'checkType'             => 'CheckType',
        'maxEmotionChangeValue' => 'MaxEmotionChangeValue',
        'operKeyWords'          => 'OperKeyWords',
        'references'            => 'References',
        'similarlySentences'    => 'SimilarlySentences',
        'excludes'              => 'Excludes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regex) {
            $res['Regex'] = $this->regex;
        }
        if (null !== $this->phrase) {
            $res['Phrase'] = $this->phrase;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->inSentence) {
            $res['InSentence'] = $this->inSentence;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->fromEnd) {
            $res['FromEnd'] = $this->fromEnd;
        }
        if (null !== $this->differentRole) {
            $res['DifferentRole'] = $this->differentRole;
        }
        if (null !== $this->targetRole) {
            $res['TargetRole'] = $this->targetRole;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->contextChatMatch) {
            $res['ContextChatMatch'] = $this->contextChatMatch;
        }
        if (null !== $this->keywordMatchSize) {
            $res['KeywordMatchSize'] = $this->keywordMatchSize;
        }
        if (null !== $this->average) {
            $res['Average'] = $this->average;
        }
        if (null !== $this->velocityInMint) {
            $res['VelocityInMint'] = $this->velocityInMint;
        }
        if (null !== $this->minWordSize) {
            $res['MinWordSize'] = $this->minWordSize;
        }
        if (null !== $this->keywordExtension) {
            $res['KeywordExtension'] = $this->keywordExtension;
        }
        if (null !== $this->hitTime) {
            $res['HitTime'] = $this->hitTime;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->beginType) {
            $res['BeginType'] = $this->beginType;
        }
        if (null !== $this->compareOperator) {
            $res['CompareOperator'] = $this->compareOperator;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->maxEmotionChangeValue) {
            $res['MaxEmotionChangeValue'] = $this->maxEmotionChangeValue;
        }
        if (null !== $this->operKeyWords) {
            $res['OperKeyWords'] = null !== $this->operKeyWords ? $this->operKeyWords->toMap() : null;
        }
        if (null !== $this->references) {
            $res['References'] = null !== $this->references ? $this->references->toMap() : null;
        }
        if (null !== $this->similarlySentences) {
            $res['SimilarlySentences'] = null !== $this->similarlySentences ? $this->similarlySentences->toMap() : null;
        }
        if (null !== $this->excludes) {
            $res['Excludes'] = null !== $this->excludes ? $this->excludes->toMap() : null;
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
        if (isset($map['Regex'])) {
            $model->regex = $map['Regex'];
        }
        if (isset($map['Phrase'])) {
            $model->phrase = $map['Phrase'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['InSentence'])) {
            $model->inSentence = $map['InSentence'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['FromEnd'])) {
            $model->fromEnd = $map['FromEnd'];
        }
        if (isset($map['DifferentRole'])) {
            $model->differentRole = $map['DifferentRole'];
        }
        if (isset($map['TargetRole'])) {
            $model->targetRole = $map['TargetRole'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ContextChatMatch'])) {
            $model->contextChatMatch = $map['ContextChatMatch'];
        }
        if (isset($map['KeywordMatchSize'])) {
            $model->keywordMatchSize = $map['KeywordMatchSize'];
        }
        if (isset($map['Average'])) {
            $model->average = $map['Average'];
        }
        if (isset($map['VelocityInMint'])) {
            $model->velocityInMint = $map['VelocityInMint'];
        }
        if (isset($map['MinWordSize'])) {
            $model->minWordSize = $map['MinWordSize'];
        }
        if (isset($map['KeywordExtension'])) {
            $model->keywordExtension = $map['KeywordExtension'];
        }
        if (isset($map['HitTime'])) {
            $model->hitTime = $map['HitTime'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['BeginType'])) {
            $model->beginType = $map['BeginType'];
        }
        if (isset($map['CompareOperator'])) {
            $model->compareOperator = $map['CompareOperator'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['MaxEmotionChangeValue'])) {
            $model->maxEmotionChangeValue = $map['MaxEmotionChangeValue'];
        }
        if (isset($map['OperKeyWords'])) {
            $model->operKeyWords = operKeyWords::fromMap($map['OperKeyWords']);
        }
        if (isset($map['References'])) {
            $model->references = references::fromMap($map['References']);
        }
        if (isset($map['SimilarlySentences'])) {
            $model->similarlySentences = similarlySentences::fromMap($map['SimilarlySentences']);
        }
        if (isset($map['Excludes'])) {
            $model->excludes = excludes::fromMap($map['Excludes']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param\excludes;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param\flowNodePrerequisiteParam;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param\intentModelCheckParm;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param\keywords;

class param extends Model
{
    /**
     * @var bool
     */
    public $average;

    /**
     * @var string
     */
    public $beginType;

    /**
     * @var bool
     */
    public $caseSensitive;

    /**
     * @var bool
     */
    public $checkFirstSentence;

    /**
     * @var int
     */
    public $checkType;

    /**
     * @var string
     */
    public $compareOperator;

    /**
     * @var bool
     */
    public $contextChatMatch;

    /**
     * @var int
     */
    public $delayTime;

    /**
     * @var string
     */
    public $endType;

    /**
     * @var excludes
     */
    public $excludes;

    /**
     * @var flowNodePrerequisiteParam
     */
    public $flowNodePrerequisiteParam;

    /**
     * @var int
     */
    public $from;

    /**
     * @var bool
     */
    public $fromEnd;

    /**
     * @var int
     */
    public $hitTime;

    /**
     * @var bool
     */
    public $inSentence;

    /**
     * @var intentModelCheckParm
     */
    public $intentModelCheckParm;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $intervalEnd;

    /**
     * @var int
     */
    public $keywordExtension;

    /**
     * @var int
     */
    public $keywordMatchSize;

    /**
     * @var keywords
     */
    public $keywords;

    /**
     * @var int
     */
    public $maxEmotionChangeValue;

    /**
     * @var int
     */
    public $minWordSize;

    /**
     * @var bool
     */
    public $nearDialogue;

    /**
     * @var string
     */
    public $notRegex;

    /**
     * @var string
     */
    public $phrase;

    /**
     * @var string
     */
    public $regex;

    /**
     * @var int
     */
    public $target;

    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'average' => 'Average',
        'beginType' => 'BeginType',
        'caseSensitive' => 'Case_sensitive',
        'checkFirstSentence' => 'CheckFirstSentence',
        'checkType' => 'CheckType',
        'compareOperator' => 'CompareOperator',
        'contextChatMatch' => 'ContextChatMatch',
        'delayTime' => 'DelayTime',
        'endType' => 'EndType',
        'excludes' => 'Excludes',
        'flowNodePrerequisiteParam' => 'FlowNodePrerequisiteParam',
        'from' => 'From',
        'fromEnd' => 'From_end',
        'hitTime' => 'Hit_time',
        'inSentence' => 'In_sentence',
        'intentModelCheckParm' => 'IntentModelCheckParm',
        'interval' => 'Interval',
        'intervalEnd' => 'IntervalEnd',
        'keywordExtension' => 'KeywordExtension',
        'keywordMatchSize' => 'KeywordMatchSize',
        'keywords' => 'Keywords',
        'maxEmotionChangeValue' => 'MaxEmotionChangeValue',
        'minWordSize' => 'MinWordSize',
        'nearDialogue' => 'Near_dialogue',
        'notRegex' => 'NotRegex',
        'phrase' => 'Phrase',
        'regex' => 'Regex',
        'target' => 'Target',
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
        if (null !== $this->excludes) {
            $this->excludes->validate();
        }
        if (null !== $this->flowNodePrerequisiteParam) {
            $this->flowNodePrerequisiteParam->validate();
        }
        if (null !== $this->intentModelCheckParm) {
            $this->intentModelCheckParm->validate();
        }
        if (null !== $this->keywords) {
            $this->keywords->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->average) {
            $res['Average'] = $this->average;
        }

        if (null !== $this->beginType) {
            $res['BeginType'] = $this->beginType;
        }

        if (null !== $this->caseSensitive) {
            $res['Case_sensitive'] = $this->caseSensitive;
        }

        if (null !== $this->checkFirstSentence) {
            $res['CheckFirstSentence'] = $this->checkFirstSentence;
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

        if (null !== $this->endType) {
            $res['EndType'] = $this->endType;
        }

        if (null !== $this->excludes) {
            $res['Excludes'] = null !== $this->excludes ? $this->excludes->toArray($noStream) : $this->excludes;
        }

        if (null !== $this->flowNodePrerequisiteParam) {
            $res['FlowNodePrerequisiteParam'] = null !== $this->flowNodePrerequisiteParam ? $this->flowNodePrerequisiteParam->toArray($noStream) : $this->flowNodePrerequisiteParam;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->fromEnd) {
            $res['From_end'] = $this->fromEnd;
        }

        if (null !== $this->hitTime) {
            $res['Hit_time'] = $this->hitTime;
        }

        if (null !== $this->inSentence) {
            $res['In_sentence'] = $this->inSentence;
        }

        if (null !== $this->intentModelCheckParm) {
            $res['IntentModelCheckParm'] = null !== $this->intentModelCheckParm ? $this->intentModelCheckParm->toArray($noStream) : $this->intentModelCheckParm;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->intervalEnd) {
            $res['IntervalEnd'] = $this->intervalEnd;
        }

        if (null !== $this->keywordExtension) {
            $res['KeywordExtension'] = $this->keywordExtension;
        }

        if (null !== $this->keywordMatchSize) {
            $res['KeywordMatchSize'] = $this->keywordMatchSize;
        }

        if (null !== $this->keywords) {
            $res['Keywords'] = null !== $this->keywords ? $this->keywords->toArray($noStream) : $this->keywords;
        }

        if (null !== $this->maxEmotionChangeValue) {
            $res['MaxEmotionChangeValue'] = $this->maxEmotionChangeValue;
        }

        if (null !== $this->minWordSize) {
            $res['MinWordSize'] = $this->minWordSize;
        }

        if (null !== $this->nearDialogue) {
            $res['Near_dialogue'] = $this->nearDialogue;
        }

        if (null !== $this->notRegex) {
            $res['NotRegex'] = $this->notRegex;
        }

        if (null !== $this->phrase) {
            $res['Phrase'] = $this->phrase;
        }

        if (null !== $this->regex) {
            $res['Regex'] = $this->regex;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
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
        if (isset($map['Average'])) {
            $model->average = $map['Average'];
        }

        if (isset($map['BeginType'])) {
            $model->beginType = $map['BeginType'];
        }

        if (isset($map['Case_sensitive'])) {
            $model->caseSensitive = $map['Case_sensitive'];
        }

        if (isset($map['CheckFirstSentence'])) {
            $model->checkFirstSentence = $map['CheckFirstSentence'];
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

        if (isset($map['EndType'])) {
            $model->endType = $map['EndType'];
        }

        if (isset($map['Excludes'])) {
            $model->excludes = excludes::fromMap($map['Excludes']);
        }

        if (isset($map['FlowNodePrerequisiteParam'])) {
            $model->flowNodePrerequisiteParam = flowNodePrerequisiteParam::fromMap($map['FlowNodePrerequisiteParam']);
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['From_end'])) {
            $model->fromEnd = $map['From_end'];
        }

        if (isset($map['Hit_time'])) {
            $model->hitTime = $map['Hit_time'];
        }

        if (isset($map['In_sentence'])) {
            $model->inSentence = $map['In_sentence'];
        }

        if (isset($map['IntentModelCheckParm'])) {
            $model->intentModelCheckParm = intentModelCheckParm::fromMap($map['IntentModelCheckParm']);
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['IntervalEnd'])) {
            $model->intervalEnd = $map['IntervalEnd'];
        }

        if (isset($map['KeywordExtension'])) {
            $model->keywordExtension = $map['KeywordExtension'];
        }

        if (isset($map['KeywordMatchSize'])) {
            $model->keywordMatchSize = $map['KeywordMatchSize'];
        }

        if (isset($map['Keywords'])) {
            $model->keywords = keywords::fromMap($map['Keywords']);
        }

        if (isset($map['MaxEmotionChangeValue'])) {
            $model->maxEmotionChangeValue = $map['MaxEmotionChangeValue'];
        }

        if (isset($map['MinWordSize'])) {
            $model->minWordSize = $map['MinWordSize'];
        }

        if (isset($map['Near_dialogue'])) {
            $model->nearDialogue = $map['Near_dialogue'];
        }

        if (isset($map['NotRegex'])) {
            $model->notRegex = $map['NotRegex'];
        }

        if (isset($map['Phrase'])) {
            $model->phrase = $map['Phrase'];
        }

        if (isset($map['Regex'])) {
            $model->regex = $map['Regex'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param\excludes;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param\flowNodePrerequisiteParam;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param\intentModelCheckParm;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param\keywords;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @description 语速检测，是否计算整个对话平均语速，默认false
     *
     * @var bool
     */
    public $average;

    /**
     * @description 时长算子，时长计算开始类型，录音开始，还是某句对话开始
     *
     * @var string
     */
    public $beginType;

    /**
     * @description 区分大小写
     *
     * @var bool
     */
    public $caseSensitive;

    /**
     * @description 静音检测：要不要检测第一句话
     *
     * @var bool
     */
    public $checkFirstSentence;

    /**
     * @description 检测方式，1 相邻句能量波动 2 最大能量跨度 默认1
     *
     * @var int
     */
    public $checkType;

    /**
     * @description 大于，还是小于，gt/lt
     *
     * @var string
     */
    public $compareOperator;

    /**
     * @description 是否单句话匹配；
     *
     * @var bool
     */
    public $contextChatMatch;

    /**
     * @description 抢话算子 延时时长
     *
     * @var int
     */
    public $delayTime;

    /**
     * @description 时长算子，时长计算结束类型，录音结束，还是某句对话结束
     *
     * @var string
     */
    public $endType;

    /**
     * @description 上下文重复算子：排除掉某些对话
     *
     * @var excludes
     */
    public $excludes;

    /**
     * @description 流程节点前置条件参数
     *
     * @var flowNodePrerequisiteParam
     */
    public $flowNodePrerequisiteParam;

    /**
     * @description 上下文重复算子：检测当前句的前from句是否有重复；0表示前面的所有句
     *
     * @var int
     */
    public $from;

    /**
     * @description from_end
     *
     * @var bool
     */
    public $fromEnd;

    /**
     * @description 上下文重复算子：重复几次
     *
     * @var int
     */
    public $hitTime;

    /**
     * @description 生效句子， true单个句子，false多个句子
     *
     * @var bool
     */
    public $inSentence;

    /**
     * @description 意图模型检查参数
     *
     * @var intentModelCheckParm
     */
    public $intentModelCheckParm;

    /**
     * @description interval代表区间范围开始
     *
     * @var int
     */
    public $interval;

    /**
     * @description intervalEnd 代表区间范围结束
     *
     * @var int
     */
    public $intervalEnd;

    /**
     * @description 关键字扩展
     *
     * @var int
     */
    public $keywordExtension;

    /**
     * @description 匹配到的关键字数量
     *
     * @var int
     */
    public $keywordMatchSize;

    /**
     * @description 关键词
     *
     * @var keywords
     */
    public $keywords;

    /**
     * @description 能量值变化，默认3, 1~9
     *
     * @var int
     */
    public $maxEmotionChangeValue;

    /**
     * @description 句子中最少字数，小于此字数的句子不检查
     *
     * @var int
     */
    public $minWordSize;

    /**
     * @description true表示取不同角色相邻的两句话，false表示取不同角色的第一句话比较响应时间（默认）
     *
     * @var bool
     */
    public $nearDialogue;

    /**
     * @description 排除的正则表达式
     *
     * @var string
     */
    public $notRegex;

    /**
     * @description 语句
     *
     * @var string
     */
    public $phrase;

    /**
     * @description 正则表达式
     *
     * @var string
     */
    public $regex;

    /**
     * @description target
     *
     * @var int
     */
    public $target;

    /**
     * @description 阈值
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'average'                   => 'Average',
        'beginType'                 => 'BeginType',
        'caseSensitive'             => 'Case_sensitive',
        'checkFirstSentence'        => 'CheckFirstSentence',
        'checkType'                 => 'CheckType',
        'compareOperator'           => 'CompareOperator',
        'contextChatMatch'          => 'ContextChatMatch',
        'delayTime'                 => 'DelayTime',
        'endType'                   => 'EndType',
        'excludes'                  => 'Excludes',
        'flowNodePrerequisiteParam' => 'FlowNodePrerequisiteParam',
        'from'                      => 'From',
        'fromEnd'                   => 'From_end',
        'hitTime'                   => 'Hit_time',
        'inSentence'                => 'In_sentence',
        'intentModelCheckParm'      => 'IntentModelCheckParm',
        'interval'                  => 'Interval',
        'intervalEnd'               => 'IntervalEnd',
        'keywordExtension'          => 'KeywordExtension',
        'keywordMatchSize'          => 'KeywordMatchSize',
        'keywords'                  => 'Keywords',
        'maxEmotionChangeValue'     => 'MaxEmotionChangeValue',
        'minWordSize'               => 'MinWordSize',
        'nearDialogue'              => 'Near_dialogue',
        'notRegex'                  => 'NotRegex',
        'phrase'                    => 'Phrase',
        'regex'                     => 'Regex',
        'target'                    => 'Target',
        'threshold'                 => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Excludes'] = null !== $this->excludes ? $this->excludes->toMap() : null;
        }
        if (null !== $this->flowNodePrerequisiteParam) {
            $res['FlowNodePrerequisiteParam'] = null !== $this->flowNodePrerequisiteParam ? $this->flowNodePrerequisiteParam->toMap() : null;
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
            $res['IntentModelCheckParm'] = null !== $this->intentModelCheckParm ? $this->intentModelCheckParm->toMap() : null;
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
            $res['Keywords'] = null !== $this->keywords ? $this->keywords->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return param
     */
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

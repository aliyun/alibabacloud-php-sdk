<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\OperatorBasicInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\JudgeNodeMetaDesc;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @var string
     */
    public $answerThreshold;

    /**
     * @var string[]
     */
    public $antModelInfo;

    /**
     * @var bool
     */
    public $average;

    /**
     * @var string
     */
    public $beginType;

    /**
     * @var string
     */
    public $botId;

    /**
     * @var bool
     */
    public $caseSensitive;

    /**
     * @var string
     */
    public $categoryPathCode;

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
     * @var JudgeNodeMetaDesc
     */
    public $customerParam;

    /**
     * @var int
     */
    public $delayTime;

    /**
     * @var bool
     */
    public $differentRole;

    /**
     * @var string
     */
    public $endType;

    /**
     * @var string[]
     */
    public $excludes;

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
     * @var string[]
     */
    public $keywords;

    /**
     * @var string
     */
    public $knowledgeInfo;

    /**
     * @var int
     */
    public $knowledgeSentenceNum;

    /**
     * @var string
     */
    public $knowledgeTargetId;

    /**
     * @var string
     */
    public $knowledgeTargetName;

    /**
     * @var int
     */
    public $knowledgeTargetType;

    /**
     * @var string[]
     */
    public $lgfSentences;

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
    public $pkey;

    /**
     * @var int
     */
    public $poutputType;

    /**
     * @var string[]
     */
    public $pvalues;

    /**
     * @var string
     */
    public $questionThreshold;

    /**
     * @var string[]
     */
    public $references;

    /**
     * @var string
     */
    public $regex;

    /**
     * @var int
     */
    public $roleId;

    /**
     * @var int
     */
    public $score;

    /**
     * @var float
     */
    public $similarityThreshold;

    /**
     * @var string[]
     */
    public $similarlySentences;

    /**
     * @var string[][]
     */
    public $synonyms;

    /**
     * @var int
     */
    public $target;

    /**
     * @var string
     */
    public $targetRole;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var bool
     */
    public $useEasAlgorithm;

    /**
     * @var float
     */
    public $velocity;

    /**
     * @var int
     */
    public $velocityInMint;
    protected $_name = [
        'answerThreshold'       => 'AnswerThreshold',
        'antModelInfo'          => 'AntModelInfo',
        'average'               => 'Average',
        'beginType'             => 'BeginType',
        'botId'                 => 'BotId',
        'caseSensitive'         => 'Case_sensitive',
        'categoryPathCode'      => 'CategoryPathCode',
        'checkFirstSentence'    => 'CheckFirstSentence',
        'checkType'             => 'CheckType',
        'compareOperator'       => 'CompareOperator',
        'contextChatMatch'      => 'ContextChatMatch',
        'customerParam'         => 'CustomerParam',
        'delayTime'             => 'DelayTime',
        'differentRole'         => 'Different_role',
        'endType'               => 'EndType',
        'excludes'              => 'Excludes',
        'from'                  => 'From',
        'fromEnd'               => 'From_end',
        'hitTime'               => 'Hit_time',
        'inSentence'            => 'In_sentence',
        'interval'              => 'Interval',
        'intervalEnd'           => 'IntervalEnd',
        'keywordExtension'      => 'KeywordExtension',
        'keywordMatchSize'      => 'KeywordMatchSize',
        'keywords'              => 'Keywords',
        'knowledgeInfo'         => 'KnowledgeInfo',
        'knowledgeSentenceNum'  => 'KnowledgeSentenceNum',
        'knowledgeTargetId'     => 'KnowledgeTargetId',
        'knowledgeTargetName'   => 'KnowledgeTargetName',
        'knowledgeTargetType'   => 'KnowledgeTargetType',
        'lgfSentences'          => 'LgfSentences',
        'maxEmotionChangeValue' => 'MaxEmotionChangeValue',
        'minWordSize'           => 'MinWordSize',
        'nearDialogue'          => 'Near_dialogue',
        'notRegex'              => 'NotRegex',
        'phrase'                => 'Phrase',
        'pkey'                  => 'Pkey',
        'poutputType'           => 'Poutput_type',
        'pvalues'               => 'Pvalues',
        'questionThreshold'     => 'QuestionThreshold',
        'references'            => 'References',
        'regex'                 => 'Regex',
        'roleId'                => 'RoleId',
        'score'                 => 'Score',
        'similarityThreshold'   => 'Similarity_threshold',
        'similarlySentences'    => 'SimilarlySentences',
        'synonyms'              => 'Synonyms',
        'target'                => 'Target',
        'targetRole'            => 'Target_role',
        'threshold'             => 'Threshold',
        'useEasAlgorithm'       => 'UseEasAlgorithm',
        'velocity'              => 'Velocity',
        'velocityInMint'        => 'VelocityInMint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerThreshold) {
            $res['AnswerThreshold'] = $this->answerThreshold;
        }
        if (null !== $this->antModelInfo) {
            $res['AntModelInfo'] = $this->antModelInfo;
        }
        if (null !== $this->average) {
            $res['Average'] = $this->average;
        }
        if (null !== $this->beginType) {
            $res['BeginType'] = $this->beginType;
        }
        if (null !== $this->botId) {
            $res['BotId'] = $this->botId;
        }
        if (null !== $this->caseSensitive) {
            $res['Case_sensitive'] = $this->caseSensitive;
        }
        if (null !== $this->categoryPathCode) {
            $res['CategoryPathCode'] = $this->categoryPathCode;
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
        if (null !== $this->customerParam) {
            $res['CustomerParam'] = null !== $this->customerParam ? $this->customerParam->toMap() : null;
        }
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }
        if (null !== $this->differentRole) {
            $res['Different_role'] = $this->differentRole;
        }
        if (null !== $this->endType) {
            $res['EndType'] = $this->endType;
        }
        if (null !== $this->excludes) {
            $res['Excludes'] = $this->excludes;
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
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->knowledgeInfo) {
            $res['KnowledgeInfo'] = $this->knowledgeInfo;
        }
        if (null !== $this->knowledgeSentenceNum) {
            $res['KnowledgeSentenceNum'] = $this->knowledgeSentenceNum;
        }
        if (null !== $this->knowledgeTargetId) {
            $res['KnowledgeTargetId'] = $this->knowledgeTargetId;
        }
        if (null !== $this->knowledgeTargetName) {
            $res['KnowledgeTargetName'] = $this->knowledgeTargetName;
        }
        if (null !== $this->knowledgeTargetType) {
            $res['KnowledgeTargetType'] = $this->knowledgeTargetType;
        }
        if (null !== $this->lgfSentences) {
            $res['LgfSentences'] = $this->lgfSentences;
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
        if (null !== $this->pkey) {
            $res['Pkey'] = $this->pkey;
        }
        if (null !== $this->poutputType) {
            $res['Poutput_type'] = $this->poutputType;
        }
        if (null !== $this->pvalues) {
            $res['Pvalues'] = $this->pvalues;
        }
        if (null !== $this->questionThreshold) {
            $res['QuestionThreshold'] = $this->questionThreshold;
        }
        if (null !== $this->references) {
            $res['References'] = $this->references;
        }
        if (null !== $this->regex) {
            $res['Regex'] = $this->regex;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->similarityThreshold) {
            $res['Similarity_threshold'] = $this->similarityThreshold;
        }
        if (null !== $this->similarlySentences) {
            $res['SimilarlySentences'] = $this->similarlySentences;
        }
        if (null !== $this->synonyms) {
            $res['Synonyms'] = $this->synonyms;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetRole) {
            $res['Target_role'] = $this->targetRole;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->useEasAlgorithm) {
            $res['UseEasAlgorithm'] = $this->useEasAlgorithm;
        }
        if (null !== $this->velocity) {
            $res['Velocity'] = $this->velocity;
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
        if (isset($map['AnswerThreshold'])) {
            $model->answerThreshold = $map['AnswerThreshold'];
        }
        if (isset($map['AntModelInfo'])) {
            $model->antModelInfo = $map['AntModelInfo'];
        }
        if (isset($map['Average'])) {
            $model->average = $map['Average'];
        }
        if (isset($map['BeginType'])) {
            $model->beginType = $map['BeginType'];
        }
        if (isset($map['BotId'])) {
            $model->botId = $map['BotId'];
        }
        if (isset($map['Case_sensitive'])) {
            $model->caseSensitive = $map['Case_sensitive'];
        }
        if (isset($map['CategoryPathCode'])) {
            $model->categoryPathCode = $map['CategoryPathCode'];
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
        if (isset($map['CustomerParam'])) {
            $model->customerParam = JudgeNodeMetaDesc::fromMap($map['CustomerParam']);
        }
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }
        if (isset($map['Different_role'])) {
            $model->differentRole = $map['Different_role'];
        }
        if (isset($map['EndType'])) {
            $model->endType = $map['EndType'];
        }
        if (isset($map['Excludes'])) {
            if (!empty($map['Excludes'])) {
                $model->excludes = $map['Excludes'];
            }
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
            if (!empty($map['Keywords'])) {
                $model->keywords = $map['Keywords'];
            }
        }
        if (isset($map['KnowledgeInfo'])) {
            $model->knowledgeInfo = $map['KnowledgeInfo'];
        }
        if (isset($map['KnowledgeSentenceNum'])) {
            $model->knowledgeSentenceNum = $map['KnowledgeSentenceNum'];
        }
        if (isset($map['KnowledgeTargetId'])) {
            $model->knowledgeTargetId = $map['KnowledgeTargetId'];
        }
        if (isset($map['KnowledgeTargetName'])) {
            $model->knowledgeTargetName = $map['KnowledgeTargetName'];
        }
        if (isset($map['KnowledgeTargetType'])) {
            $model->knowledgeTargetType = $map['KnowledgeTargetType'];
        }
        if (isset($map['LgfSentences'])) {
            if (!empty($map['LgfSentences'])) {
                $model->lgfSentences = $map['LgfSentences'];
            }
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
        if (isset($map['Pkey'])) {
            $model->pkey = $map['Pkey'];
        }
        if (isset($map['Poutput_type'])) {
            $model->poutputType = $map['Poutput_type'];
        }
        if (isset($map['Pvalues'])) {
            if (!empty($map['Pvalues'])) {
                $model->pvalues = $map['Pvalues'];
            }
        }
        if (isset($map['QuestionThreshold'])) {
            $model->questionThreshold = $map['QuestionThreshold'];
        }
        if (isset($map['References'])) {
            if (!empty($map['References'])) {
                $model->references = $map['References'];
            }
        }
        if (isset($map['Regex'])) {
            $model->regex = $map['Regex'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Similarity_threshold'])) {
            $model->similarityThreshold = $map['Similarity_threshold'];
        }
        if (isset($map['SimilarlySentences'])) {
            if (!empty($map['SimilarlySentences'])) {
                $model->similarlySentences = $map['SimilarlySentences'];
            }
        }
        if (isset($map['Synonyms'])) {
            $model->synonyms = $map['Synonyms'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Target_role'])) {
            $model->targetRole = $map['Target_role'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['UseEasAlgorithm'])) {
            $model->useEasAlgorithm = $map['UseEasAlgorithm'];
        }
        if (isset($map['Velocity'])) {
            $model->velocity = $map['Velocity'];
        }
        if (isset($map['VelocityInMint'])) {
            $model->velocityInMint = $map['VelocityInMint'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeStatisticalDataResponseBody;

use AlibabaCloud\Tea\Model;

class statisticalDataReports extends Model
{
    /**
     * @var string
     */
    public $knowledgeHitRate;

    /**
     * @var int
     */
    public $resolvedQuestionNum;

    /**
     * @var string
     */
    public $resolutionRate;

    /**
     * @var string
     */
    public $statisticalDate;

    /**
     * @var int
     */
    public $totalConversationNum;

    /**
     * @var string
     */
    public $validAnswerRate;

    /**
     * @var string
     */
    public $dialoguePassRate;
    protected $_name = [
        'knowledgeHitRate'     => 'KnowledgeHitRate',
        'resolvedQuestionNum'  => 'ResolvedQuestionNum',
        'resolutionRate'       => 'ResolutionRate',
        'statisticalDate'      => 'StatisticalDate',
        'totalConversationNum' => 'TotalConversationNum',
        'validAnswerRate'      => 'ValidAnswerRate',
        'dialoguePassRate'     => 'DialoguePassRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->knowledgeHitRate) {
            $res['KnowledgeHitRate'] = $this->knowledgeHitRate;
        }
        if (null !== $this->resolvedQuestionNum) {
            $res['ResolvedQuestionNum'] = $this->resolvedQuestionNum;
        }
        if (null !== $this->resolutionRate) {
            $res['ResolutionRate'] = $this->resolutionRate;
        }
        if (null !== $this->statisticalDate) {
            $res['StatisticalDate'] = $this->statisticalDate;
        }
        if (null !== $this->totalConversationNum) {
            $res['TotalConversationNum'] = $this->totalConversationNum;
        }
        if (null !== $this->validAnswerRate) {
            $res['ValidAnswerRate'] = $this->validAnswerRate;
        }
        if (null !== $this->dialoguePassRate) {
            $res['DialoguePassRate'] = $this->dialoguePassRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statisticalDataReports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KnowledgeHitRate'])) {
            $model->knowledgeHitRate = $map['KnowledgeHitRate'];
        }
        if (isset($map['ResolvedQuestionNum'])) {
            $model->resolvedQuestionNum = $map['ResolvedQuestionNum'];
        }
        if (isset($map['ResolutionRate'])) {
            $model->resolutionRate = $map['ResolutionRate'];
        }
        if (isset($map['StatisticalDate'])) {
            $model->statisticalDate = $map['StatisticalDate'];
        }
        if (isset($map['TotalConversationNum'])) {
            $model->totalConversationNum = $map['TotalConversationNum'];
        }
        if (isset($map['ValidAnswerRate'])) {
            $model->validAnswerRate = $map['ValidAnswerRate'];
        }
        if (isset($map['DialoguePassRate'])) {
            $model->dialoguePassRate = $map['DialoguePassRate'];
        }

        return $model;
    }
}

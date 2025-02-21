<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeStatisticalDataResponseBody\statisticalDataReports;

class DescribeStatisticalDataResponseBody extends Model
{
    /**
     * @var int
     */
    public $conversationTotalNum;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $resolvedQuestionTotalNum;
    /**
     * @var statisticalDataReports[]
     */
    public $statisticalDataReports;
    /**
     * @var string
     */
    public $totalDialoguePassRate;
    /**
     * @var string
     */
    public $totalKnowledgeHitRate;
    /**
     * @var string
     */
    public $totalResolutionRate;
    /**
     * @var string
     */
    public $totalValidAnswerRate;
    protected $_name = [
        'conversationTotalNum'     => 'ConversationTotalNum',
        'requestId'                => 'RequestId',
        'resolvedQuestionTotalNum' => 'ResolvedQuestionTotalNum',
        'statisticalDataReports'   => 'StatisticalDataReports',
        'totalDialoguePassRate'    => 'TotalDialoguePassRate',
        'totalKnowledgeHitRate'    => 'TotalKnowledgeHitRate',
        'totalResolutionRate'      => 'TotalResolutionRate',
        'totalValidAnswerRate'     => 'TotalValidAnswerRate',
    ];

    public function validate()
    {
        if (\is_array($this->statisticalDataReports)) {
            Model::validateArray($this->statisticalDataReports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conversationTotalNum) {
            $res['ConversationTotalNum'] = $this->conversationTotalNum;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resolvedQuestionTotalNum) {
            $res['ResolvedQuestionTotalNum'] = $this->resolvedQuestionTotalNum;
        }

        if (null !== $this->statisticalDataReports) {
            if (\is_array($this->statisticalDataReports)) {
                $res['StatisticalDataReports'] = [];
                $n1                            = 0;
                foreach ($this->statisticalDataReports as $item1) {
                    $res['StatisticalDataReports'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalDialoguePassRate) {
            $res['TotalDialoguePassRate'] = $this->totalDialoguePassRate;
        }

        if (null !== $this->totalKnowledgeHitRate) {
            $res['TotalKnowledgeHitRate'] = $this->totalKnowledgeHitRate;
        }

        if (null !== $this->totalResolutionRate) {
            $res['TotalResolutionRate'] = $this->totalResolutionRate;
        }

        if (null !== $this->totalValidAnswerRate) {
            $res['TotalValidAnswerRate'] = $this->totalValidAnswerRate;
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
        if (isset($map['ConversationTotalNum'])) {
            $model->conversationTotalNum = $map['ConversationTotalNum'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResolvedQuestionTotalNum'])) {
            $model->resolvedQuestionTotalNum = $map['ResolvedQuestionTotalNum'];
        }

        if (isset($map['StatisticalDataReports'])) {
            if (!empty($map['StatisticalDataReports'])) {
                $model->statisticalDataReports = [];
                $n1                            = 0;
                foreach ($map['StatisticalDataReports'] as $item1) {
                    $model->statisticalDataReports[$n1++] = statisticalDataReports::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalDialoguePassRate'])) {
            $model->totalDialoguePassRate = $map['TotalDialoguePassRate'];
        }

        if (isset($map['TotalKnowledgeHitRate'])) {
            $model->totalKnowledgeHitRate = $map['TotalKnowledgeHitRate'];
        }

        if (isset($map['TotalResolutionRate'])) {
            $model->totalResolutionRate = $map['TotalResolutionRate'];
        }

        if (isset($map['TotalValidAnswerRate'])) {
            $model->totalValidAnswerRate = $map['TotalValidAnswerRate'];
        }

        return $model;
    }
}

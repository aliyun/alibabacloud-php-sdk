<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentSyncDetectResponseBody\traceInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentSyncDetectResponseBody\traceInfo\denyTopics\topicInfoList;

class denyTopics extends Model
{
    /**
     * @var float
     */
    public $confidenceScore;

    /**
     * @var int
     */
    public $riskResult;

    /**
     * @var topicInfoList[]
     */
    public $topicInfoList;
    protected $_name = [
        'confidenceScore' => 'ConfidenceScore',
        'riskResult' => 'RiskResult',
        'topicInfoList' => 'TopicInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->topicInfoList)) {
            Model::validateArray($this->topicInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confidenceScore) {
            $res['ConfidenceScore'] = $this->confidenceScore;
        }

        if (null !== $this->riskResult) {
            $res['RiskResult'] = $this->riskResult;
        }

        if (null !== $this->topicInfoList) {
            if (\is_array($this->topicInfoList)) {
                $res['TopicInfoList'] = [];
                $n1 = 0;
                foreach ($this->topicInfoList as $item1) {
                    $res['TopicInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ConfidenceScore'])) {
            $model->confidenceScore = $map['ConfidenceScore'];
        }

        if (isset($map['RiskResult'])) {
            $model->riskResult = $map['RiskResult'];
        }

        if (isset($map['TopicInfoList'])) {
            if (!empty($map['TopicInfoList'])) {
                $model->topicInfoList = [];
                $n1 = 0;
                foreach ($map['TopicInfoList'] as $item1) {
                    $model->topicInfoList[$n1] = topicInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

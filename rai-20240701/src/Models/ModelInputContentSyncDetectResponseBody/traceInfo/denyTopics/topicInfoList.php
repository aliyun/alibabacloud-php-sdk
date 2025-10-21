<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ModelInputContentSyncDetectResponseBody\traceInfo\denyTopics;

use AlibabaCloud\Dara\Model;

class topicInfoList extends Model
{
    /**
     * @var int
     */
    public $categoryType;

    /**
     * @var int
     */
    public $riskResult;

    /**
     * @var int
     */
    public $securityLevel;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'categoryType' => 'CategoryType',
        'riskResult' => 'RiskResult',
        'securityLevel' => 'SecurityLevel',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }

        if (null !== $this->riskResult) {
            $res['RiskResult'] = $this->riskResult;
        }

        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
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
        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }

        if (isset($map['RiskResult'])) {
            $model->riskResult = $map['RiskResult'];
        }

        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}

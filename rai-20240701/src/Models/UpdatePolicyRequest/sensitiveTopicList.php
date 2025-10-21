<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\UpdatePolicyRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\UpdatePolicyRequest\sensitiveTopicList\topicExampleInfoList;

class sensitiveTopicList extends Model
{
    /**
     * @var int
     */
    public $categoryType;

    /**
     * @var int
     */
    public $securityLevel;

    /**
     * @var string
     */
    public $topicDefinition;

    /**
     * @var topicExampleInfoList[]
     */
    public $topicExampleInfoList;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'categoryType' => 'CategoryType',
        'securityLevel' => 'SecurityLevel',
        'topicDefinition' => 'TopicDefinition',
        'topicExampleInfoList' => 'TopicExampleInfoList',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
        if (\is_array($this->topicExampleInfoList)) {
            Model::validateArray($this->topicExampleInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }

        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }

        if (null !== $this->topicDefinition) {
            $res['TopicDefinition'] = $this->topicDefinition;
        }

        if (null !== $this->topicExampleInfoList) {
            if (\is_array($this->topicExampleInfoList)) {
                $res['TopicExampleInfoList'] = [];
                $n1 = 0;
                foreach ($this->topicExampleInfoList as $item1) {
                    $res['TopicExampleInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }

        if (isset($map['TopicDefinition'])) {
            $model->topicDefinition = $map['TopicDefinition'];
        }

        if (isset($map['TopicExampleInfoList'])) {
            if (!empty($map['TopicExampleInfoList'])) {
                $model->topicExampleInfoList = [];
                $n1 = 0;
                foreach ($map['TopicExampleInfoList'] as $item1) {
                    $model->topicExampleInfoList[$n1] = topicExampleInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}

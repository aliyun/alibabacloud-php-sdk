<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ListTopicResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\ListTopicResponseBody\topicInfoList\policyInfoList;

class topicInfoList extends Model
{
    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var policyInfoList[]
     */
    public $policyInfoList;

    /**
     * @var string
     */
    public $topicDefinition;

    /**
     * @var int
     */
    public $topicId;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'gmtModified' => 'GmtModified',
        'policyInfoList' => 'PolicyInfoList',
        'topicDefinition' => 'TopicDefinition',
        'topicId' => 'TopicId',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
        if (\is_array($this->policyInfoList)) {
            Model::validateArray($this->policyInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->policyInfoList) {
            if (\is_array($this->policyInfoList)) {
                $res['PolicyInfoList'] = [];
                $n1 = 0;
                foreach ($this->policyInfoList as $item1) {
                    $res['PolicyInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topicDefinition) {
            $res['TopicDefinition'] = $this->topicDefinition;
        }

        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
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
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['PolicyInfoList'])) {
            if (!empty($map['PolicyInfoList'])) {
                $model->policyInfoList = [];
                $n1 = 0;
                foreach ($map['PolicyInfoList'] as $item1) {
                    $model->policyInfoList[$n1] = policyInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TopicDefinition'])) {
            $model->topicDefinition = $map['TopicDefinition'];
        }

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}

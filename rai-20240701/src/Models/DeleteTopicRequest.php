<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;

class DeleteTopicRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int[]
     */
    public $topicIdList;
    protected $_name = [
        'regionId' => 'RegionId',
        'topicIdList' => 'TopicIdList',
    ];

    public function validate()
    {
        if (\is_array($this->topicIdList)) {
            Model::validateArray($this->topicIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->topicIdList) {
            if (\is_array($this->topicIdList)) {
                $res['TopicIdList'] = [];
                $n1 = 0;
                foreach ($this->topicIdList as $item1) {
                    $res['TopicIdList'][$n1] = $item1;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TopicIdList'])) {
            if (!empty($map['TopicIdList'])) {
                $model->topicIdList = [];
                $n1 = 0;
                foreach ($map['TopicIdList'] as $item1) {
                    $model->topicIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

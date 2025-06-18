<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source;

use AlibabaCloud\Dara\Model;

class sourceRocketMQCheckpointParameters extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $topics;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'regionId' => 'RegionId',
        'topics' => 'Topics',
    ];

    public function validate()
    {
        if (\is_array($this->topics)) {
            Model::validateArray($this->topics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->topics) {
            if (\is_array($this->topics)) {
                $res['Topics'] = [];
                $n1 = 0;
                foreach ($this->topics as $item1) {
                    $res['Topics'][$n1] = $item1;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = [];
                $n1 = 0;
                foreach ($map['Topics'] as $item1) {
                    $model->topics[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

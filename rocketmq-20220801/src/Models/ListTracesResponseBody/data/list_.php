<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTracesResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $bornTime;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $messageId;
    /**
     * @var string[]
     */
    public $messageKeys;
    /**
     * @var string
     */
    public $messageTag;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'bornTime'    => 'bornTime',
        'instanceId'  => 'instanceId',
        'messageId'   => 'messageId',
        'messageKeys' => 'messageKeys',
        'messageTag'  => 'messageTag',
        'regionId'    => 'regionId',
        'topicName'   => 'topicName',
    ];

    public function validate()
    {
        if (\is_array($this->messageKeys)) {
            Model::validateArray($this->messageKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bornTime) {
            $res['bornTime'] = $this->bornTime;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->messageKeys) {
            if (\is_array($this->messageKeys)) {
                $res['messageKeys'] = [];
                $n1                 = 0;
                foreach ($this->messageKeys as $item1) {
                    $res['messageKeys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->messageTag) {
            $res['messageTag'] = $this->messageTag;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
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
        if (isset($map['bornTime'])) {
            $model->bornTime = $map['bornTime'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['messageKeys'])) {
            if (!empty($map['messageKeys'])) {
                $model->messageKeys = [];
                $n1                 = 0;
                foreach ($map['messageKeys'] as $item1) {
                    $model->messageKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['messageTag'])) {
            $model->messageTag = $map['messageTag'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        return $model;
    }
}

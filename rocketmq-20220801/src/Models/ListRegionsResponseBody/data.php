<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListRegionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListRegionsResponseBody\data\tags;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var bool
     */
    public $supportRocketmqV4;

    /**
     * @var bool
     */
    public $supportRocketmqV5;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'createTime',
        'regionId' => 'regionId',
        'regionName' => 'regionName',
        'supportRocketmqV4' => 'supportRocketmqV4',
        'supportRocketmqV5' => 'supportRocketmqV5',
        'tags' => 'tags',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->regionName) {
            $res['regionName'] = $this->regionName;
        }

        if (null !== $this->supportRocketmqV4) {
            $res['supportRocketmqV4'] = $this->supportRocketmqV4;
        }

        if (null !== $this->supportRocketmqV5) {
            $res['supportRocketmqV5'] = $this->supportRocketmqV5;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['regionName'])) {
            $model->regionName = $map['regionName'];
        }

        if (isset($map['supportRocketmqV4'])) {
            $model->supportRocketmqV4 = $map['supportRocketmqV4'];
        }

        if (isset($map['supportRocketmqV5'])) {
            $model->supportRocketmqV5 = $map['supportRocketmqV5'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}

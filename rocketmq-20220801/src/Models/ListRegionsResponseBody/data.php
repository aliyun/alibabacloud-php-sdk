<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListRegionsResponseBody;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListRegionsResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the ApsaraMQ for RocketMQ instance was created.
     *
     * @example 2022-08-01 20:05:50
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The region name.
     *
     * @example hangzhou
     *
     * @var string
     */
    public $regionName;

    /**
     * @description Indicates whether ApsaraMQ for RocketMQ V4 is activated.
     *
     * @example true
     *
     * @var bool
     */
    public $supportRocketmqV4;

    /**
     * @description Indicates whether ApsaraMQ for RocketMQ V5 is activated.
     *
     * @example true
     *
     * @var bool
     */
    public $supportRocketmqV5;

    /**
     * @description The region tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The time when the ApsaraMQ for RocketMQ instance was last modified.
     *
     * @example 2022-08-01 20:05:50
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'        => 'createTime',
        'regionId'          => 'regionId',
        'regionName'        => 'regionName',
        'supportRocketmqV4' => 'supportRocketmqV4',
        'supportRocketmqV5' => 'supportRocketmqV5',
        'tags'              => 'tags',
        'updateTime'        => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}

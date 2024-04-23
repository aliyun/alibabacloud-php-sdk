<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerListResponseBody\consumerList;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerListResponseBody\consumerList\consumerVO\tags;
use AlibabaCloud\Tea\Model;

class consumerVO extends Model
{
    /**
     * @description Indicates that the consumer group was automatically created by the system.
     *
     * @var bool
     */
    public $automaticallyCreatedGroup;

    /**
     * @description The consumer group ID.
     *
     * @example kafka-test
     *
     * @var string
     */
    public $consumerId;

    /**
     * @description The instance ID.
     *
     * @example alikafka_post-cn-v0h18sav****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region where the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The instance description.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The tags.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'automaticallyCreatedGroup' => 'AutomaticallyCreatedGroup',
        'consumerId'                => 'ConsumerId',
        'instanceId'                => 'InstanceId',
        'regionId'                  => 'RegionId',
        'remark'                    => 'Remark',
        'tags'                      => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->automaticallyCreatedGroup) {
            $res['AutomaticallyCreatedGroup'] = $this->automaticallyCreatedGroup;
        }
        if (null !== $this->consumerId) {
            $res['ConsumerId'] = $this->consumerId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consumerVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutomaticallyCreatedGroup'])) {
            $model->automaticallyCreatedGroup = $map['AutomaticallyCreatedGroup'];
        }
        if (isset($map['ConsumerId'])) {
            $model->consumerId = $map['ConsumerId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}

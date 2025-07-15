<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreateConsumerGroupRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateConsumerGroupRequest extends Model
{
    /**
     * @description The name of the consumer group.
     *
     *   The value can contain only letters, digits, hyphens (-), and underscores (_), and the value must contain at least one letter or digit.
     *   The value must be 3 to 128 characters in length. If the value that you specify contains more than 128 characters, the system automatically truncates the value to 128 characters.
     *   After a consumer group is created, you cannot change the name of the consumer group.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $consumerId;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example alikafka_post-cn-0pp1l9z8****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The description of the consumer group.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'consumerId' => 'ConsumerId',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'remark' => 'Remark',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConsumerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

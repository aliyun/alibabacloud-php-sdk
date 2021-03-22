<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerListResponseBody\consumerList;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerListResponseBody\consumerList\consumerVO\tags;
use AlibabaCloud\Tea\Model;

class consumerVO extends Model
{
    /**
     * @var string
     */
    public $remark;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'remark'     => 'Remark',
        'tags'       => 'Tags',
        'consumerId' => 'ConsumerId',
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
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

        return $model;
    }
}

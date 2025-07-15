<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class GetConsumerProgressRequest extends Model
{
    /**
     * @description The name of the consumer group.
     *
     * This parameter is required.
     *
     * @example kafka-test
     *
     * @var string
     */
    public $consumerId;

    /**
     * @description Specifies whether to hide LastTimestamp. Default value: false. We recommend that you set this parameter to true.
     *
     * >
     *
     *   If you set this parameter to true, -1 is returned for LastTimestamp. If you set this parameter to false, a specific value is returned for LastTimestamp. This parameter is supported only by topics that use cloud storage on reserved instances.
     *
     *   A large amount of data is processed by this operation, which causes performance loss. We recommend that you set this parameter to true to accelerate processing.
     *
     * @example true
     *
     * @var bool
     */
    public $hideLastTimestamp;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     *
     * @example alikafka_pre-cn-mp919o4v****
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
    protected $_name = [
        'consumerId' => 'ConsumerId',
        'hideLastTimestamp' => 'HideLastTimestamp',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerId) {
            $res['ConsumerId'] = $this->consumerId;
        }
        if (null !== $this->hideLastTimestamp) {
            $res['HideLastTimestamp'] = $this->hideLastTimestamp;
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
     * @return GetConsumerProgressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerId'])) {
            $model->consumerId = $map['ConsumerId'];
        }
        if (isset($map['HideLastTimestamp'])) {
            $model->hideLastTimestamp = $map['HideLastTimestamp'];
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

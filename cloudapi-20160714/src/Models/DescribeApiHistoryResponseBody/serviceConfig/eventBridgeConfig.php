<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\serviceConfig;

use AlibabaCloud\Tea\Model;

class eventBridgeConfig extends Model
{
    /**
     * @description The ID of the region where the EventBridge instance is located.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $eventBridgeRegionId;

    /**
     * @description The event bus.
     *
     * @example testBus
     *
     * @var string
     */
    public $eventBus;

    /**
     * @description The event source.
     *
     * @example baas_driver
     *
     * @var string
     */
    public $eventSource;

    /**
     * @description The ARN of the RAM role assigned to EventBridge.
     *
     * @example acs:ram::1933122015759***:role/adminoidcaliyun
     *
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'eventBridgeRegionId' => 'EventBridgeRegionId',
        'eventBus'            => 'EventBus',
        'eventSource'         => 'EventSource',
        'roleArn'             => 'RoleArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBridgeRegionId) {
            $res['EventBridgeRegionId'] = $this->eventBridgeRegionId;
        }
        if (null !== $this->eventBus) {
            $res['EventBus'] = $this->eventBus;
        }
        if (null !== $this->eventSource) {
            $res['EventSource'] = $this->eventSource;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventBridgeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBridgeRegionId'])) {
            $model->eventBridgeRegionId = $map['EventBridgeRegionId'];
        }
        if (isset($map['EventBus'])) {
            $model->eventBus = $map['EventBus'];
        }
        if (isset($map['EventSource'])) {
            $model->eventSource = $map['EventSource'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        return $model;
    }
}

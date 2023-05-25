<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig;

use AlibabaCloud\Tea\Model;

class eventBridgeConfig extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $eventBridgeRegionId;

    /**
     * @example testBus
     *
     * @var string
     */
    public $eventBus;

    /**
     * @example dds_driver
     *
     * @var string
     */
    public $eventSource;

    /**
     * @example acs:ram::1975133748561***:role/aliyunserviceroleforiotlogexport
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

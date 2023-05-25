<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig;

use AlibabaCloud\Tea\Model;

class eventBridgeConfig extends Model
{
    /**
     * @description The URL used to call the back-end service. If the complete back-end service URL is `http://api.a.com:8080/object/add?key1=value1&key2=value2`, the value of **ServiceAddress** is `http://api.a.com:8080`.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $eventBridgeRegionId;

    /**
     * @description The region ID of the API.
     *
     * @example testBus
     *
     * @var string
     */
    public $eventBus;

    /**
     * @description The name of the corresponding backend parameter.
     *
     * @example baas_driver
     *
     * @var string
     */
    public $eventSource;

    /**
     * @description The public key.
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

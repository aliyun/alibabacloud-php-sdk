<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig;

use AlibabaCloud\Dara\Model;

class eventBridgeConfig extends Model
{
    /**
     * @var string
     */
    public $eventBridgeRegionId;

    /**
     * @var string
     */
    public $eventBus;

    /**
     * @var string
     */
    public $eventSource;

    /**
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'eventBridgeRegionId' => 'EventBridgeRegionId',
        'eventBus' => 'EventBus',
        'eventSource' => 'EventSource',
        'roleArn' => 'RoleArn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

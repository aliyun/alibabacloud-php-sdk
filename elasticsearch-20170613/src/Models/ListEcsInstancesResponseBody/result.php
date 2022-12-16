<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody\result\collectors;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody\result\ipAddress;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $cloudAssistantStatus;

    /**
     * @var collectors[]
     */
    public $collectors;

    /**
     * @example i-bp14ncqge8wy3l3d****
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @example ecsTestName
     *
     * @var string
     */
    public $ecsInstanceName;

    /**
     * @var ipAddress[]
     */
    public $ipAddress;

    /**
     * @example linux
     *
     * @var string
     */
    public $osType;

    /**
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @example [ { "tagKey": "a", "tagValue": "b" } ]
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'cloudAssistantStatus' => 'cloudAssistantStatus',
        'collectors'           => 'collectors',
        'ecsInstanceId'        => 'ecsInstanceId',
        'ecsInstanceName'      => 'ecsInstanceName',
        'ipAddress'            => 'ipAddress',
        'osType'               => 'osType',
        'status'               => 'status',
        'tags'                 => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudAssistantStatus) {
            $res['cloudAssistantStatus'] = $this->cloudAssistantStatus;
        }
        if (null !== $this->collectors) {
            $res['collectors'] = [];
            if (null !== $this->collectors && \is_array($this->collectors)) {
                $n = 0;
                foreach ($this->collectors as $item) {
                    $res['collectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ecsInstanceId) {
            $res['ecsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->ecsInstanceName) {
            $res['ecsInstanceName'] = $this->ecsInstanceName;
        }
        if (null !== $this->ipAddress) {
            $res['ipAddress'] = [];
            if (null !== $this->ipAddress && \is_array($this->ipAddress)) {
                $n = 0;
                foreach ($this->ipAddress as $item) {
                    $res['ipAddress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->osType) {
            $res['osType'] = $this->osType;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cloudAssistantStatus'])) {
            $model->cloudAssistantStatus = $map['cloudAssistantStatus'];
        }
        if (isset($map['collectors'])) {
            if (!empty($map['collectors'])) {
                $model->collectors = [];
                $n                 = 0;
                foreach ($map['collectors'] as $item) {
                    $model->collectors[$n++] = null !== $item ? collectors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ecsInstanceId'])) {
            $model->ecsInstanceId = $map['ecsInstanceId'];
        }
        if (isset($map['ecsInstanceName'])) {
            $model->ecsInstanceName = $map['ecsInstanceName'];
        }
        if (isset($map['ipAddress'])) {
            if (!empty($map['ipAddress'])) {
                $model->ipAddress = [];
                $n                = 0;
                foreach ($map['ipAddress'] as $item) {
                    $model->ipAddress[$n++] = null !== $item ? ipAddress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['osType'])) {
            $model->osType = $map['osType'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }

        return $model;
    }
}

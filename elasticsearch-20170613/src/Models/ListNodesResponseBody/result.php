<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListNodesResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListNodesResponseBody\result\ipAddress;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListNodesResponseBody\result\tags;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The status of the shipper on the ECS instance. Valid values:
     *
     *   heartOk: The heartbeat is normal.
     *   heartLost: The heartbeat is abnormal.
     *   uninstalled: The shipper is not installed.
     *   failed: The shipper fails to be installed.
     *
     * @example heartOk
     *
     * @var string
     */
    public $agentStatus;

    /**
     * @description Indicates whether the Cloud Assistant client is installed. Valid values:
     *
     *   true: installed
     *   false: not installed
     *
     * @example true
     *
     * @var string
     */
    public $cloudAssistantStatus;

    /**
     * @description The ID of the ECS instance.
     *
     * @example i-bp13y63575oypr****
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @description The name of the ECS instance.
     *
     * @example ECS_beat
     *
     * @var string
     */
    public $ecsInstanceName;

    /**
     * @description The IP addresses of the ECS instance.
     *
     * @var ipAddress[]
     */
    public $ipAddress;

    /**
     * @description The operating system type of the ECS instance. Valid values:
     *
     *   windows: Windows Server
     *   linux: Linux
     *
     * @example linux
     *
     * @var string
     */
    public $osType;

    /**
     * @description The status of the ECS instance. Valid values:
     *
     *   running: The instance is running.
     *   starting: The instance is being started.
     *   stopping: The instance is being stopped.
     *   stopped: The instance is stopped.
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the ECS instance.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'agentStatus'          => 'agentStatus',
        'cloudAssistantStatus' => 'cloudAssistantStatus',
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
        if (null !== $this->agentStatus) {
            $res['agentStatus'] = $this->agentStatus;
        }
        if (null !== $this->cloudAssistantStatus) {
            $res['cloudAssistantStatus'] = $this->cloudAssistantStatus;
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
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['agentStatus'])) {
            $model->agentStatus = $map['agentStatus'];
        }
        if (isset($map['cloudAssistantStatus'])) {
            $model->cloudAssistantStatus = $map['cloudAssistantStatus'];
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
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

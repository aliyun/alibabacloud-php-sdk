<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspaceQueuesResponseBody;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspaceQueuesResponseBody\queues\allowActions;
use AlibabaCloud\Tea\Model;

class queues extends Model
{
    /**
     * @description The operations allowed for the queue.
     *
     * @var allowActions[]
     */
    public $allowActions;

    /**
     * @description The ID of the user who created the queue.
     *
     * @example 237109
     *
     * @var string
     */
    public $creator;

    /**
     * @description The environment types of the queue.
     *
     * @var string[]
     */
    public $environments;

    /**
     * @description The maximum capacity of resources that can be used in the queue.
     *
     * @example {"cpu": "2","memory": "2Gi"}
     *
     * @var string
     */
    public $maxResource;

    /**
     * @description The minimum capacity of resources that can be used in the queue.
     *
     * @example {"cpu": "2","memory": "2Gi"}
     *
     * @var string
     */
    public $minResource;

    /**
     * @description The queue label.
     *
     * @example dev_queue
     *
     * @var string
     */
    public $properties;

    /**
     * @description The name of the queue.
     *
     * @example dev_queue
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The queue architecture.
     *
     * @example {"arch": "x86"}
     *
     * @var string
     */
    public $queueScope;

    /**
     * @description The status of the queue.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $queueStatus;

    /**
     * @description The queue type.
     *
     * @example instance, instanceChildren
     *
     * @var string
     */
    public $queueType;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The capacity of resources that are used in the queue.
     *
     * @example {"cpu": "2","memory": "2Gi"}
     *
     * @var string
     */
    public $usedResource;

    /**
     * @description The workspace ID.
     *
     * @example w-1234abcd
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'allowActions' => 'allowActions',
        'creator'      => 'creator',
        'environments' => 'environments',
        'maxResource'  => 'maxResource',
        'minResource'  => 'minResource',
        'properties'   => 'properties',
        'queueName'    => 'queueName',
        'queueScope'   => 'queueScope',
        'queueStatus'  => 'queueStatus',
        'queueType'    => 'queueType',
        'regionId'     => 'regionId',
        'usedResource' => 'usedResource',
        'workspaceId'  => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowActions) {
            $res['allowActions'] = [];
            if (null !== $this->allowActions && \is_array($this->allowActions)) {
                $n = 0;
                foreach ($this->allowActions as $item) {
                    $res['allowActions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->environments) {
            $res['environments'] = $this->environments;
        }
        if (null !== $this->maxResource) {
            $res['maxResource'] = $this->maxResource;
        }
        if (null !== $this->minResource) {
            $res['minResource'] = $this->minResource;
        }
        if (null !== $this->properties) {
            $res['properties'] = $this->properties;
        }
        if (null !== $this->queueName) {
            $res['queueName'] = $this->queueName;
        }
        if (null !== $this->queueScope) {
            $res['queueScope'] = $this->queueScope;
        }
        if (null !== $this->queueStatus) {
            $res['queueStatus'] = $this->queueStatus;
        }
        if (null !== $this->queueType) {
            $res['queueType'] = $this->queueType;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->usedResource) {
            $res['usedResource'] = $this->usedResource;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowActions'])) {
            if (!empty($map['allowActions'])) {
                $model->allowActions = [];
                $n                   = 0;
                foreach ($map['allowActions'] as $item) {
                    $model->allowActions[$n++] = null !== $item ? allowActions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['environments'])) {
            if (!empty($map['environments'])) {
                $model->environments = $map['environments'];
            }
        }
        if (isset($map['maxResource'])) {
            $model->maxResource = $map['maxResource'];
        }
        if (isset($map['minResource'])) {
            $model->minResource = $map['minResource'];
        }
        if (isset($map['properties'])) {
            $model->properties = $map['properties'];
        }
        if (isset($map['queueName'])) {
            $model->queueName = $map['queueName'];
        }
        if (isset($map['queueScope'])) {
            $model->queueScope = $map['queueScope'];
        }
        if (isset($map['queueStatus'])) {
            $model->queueStatus = $map['queueStatus'];
        }
        if (isset($map['queueType'])) {
            $model->queueType = $map['queueType'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['usedResource'])) {
            $model->usedResource = $map['usedResource'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}

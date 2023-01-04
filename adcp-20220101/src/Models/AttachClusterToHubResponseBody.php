<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AttachClusterToHubResponseBody extends Model
{
    /**
     * @description The ID of the master instance.
     *
     * @example c8e28143817db4b039b8548d7c899****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description A list of the IDs of the clusters that you want to associate with the master instance.
     *
     * @var string[]
     */
    public $managedClusterIds;

    /**
     * @description The ID of the request.
     *
     * @example EA06613B-37A3-549E-BAE0-E4AD8A6E93D7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example T-623a96b7bbeaac074b00****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'managedClusterIds' => 'ManagedClusterIds',
        'requestId'         => 'RequestId',
        'taskId'            => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->managedClusterIds) {
            $res['ManagedClusterIds'] = $this->managedClusterIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachClusterToHubResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ManagedClusterIds'])) {
            if (!empty($map['ManagedClusterIds'])) {
                $model->managedClusterIds = $map['ManagedClusterIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

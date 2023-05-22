<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DetachClusterFromHubResponseBody extends Model
{
    /**
     * @description Zhishi
     *
     * @example cc490b1e67ccc43a784727f29f33e****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var string[]
     */
    public $managedClusterIds;

    /**
     * @description You can call the DetachClusterFromHub operation to disassociate clusters from a master instance.
     *
     * @example 4412F213-DBCD-5D1B-A9A1-F6C26C6C19D9
     *
     * @var string
     */
    public $requestId;

    /**
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
     * @return DetachClusterFromHubResponseBody
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

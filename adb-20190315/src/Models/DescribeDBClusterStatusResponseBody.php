<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterStatusResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEAU
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The states of clusters. Valid values:
     *
     *   **Preparing**: The cluster is being prepared.
     *   **Creating**: The cluster is being created.
     *   **Restoring**: The cluster is being restored from a backup.
     *   **Running**: The cluster is running.
     *   **Deleting**: The cluster is being deleted.
     *   **ClassChanging**: The cluster configurations are being changed.
     *   **NetAddressCreating**: A network connection is being created.
     *   **NetAddressDeleting**: A network connection is being released.
     *   **NetAddressModifying**: A network connection is being modified.
     *   **EngineVersionUpgrading**: The engine version is being updated.
     *
     * @var string[]
     */
    public $status;
    protected $_name = [
        'requestId' => 'RequestId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
        }

        return $model;
    }
}

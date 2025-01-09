<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\ListClustersResponseBody;

use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example cluster-w3G9vOJI2****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   NEW: The cluster is not initialized.
     *   INITIALIZED: The cluster is initialized.
     *   DELETED: The cluster is deleted.
     *   SYNCHRONIZING: The cluster is being synchronized.
     *   TO_DELETE: The cluster is pending deletion.
     *
     * @example INITIALIZED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'status'    => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

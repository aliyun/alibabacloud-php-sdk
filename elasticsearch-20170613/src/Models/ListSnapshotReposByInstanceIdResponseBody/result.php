<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListSnapshotReposByInstanceIdResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example es-cn-6ja1ro4jt000c****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example es-cn-6ja1ro4jt000c****
     *
     * @var string
     */
    public $repoPath;

    /**
     * @example aliyun_snapshot_from_es-cn-6ja1ro4jt000c****
     *
     * @var string
     */
    public $snapWarehouse;

    /**
     * @example available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'instanceId'    => 'instanceId',
        'repoPath'      => 'repoPath',
        'snapWarehouse' => 'snapWarehouse',
        'status'        => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->repoPath) {
            $res['repoPath'] = $this->repoPath;
        }
        if (null !== $this->snapWarehouse) {
            $res['snapWarehouse'] = $this->snapWarehouse;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['repoPath'])) {
            $model->repoPath = $map['repoPath'];
        }
        if (isset($map['snapWarehouse'])) {
            $model->snapWarehouse = $map['snapWarehouse'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}

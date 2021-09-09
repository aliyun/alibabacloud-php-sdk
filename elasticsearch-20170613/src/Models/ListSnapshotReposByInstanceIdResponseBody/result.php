<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListSnapshotReposByInstanceIdResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $snapWarehouse;

    /**
     * @var string
     */
    public $repoPath;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'snapWarehouse' => 'snapWarehouse',
        'repoPath'      => 'repoPath',
        'status'        => 'status',
        'instanceId'    => 'instanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapWarehouse) {
            $res['snapWarehouse'] = $this->snapWarehouse;
        }
        if (null !== $this->repoPath) {
            $res['repoPath'] = $this->repoPath;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
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
        if (isset($map['snapWarehouse'])) {
            $model->snapWarehouse = $map['snapWarehouse'];
        }
        if (isset($map['repoPath'])) {
            $model->repoPath = $map['repoPath'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdp\V20210402\Models;

use AlibabaCloud\Tea\Model;

class ListOperationsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterBizId;

    /**
     * @var string
     */
    public $parentOperationNodeId;
    protected $_name = [
        'clusterBizId'          => 'ClusterBizId',
        'parentOperationNodeId' => 'ParentOperationNodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }
        if (null !== $this->parentOperationNodeId) {
            $res['ParentOperationNodeId'] = $this->parentOperationNodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOperationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['ParentOperationNodeId'])) {
            $model->parentOperationNodeId = $map['ParentOperationNodeId'];
        }

        return $model;
    }
}

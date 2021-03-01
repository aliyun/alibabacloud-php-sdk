<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteClusterMemberRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterMemberId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'clusterMemberId' => 'ClusterMemberId',
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
        if (null !== $this->clusterMemberId) {
            $res['ClusterMemberId'] = $this->clusterMemberId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteClusterMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterMemberId'])) {
            $model->clusterMemberId = $map['ClusterMemberId'];
        }

        return $model;
    }
}

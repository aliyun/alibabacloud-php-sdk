<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\admitLog;

use AlibabaCloud\Tea\Model;

class log extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $constraintKind;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $resourceKind;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceNamespace;
    protected $_name = [
        'clusterId'         => 'cluster_id',
        'constraintKind'    => 'constraint_kind',
        'msg'               => 'msg',
        'resourceKind'      => 'resource_kind',
        'resourceName'      => 'resource_name',
        'resourceNamespace' => 'resource_namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->constraintKind) {
            $res['constraint_kind'] = $this->constraintKind;
        }
        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }
        if (null !== $this->resourceKind) {
            $res['resource_kind'] = $this->resourceKind;
        }
        if (null !== $this->resourceName) {
            $res['resource_name'] = $this->resourceName;
        }
        if (null !== $this->resourceNamespace) {
            $res['resource_namespace'] = $this->resourceNamespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return log
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['constraint_kind'])) {
            $model->constraintKind = $map['constraint_kind'];
        }
        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }
        if (isset($map['resource_kind'])) {
            $model->resourceKind = $map['resource_kind'];
        }
        if (isset($map['resource_name'])) {
            $model->resourceName = $map['resource_name'];
        }
        if (isset($map['resource_namespace'])) {
            $model->resourceNamespace = $map['resource_namespace'];
        }

        return $model;
    }
}

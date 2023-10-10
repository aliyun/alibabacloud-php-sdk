<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListK8sIngressRulesRequest extends Model
{
    /**
     * @description The ID of the Kubernetes cluster.
     *
     * @example 5b2b4ab4-efbc-4a81-9c45-xxxxxxxxxxxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The filter conditions. Set the value to a JSON string in the format of {"field":"Name", "pattern":"my-"}, where:
     *
     *   field: the parameter to be matched. Valid values: Name and ClusterName.
     *   pattern: the content to be matched.
     *
     * For example, a value of {"field":"Name", "pattern":"my-"} indicates that the specified filter conditions match the routing rules whose names start with my-.
     * @example {"field":"Name", "pattern":"my-"}
     *
     * @var string
     */
    public $condition;

    /**
     * @description The namespace of the Kubernetes cluster.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ID of the region where the cluster resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'condition' => 'Condition',
        'namespace' => 'Namespace',
        'regionId'  => 'RegionId',
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
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListK8sIngressRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

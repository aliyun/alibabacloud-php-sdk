<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddContainerDefenseRuleRequest;

use AlibabaCloud\Tea\Model;

class scope extends Model
{
    /**
     * @description Specifies whether to include all namespaces. Valid values:
     *
     *   **0**: You can use the Namespaces parameter to specify the namespaces to include.
     *   **1**: All namespaces are included.
     *
     * @example 0
     *
     * @var int
     */
    public $allNamespace;

    /**
     * @description The ID of the cluster.
     *
     * >  You can call the [DescribeGroupedContainerInstances](~~182997~~) operation to query the IDs of clusters.
     * @example 8e2***75b
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The namespaces to include.
     *
     * @var string[]
     */
    public $namespaces;
    protected $_name = [
        'allNamespace' => 'AllNamespace',
        'clusterId'    => 'ClusterId',
        'namespaces'   => 'Namespaces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allNamespace) {
            $res['AllNamespace'] = $this->allNamespace;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->namespaces) {
            $res['Namespaces'] = $this->namespaces;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scope
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllNamespace'])) {
            $model->allNamespace = $map['AllNamespace'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = $map['Namespaces'];
            }
        }

        return $model;
    }
}

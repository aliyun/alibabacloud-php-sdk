<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListContainerDefenseRuleClustersResponseBody;

use AlibabaCloud\Tea\Model;

class clusterList extends Model
{
    /**
     * @description Indicates whether all namespaces are included. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $allNamespace;

    /**
     * @description The ID of the cluster.
     *
     * @example cfeb7a9f99ce740e98c5595d0fe37****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The namespaces.
     *
     * @var string[]
     */
    public $namespaces;

    /**
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'allNamespace' => 'AllNamespace',
        'clusterId'    => 'ClusterId',
        'namespaces'   => 'Namespaces',
        'ruleId'       => 'RuleId',
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
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterList
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
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}

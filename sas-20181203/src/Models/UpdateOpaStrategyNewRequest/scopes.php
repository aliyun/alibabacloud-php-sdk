<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\UpdateOpaStrategyNewRequest;

use AlibabaCloud\Tea\Model;

class scopes extends Model
{
    /**
     * @description The instance ID of the rule in the cluster.
     *
     * >  You can call the [GetOpaStrategyDetailNew](~~GetOpaStrategyDetailNew~~) operation to query the instance IDs of rules.
     * @example ack-1
     *
     * @var string
     */
    public $ackPolicyInstanceId;

    /**
     * @description Specifies whether to include all namespaces.
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
     * @description The ID of the container cluster.
     *
     * >  You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of container clusters.
     * @example cdcb56a931c**
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The namespaces.
     *
     * > This parameter is valid only when AllNamespace is set to 0.
     * @var string[]
     */
    public $namespaceList;
    protected $_name = [
        'ackPolicyInstanceId' => 'AckPolicyInstanceId',
        'allNamespace'        => 'AllNamespace',
        'clusterId'           => 'ClusterId',
        'namespaceList'       => 'NamespaceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ackPolicyInstanceId) {
            $res['AckPolicyInstanceId'] = $this->ackPolicyInstanceId;
        }
        if (null !== $this->allNamespace) {
            $res['AllNamespace'] = $this->allNamespace;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->namespaceList) {
            $res['NamespaceList'] = $this->namespaceList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scopes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AckPolicyInstanceId'])) {
            $model->ackPolicyInstanceId = $map['AckPolicyInstanceId'];
        }
        if (isset($map['AllNamespace'])) {
            $model->allNamespace = $map['AllNamespace'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['NamespaceList'])) {
            if (!empty($map['NamespaceList'])) {
                $model->namespaceList = $map['NamespaceList'];
            }
        }

        return $model;
    }
}

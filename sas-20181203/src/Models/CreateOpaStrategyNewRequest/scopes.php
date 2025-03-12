<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateOpaStrategyNewRequest;

use AlibabaCloud\Tea\Model;

class scopes extends Model
{
    /**
     * @description The ID of the cluster node to which the rule is applied.
     *
     * > This parameter is not required when you create the instance.
     * @example ack-p-1
     *
     * @var string
     */
    public $ackPolicyInstanceId;

    /**
     * @description Specifies whether to include all namespaces. Valid values:
     *
     *   **1**: includes all namespaces.
     *   **0**: does not include all namespaces.
     *
     * @example 1
     *
     * @var int
     */
    public $allNamespace;

    /**
     * @description The ID of the cluster that is specified in the rule.
     *
     * >  You can call the [DescribeGroupedContainerInstances](https://help.aliyun.com/document_detail/421736.html) operation to query the cluster ID.
     * @example cc50d***015d2
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The namespaces.
     *
     * > This parameter is valid only when the AllNamespace parameter is set to 0.
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

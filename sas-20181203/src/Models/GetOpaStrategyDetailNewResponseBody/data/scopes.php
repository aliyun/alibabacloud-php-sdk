<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data;

use AlibabaCloud\Tea\Model;

class scopes extends Model
{
    /**
     * @description The rule instance ID of the cluster.
     *
     * @example ack-0
     *
     * @var string
     */
    public $ackPolicyInstanceId;

    /**
     * @description Indicates whether all namespaces are included. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $allNamespace;

    /**
     * @description The cluster ID.
     *
     * @example c1fdb5fd8d**7163
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The namespaces.
     *
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

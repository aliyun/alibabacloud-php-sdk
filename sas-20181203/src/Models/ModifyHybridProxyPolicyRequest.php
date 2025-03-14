<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyHybridProxyPolicyRequest extends Model
{
    /**
     * @description The name of the proxy cluster.
     *
     * This parameter is required.
     *
     * @example sas-proxy
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The policy of the proxy cluster.
     *
     * This parameter is required.
     *
     * @example [
     * {
     * "policyType": "limitFrequency",
     * "info":
     * [
     * {
     * "type": "file",
     * "config": "10"
     * }
     * ]
     * },
     * {
     * "policyType": "limitBandWidth",
     * "info":
     * [
     * {
     * "type": "net"
     * },
     * {
     * "type": "process"
     * }
     * ]
     * }
     * ]
     *
     * @var string
     */
    public $policyInfo;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'policyInfo' => 'PolicyInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->policyInfo) {
            $res['PolicyInfo'] = $this->policyInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHybridProxyPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['PolicyInfo'])) {
            $model->policyInfo = $map['PolicyInfo'];
        }

        return $model;
    }
}

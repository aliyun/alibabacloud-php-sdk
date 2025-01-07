<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeHybridProxyPolicyRequest extends Model
{
    /**
     * @description The name of the proxy cluster. You can query the name of the proxy cluster in the Security Center console.
     *
     * This parameter is required.
     * @example test-idc
     *
     * @var string
     */
    public $clusterName;
    protected $_name = [
        'clusterName' => 'ClusterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHybridProxyPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        return $model;
    }
}

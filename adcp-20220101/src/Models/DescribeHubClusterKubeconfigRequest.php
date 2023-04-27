<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHubClusterKubeconfigRequest extends Model
{
    /**
     * @description The ID of the master instance.
     *
     * @example c102fe5f1ee5d4c87a68121a77d8b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specifies whether to obtain the kubeconfig file that is used to connect to the cluster over the internal network. Valid values:
     *
     *   `true`: obtains the kubeconfig file that is used to connect to the master instance over the internal network.
     *   `false`: obtains the kubeconfig file that is used to connect to the master instance over the Internet.
     *
     * Default value: `false`
     * @example false
     *
     * @var bool
     */
    public $privateIpAddress;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'privateIpAddress' => 'PrivateIpAddress',
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
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHubClusterKubeconfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        return $model;
    }
}

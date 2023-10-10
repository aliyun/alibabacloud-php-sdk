<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterUserKubeconfigRequest extends Model
{
    /**
     * @description Specifies whether to obtain the kubeconfig file that is used to connect to the cluster over the internal network. Valid values:
     *
     *   `true`: obtains the kubeconfig file that is used to connect to the master instance over the internal network.
     *   `false`: obtains the kubeconfig file that is used to connect to the master instance over the Internet.
     *
     * Default value: `false`.
     * @example true
     *
     * @var bool
     */
    public $privateIpAddress;

    /**
     * @description The validity period of a temporary kubeconfig file. Unit: minutes. Valid values: 15 to 4320 (3 days).
     *
     * >  If you do not specify this parameter, the system specifies a longer validity period. The validity period is returned in the `expiration` parameter.
     * @example 15
     *
     * @var int
     */
    public $temporaryDurationMinutes;
    protected $_name = [
        'privateIpAddress'         => 'PrivateIpAddress',
        'temporaryDurationMinutes' => 'TemporaryDurationMinutes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->temporaryDurationMinutes) {
            $res['TemporaryDurationMinutes'] = $this->temporaryDurationMinutes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterUserKubeconfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['TemporaryDurationMinutes'])) {
            $model->temporaryDurationMinutes = $map['TemporaryDurationMinutes'];
        }

        return $model;
    }
}

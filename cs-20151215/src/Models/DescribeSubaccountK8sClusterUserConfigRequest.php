<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeSubaccountK8sClusterUserConfigRequest extends Model
{
    /**
     * @description Specifies whether to obtain the kubeconfig file used to connect to the cluster over the internal network. Valid values:
     *
     *   `true`: Obtain the kubeconfig file used to connect to the cluster over the internal network.
     *   `false`: Obtain the kubeconfig file used to connect to the cluster over the Internet.
     *
     * Default value: `false`.
     * @example true
     *
     * @var bool
     */
    public $privateIpAddress;

    /**
     * @description The validity period of the temporary kubeconfig file. Unit: minutes.
     *
     * > If you leave this parameter empty, the system sets a longer validity period and returns the value in the expiration parameter of the response.
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
     * @return DescribeSubaccountK8sClusterUserConfigRequest
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

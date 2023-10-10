<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeSubaccountK8sClusterUserConfigResponseBody extends Model
{
    /**
     * @description The cluster kubeconfig file. For more information about the content of the kubeconfig file, see [Configure cluster credentials](~~86494~~).
     *
     * @example apiVersion: v1****
     *
     * @var string
     */
    public $config;

    /**
     * @description The expiration date of the kubeconfig file. The value is the UTC time displayed in RFC3339 format.
     *
     * @example 2024-03-10T09:56:17Z
     *
     * @var string
     */
    public $expiration;
    protected $_name = [
        'config'     => 'config',
        'expiration' => 'expiration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->expiration) {
            $res['expiration'] = $this->expiration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubaccountK8sClusterUserConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['expiration'])) {
            $model->expiration = $map['expiration'];
        }

        return $model;
    }
}

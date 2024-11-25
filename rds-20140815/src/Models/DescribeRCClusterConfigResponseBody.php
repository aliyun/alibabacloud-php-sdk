<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeRCClusterConfigResponseBody extends Model
{
    /**
     * @description The kubeconfig file of the cluster.
     *
     * @example apiVersion: v1****
     *
     * @var string
     */
    public $config;

    /**
     * @description The expiration time of the kubeconfig file. Format: the UTC time in the RFC3339 format.
     *
     * @example 2024-03-10T09:56:17Z
     *
     * @var string
     */
    public $expiration;

    /**
     * @description The request ID.
     *
     * @example E9DD55F4-1A5F-48CA-BA57-DFB3CA8C4C34
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'config'     => 'Config',
        'expiration' => 'Expiration',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRCClusterConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

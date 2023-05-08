<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterPrometheusResponseBody extends Model
{
    /**
     * @description The public endpoint of the Prometheus service that is used to monitor a cluster in the ASM instance.
     *
     * @example p.com
     *
     * @var string
     */
    public $prometheus;

    /**
     * @description The ID of the request.
     *
     * @example BD65C0AD-D3C6-48D3-8D93-38D2015C****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'prometheus' => 'Prometheus',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prometheus) {
            $res['Prometheus'] = $this->prometheus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterPrometheusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Prometheus'])) {
            $model->prometheus = $map['Prometheus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

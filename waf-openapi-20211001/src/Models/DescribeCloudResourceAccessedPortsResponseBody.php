<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudResourceAccessedPortsResponseBody extends Model
{
    /**
     * @description The HTTP ports.
     *
     * @var int[]
     */
    public $http;

    /**
     * @description The HTTPS ports.
     *
     * @var int[]
     */
    public $https;

    /**
     * @description The request ID.
     *
     * @example C1823E96-EF4B-5BD2-9E02-1D18****3ED8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'http' => 'Http',
        'https' => 'Https',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->http) {
            $res['Http'] = $this->http;
        }
        if (null !== $this->https) {
            $res['Https'] = $this->https;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudResourceAccessedPortsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Http'])) {
            if (!empty($map['Http'])) {
                $model->http = $map['Http'];
            }
        }
        if (isset($map['Https'])) {
            if (!empty($map['Https'])) {
                $model->https = $map['Https'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

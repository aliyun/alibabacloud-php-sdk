<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponseBody\serverCertificates;
use AlibabaCloud\Tea\Model;

class DescribeServerCertificatesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 365F4154-92F6-4AE4-92F8-7FF34B540710
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The server certificates.
     *
     * @var serverCertificates
     */
    public $serverCertificates;
    protected $_name = [
        'requestId'          => 'RequestId',
        'serverCertificates' => 'ServerCertificates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serverCertificates) {
            $res['ServerCertificates'] = null !== $this->serverCertificates ? $this->serverCertificates->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServerCertificatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServerCertificates'])) {
            $model->serverCertificates = serverCertificates::fromMap($map['ServerCertificates']);
        }

        return $model;
    }
}

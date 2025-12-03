<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponseBody\serverCertificates;

class DescribeServerCertificatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serverCertificates
     */
    public $serverCertificates;
    protected $_name = [
        'requestId' => 'RequestId',
        'serverCertificates' => 'ServerCertificates',
    ];

    public function validate()
    {
        if (null !== $this->serverCertificates) {
            $this->serverCertificates->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serverCertificates) {
            $res['ServerCertificates'] = null !== $this->serverCertificates ? $this->serverCertificates->toArray($noStream) : $this->serverCertificates;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

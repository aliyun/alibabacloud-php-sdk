<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponseBody\serverCertificates;
use AlibabaCloud\Tea\Model;

class DescribeServerCertificatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serverCertificates[]
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
            $res['ServerCertificates'] = [];
            if (null !== $this->serverCertificates && \is_array($this->serverCertificates)) {
                $n = 0;
                foreach ($this->serverCertificates as $item) {
                    $res['ServerCertificates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['ServerCertificates'])) {
                $model->serverCertificates = [];
                $n                         = 0;
                foreach ($map['ServerCertificates'] as $item) {
                    $model->serverCertificates[$n++] = null !== $item ? serverCertificates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

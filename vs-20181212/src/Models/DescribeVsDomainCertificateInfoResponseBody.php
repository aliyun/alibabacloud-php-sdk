<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainCertificateInfoResponseBody\certInfos;
use AlibabaCloud\Tea\Model;

class DescribeVsDomainCertificateInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var certInfos
     */
    public $certInfos;
    protected $_name = [
        'requestId' => 'RequestId',
        'certInfos' => 'CertInfos',
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
        if (null !== $this->certInfos) {
            $res['CertInfos'] = null !== $this->certInfos ? $this->certInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVsDomainCertificateInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CertInfos'])) {
            $model->certInfos = certInfos::fromMap($map['CertInfos']);
        }

        return $model;
    }
}

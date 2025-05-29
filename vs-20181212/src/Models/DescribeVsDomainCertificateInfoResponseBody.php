<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainCertificateInfoResponseBody\certInfos;

class DescribeVsDomainCertificateInfoResponseBody extends Model
{
    /**
     * @var certInfos
     */
    public $certInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certInfos' => 'CertInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->certInfos) {
            $this->certInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certInfos) {
            $res['CertInfos'] = null !== $this->certInfos ? $this->certInfos->toArray($noStream) : $this->certInfos;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CertInfos'])) {
            $model->certInfos = certInfos::fromMap($map['CertInfos']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

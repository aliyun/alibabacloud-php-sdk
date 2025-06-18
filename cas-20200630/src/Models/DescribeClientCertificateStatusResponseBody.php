<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateStatusResponseBody\certificateStatus;

class DescribeClientCertificateStatusResponseBody extends Model
{
    /**
     * @var certificateStatus[]
     */
    public $certificateStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certificateStatus' => 'CertificateStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->certificateStatus)) {
            Model::validateArray($this->certificateStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificateStatus) {
            if (\is_array($this->certificateStatus)) {
                $res['CertificateStatus'] = [];
                $n1 = 0;
                foreach ($this->certificateStatus as $item1) {
                    $res['CertificateStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CertificateStatus'])) {
            if (!empty($map['CertificateStatus'])) {
                $model->certificateStatus = [];
                $n1 = 0;
                foreach ($map['CertificateStatus'] as $item1) {
                    $model->certificateStatus[$n1] = certificateStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

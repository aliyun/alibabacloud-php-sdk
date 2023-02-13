<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateStatusResponseBody\certificateStatus;
use AlibabaCloud\Tea\Model;

class DescribeClientCertificateStatusResponseBody extends Model
{
    /**
     * @description An array that consists of the status information about the certificates.
     *
     * @var certificateStatus[]
     */
    public $certificateStatus;

    /**
     * @description The ID of the request.
     *
     * @example 15C66C7B-671A-4297-9187-2C4477247A74
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certificateStatus' => 'CertificateStatus',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateStatus) {
            $res['CertificateStatus'] = [];
            if (null !== $this->certificateStatus && \is_array($this->certificateStatus)) {
                $n = 0;
                foreach ($this->certificateStatus as $item) {
                    $res['CertificateStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClientCertificateStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateStatus'])) {
            if (!empty($map['CertificateStatus'])) {
                $model->certificateStatus = [];
                $n                        = 0;
                foreach ($map['CertificateStatus'] as $item) {
                    $model->certificateStatus[$n++] = null !== $item ? certificateStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

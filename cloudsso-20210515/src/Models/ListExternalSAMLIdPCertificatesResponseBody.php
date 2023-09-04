<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListExternalSAMLIdPCertificatesResponseBody\SAMLIdPCertificates;
use AlibabaCloud\Tea\Model;

class ListExternalSAMLIdPCertificatesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 400979BC-92EC-58B9-B47C-6913BD56A6FD
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The SAML signing certificates.
     *
     * @var SAMLIdPCertificates[]
     */
    public $SAMLIdPCertificates;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCounts;
    protected $_name = [
        'requestId'           => 'RequestId',
        'SAMLIdPCertificates' => 'SAMLIdPCertificates',
        'totalCounts'         => 'TotalCounts',
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
        if (null !== $this->SAMLIdPCertificates) {
            $res['SAMLIdPCertificates'] = [];
            if (null !== $this->SAMLIdPCertificates && \is_array($this->SAMLIdPCertificates)) {
                $n = 0;
                foreach ($this->SAMLIdPCertificates as $item) {
                    $res['SAMLIdPCertificates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCounts) {
            $res['TotalCounts'] = $this->totalCounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExternalSAMLIdPCertificatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SAMLIdPCertificates'])) {
            if (!empty($map['SAMLIdPCertificates'])) {
                $model->SAMLIdPCertificates = [];
                $n                          = 0;
                foreach ($map['SAMLIdPCertificates'] as $item) {
                    $model->SAMLIdPCertificates[$n++] = null !== $item ? SAMLIdPCertificates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCounts'])) {
            $model->totalCounts = $map['TotalCounts'];
        }

        return $model;
    }
}

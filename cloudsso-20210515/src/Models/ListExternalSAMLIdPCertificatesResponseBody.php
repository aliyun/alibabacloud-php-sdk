<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListExternalSAMLIdPCertificatesResponseBody\SAMLIdPCertificates;
use AlibabaCloud\Tea\Model;

class ListExternalSAMLIdPCertificatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SAMLIdPCertificates[]
     */
    public $SAMLIdPCertificates;

    /**
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

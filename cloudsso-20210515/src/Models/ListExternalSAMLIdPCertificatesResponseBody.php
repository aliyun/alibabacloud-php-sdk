<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListExternalSAMLIdPCertificatesResponseBody\SAMLIdPCertificates;

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
        'requestId' => 'RequestId',
        'SAMLIdPCertificates' => 'SAMLIdPCertificates',
        'totalCounts' => 'TotalCounts',
    ];

    public function validate()
    {
        if (\is_array($this->SAMLIdPCertificates)) {
            Model::validateArray($this->SAMLIdPCertificates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SAMLIdPCertificates) {
            if (\is_array($this->SAMLIdPCertificates)) {
                $res['SAMLIdPCertificates'] = [];
                $n1 = 0;
                foreach ($this->SAMLIdPCertificates as $item1) {
                    $res['SAMLIdPCertificates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCounts) {
            $res['TotalCounts'] = $this->totalCounts;
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

        if (isset($map['SAMLIdPCertificates'])) {
            if (!empty($map['SAMLIdPCertificates'])) {
                $model->SAMLIdPCertificates = [];
                $n1 = 0;
                foreach ($map['SAMLIdPCertificates'] as $item1) {
                    $model->SAMLIdPCertificates[$n1++] = SAMLIdPCertificates::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCounts'])) {
            $model->totalCounts = $map['TotalCounts'];
        }

        return $model;
    }
}

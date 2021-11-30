<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateForSerialNumberResponseBody\certificateList;
use AlibabaCloud\Tea\Model;

class DescribeClientCertificateForSerialNumberResponseBody extends Model
{
    /**
     * @var certificateList[]
     */
    public $certificateList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certificateList' => 'CertificateList',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateList) {
            $res['CertificateList'] = [];
            if (null !== $this->certificateList && \is_array($this->certificateList)) {
                $n = 0;
                foreach ($this->certificateList as $item) {
                    $res['CertificateList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeClientCertificateForSerialNumberResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateList'])) {
            if (!empty($map['CertificateList'])) {
                $model->certificateList = [];
                $n                      = 0;
                foreach ($map['CertificateList'] as $item) {
                    $model->certificateList[$n++] = null !== $item ? certificateList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

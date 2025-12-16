<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateForSerialNumberResponseBody\certificateList;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->certificateList)) {
            Model::validateArray($this->certificateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificateList) {
            if (\is_array($this->certificateList)) {
                $res['CertificateList'] = [];
                $n1 = 0;
                foreach ($this->certificateList as $item1) {
                    $res['CertificateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CertificateList'])) {
            if (!empty($map['CertificateList'])) {
                $model->certificateList = [];
                $n1 = 0;
                foreach ($map['CertificateList'] as $item1) {
                    $model->certificateList[$n1] = certificateList::fromMap($item1);
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

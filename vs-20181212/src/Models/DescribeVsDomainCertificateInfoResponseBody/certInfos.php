<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainCertificateInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainCertificateInfoResponseBody\certInfos\certInfo;

class certInfos extends Model
{
    /**
     * @var certInfo[]
     */
    public $certInfo;
    protected $_name = [
        'certInfo' => 'CertInfo',
    ];

    public function validate()
    {
        if (\is_array($this->certInfo)) {
            Model::validateArray($this->certInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certInfo) {
            if (\is_array($this->certInfo)) {
                $res['CertInfo'] = [];
                $n1 = 0;
                foreach ($this->certInfo as $item1) {
                    $res['CertInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CertInfo'])) {
            if (!empty($map['CertInfo'])) {
                $model->certInfo = [];
                $n1 = 0;
                foreach ($map['CertInfo'] as $item1) {
                    $model->certInfo[$n1] = certInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

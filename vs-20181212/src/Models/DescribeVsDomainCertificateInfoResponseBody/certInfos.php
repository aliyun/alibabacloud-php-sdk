<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainCertificateInfoResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainCertificateInfoResponseBody\certInfos\certInfo;
use AlibabaCloud\Tea\Model;

class certInfos extends Model
{
    /**
     * @var certInfo[]
     */
    public $certInfo;
    protected $_name = [
        'certInfo' => 'CertInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certInfo) {
            $res['CertInfo'] = [];
            if (null !== $this->certInfo && \is_array($this->certInfo)) {
                $n = 0;
                foreach ($this->certInfo as $item) {
                    $res['CertInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertInfo'])) {
            if (!empty($map['CertInfo'])) {
                $model->certInfo = [];
                $n = 0;
                foreach ($map['CertInfo'] as $item) {
                    $model->certInfo[$n++] = null !== $item ? certInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

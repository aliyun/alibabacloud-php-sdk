<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainH2FingerprintResponseBody;

use AlibabaCloud\Tea\Model;

class domainH2Fp extends Model
{
    /**
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 532501bc316d02c8b1a007db76f2c796
     *
     * @var string
     */
    public $h2Fingerprint;

    /**
     * @example 471755
     *
     * @var int
     */
    public $pv;
    protected $_name = [
        'domain'        => 'Domain',
        'h2Fingerprint' => 'H2Fingerprint',
        'pv'            => 'Pv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->h2Fingerprint) {
            $res['H2Fingerprint'] = $this->h2Fingerprint;
        }
        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainH2Fp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['H2Fingerprint'])) {
            $model->h2Fingerprint = $map['H2Fingerprint'];
        }
        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }

        return $model;
    }
}

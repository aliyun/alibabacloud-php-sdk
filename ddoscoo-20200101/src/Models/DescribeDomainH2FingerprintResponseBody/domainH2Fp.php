<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainH2FingerprintResponseBody;

use AlibabaCloud\Dara\Model;

class domainH2Fp extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $h2Fingerprint;

    /**
     * @var int
     */
    public $pv;
    protected $_name = [
        'domain' => 'Domain',
        'h2Fingerprint' => 'H2Fingerprint',
        'pv' => 'Pv',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

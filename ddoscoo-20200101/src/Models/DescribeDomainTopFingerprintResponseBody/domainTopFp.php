<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopFingerprintResponseBody;

use AlibabaCloud\Tea\Model;

class domainTopFp extends Model
{
    /**
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 8a374c9724582b14a4cfa58c8c9fb2bc
     *
     * @var string
     */
    public $fingerprinting;

    /**
     * @example 22121
     *
     * @var int
     */
    public $pv;
    protected $_name = [
        'domain'         => 'Domain',
        'fingerprinting' => 'Fingerprinting',
        'pv'             => 'Pv',
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
        if (null !== $this->fingerprinting) {
            $res['Fingerprinting'] = $this->fingerprinting;
        }
        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainTopFp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Fingerprinting'])) {
            $model->fingerprinting = $map['Fingerprinting'];
        }
        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }

        return $model;
    }
}

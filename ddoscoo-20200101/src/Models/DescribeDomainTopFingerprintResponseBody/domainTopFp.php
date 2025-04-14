<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopFingerprintResponseBody;

use AlibabaCloud\Dara\Model;

class domainTopFp extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $fingerprinting;

    /**
     * @var int
     */
    public $pv;
    protected $_name = [
        'domain' => 'Domain',
        'fingerprinting' => 'Fingerprinting',
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

        if (null !== $this->fingerprinting) {
            $res['Fingerprinting'] = $this->fingerprinting;
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

        if (isset($map['Fingerprinting'])) {
            $model->fingerprinting = $map['Fingerprinting'];
        }

        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }

        return $model;
    }
}

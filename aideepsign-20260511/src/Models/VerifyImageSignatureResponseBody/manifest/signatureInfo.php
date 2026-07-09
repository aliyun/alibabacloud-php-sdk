<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models\VerifyImageSignatureResponseBody\manifest;

use AlibabaCloud\Dara\Model;

class signatureInfo extends Model
{
    /**
     * @var string
     */
    public $alg;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'alg' => 'Alg',
        'issuer' => 'Issuer',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alg) {
            $res['Alg'] = $this->alg;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Alg'])) {
            $model->alg = $map['Alg'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}

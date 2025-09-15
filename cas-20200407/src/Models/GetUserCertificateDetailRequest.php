<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class GetUserCertificateDetailRequest extends Model
{
    /**
     * @var bool
     */
    public $certFilter;

    /**
     * @var int
     */
    public $certId;
    protected $_name = [
        'certFilter' => 'CertFilter',
        'certId' => 'CertId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certFilter) {
            $res['CertFilter'] = $this->certFilter;
        }

        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
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
        if (isset($map['CertFilter'])) {
            $model->certFilter = $map['CertFilter'];
        }

        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        return $model;
    }
}

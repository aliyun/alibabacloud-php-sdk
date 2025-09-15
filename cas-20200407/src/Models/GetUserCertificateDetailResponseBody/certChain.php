<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\GetUserCertificateDetailResponseBody;

use AlibabaCloud\Dara\Model;

class certChain extends Model
{
    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $issuerCommonName;

    /**
     * @var int
     */
    public $notAfter;

    /**
     * @var int
     */
    public $notBefore;

    /**
     * @var int
     */
    public $remainDay;
    protected $_name = [
        'commonName' => 'CommonName',
        'issuerCommonName' => 'IssuerCommonName',
        'notAfter' => 'NotAfter',
        'notBefore' => 'NotBefore',
        'remainDay' => 'RemainDay',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->issuerCommonName) {
            $res['IssuerCommonName'] = $this->issuerCommonName;
        }

        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }

        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }

        if (null !== $this->remainDay) {
            $res['RemainDay'] = $this->remainDay;
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
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['IssuerCommonName'])) {
            $model->issuerCommonName = $map['IssuerCommonName'];
        }

        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }

        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }

        if (isset($map['RemainDay'])) {
            $model->remainDay = $map['RemainDay'];
        }

        return $model;
    }
}

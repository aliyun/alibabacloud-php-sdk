<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\GetCertificateDetailResponseBody;

use AlibabaCloud\Dara\Model;

class certificateChainList extends Model
{
    /**
     * @var string
     */
    public $issuer;

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

    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'issuer' => 'Issuer',
        'notAfter' => 'NotAfter',
        'notBefore' => 'NotBefore',
        'remainDay' => 'RemainDay',
        'subject' => 'Subject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
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

        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
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
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
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

        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        return $model;
    }
}

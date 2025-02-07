<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateClientCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $CSR;
    /**
     * @var string
     */
    public $pkeyType;
    /**
     * @var int
     */
    public $siteId;
    /**
     * @var int
     */
    public $validityDays;
    protected $_name = [
        'CSR'          => 'CSR',
        'pkeyType'     => 'PkeyType',
        'siteId'       => 'SiteId',
        'validityDays' => 'ValidityDays',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CSR) {
            $res['CSR'] = $this->CSR;
        }

        if (null !== $this->pkeyType) {
            $res['PkeyType'] = $this->pkeyType;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->validityDays) {
            $res['ValidityDays'] = $this->validityDays;
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
        if (isset($map['CSR'])) {
            $model->CSR = $map['CSR'];
        }

        if (isset($map['PkeyType'])) {
            $model->pkeyType = $map['PkeyType'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['ValidityDays'])) {
            $model->validityDays = $map['ValidityDays'];
        }

        return $model;
    }
}

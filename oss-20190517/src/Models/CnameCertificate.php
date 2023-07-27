<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class CnameCertificate extends Model
{
    /**
     * @var string
     */
    public $certId;

    /**
     * @var string
     */
    public $creationDate;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $validEndDate;

    /**
     * @var string
     */
    public $validStartDate;
    protected $_name = [
        'certId'         => 'CertId',
        'creationDate'   => 'CreationDate',
        'fingerprint'    => 'Fingerprint',
        'status'         => 'Status',
        'type'           => 'Type',
        'validEndDate'   => 'ValidEndDate',
        'validStartDate' => 'ValidStartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
        }
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->validEndDate) {
            $res['ValidEndDate'] = $this->validEndDate;
        }
        if (null !== $this->validStartDate) {
            $res['ValidStartDate'] = $this->validStartDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CnameCertificate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
        }
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ValidEndDate'])) {
            $model->validEndDate = $map['ValidEndDate'];
        }
        if (isset($map['ValidStartDate'])) {
            $model->validStartDate = $map['ValidStartDate'];
        }

        return $model;
    }
}

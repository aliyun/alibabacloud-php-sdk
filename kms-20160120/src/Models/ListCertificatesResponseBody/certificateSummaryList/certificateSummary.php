<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListCertificatesResponseBody\certificateSummaryList;

use AlibabaCloud\Tea\Model;

class certificateSummary extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $keySpec;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $protectionLevel;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $notBefore;

    /**
     * @var string
     */
    public $notAfter;

    /**
     * @var string
     */
    public $certificateId;
    protected $_name = [
        'status'          => 'Status',
        'keySpec'         => 'KeySpec',
        'subject'         => 'Subject',
        'protectionLevel' => 'ProtectionLevel',
        'issuer'          => 'Issuer',
        'notBefore'       => 'NotBefore',
        'notAfter'        => 'NotAfter',
        'certificateId'   => 'CertificateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->keySpec) {
            $res['KeySpec'] = $this->keySpec;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }
        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificateSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['KeySpec'])) {
            $model->keySpec = $map['KeySpec'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }
        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        return $model;
    }
}

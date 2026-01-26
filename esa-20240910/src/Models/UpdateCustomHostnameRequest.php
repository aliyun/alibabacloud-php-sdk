<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateCustomHostnameRequest extends Model
{
    /**
     * @var int
     */
    public $casId;

    /**
     * @var string
     */
    public $casRegion;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $certificate;

    /**
     * @var int
     */
    public $hostnameId;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var int
     */
    public $recordId;

    /**
     * @var string
     */
    public $sslFlag;
    protected $_name = [
        'casId' => 'CasId',
        'casRegion' => 'CasRegion',
        'certType' => 'CertType',
        'certificate' => 'Certificate',
        'hostnameId' => 'HostnameId',
        'privateKey' => 'PrivateKey',
        'recordId' => 'RecordId',
        'sslFlag' => 'SslFlag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->casId) {
            $res['CasId'] = $this->casId;
        }

        if (null !== $this->casRegion) {
            $res['CasRegion'] = $this->casRegion;
        }

        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }

        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }

        if (null !== $this->hostnameId) {
            $res['HostnameId'] = $this->hostnameId;
        }

        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->sslFlag) {
            $res['SslFlag'] = $this->sslFlag;
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
        if (isset($map['CasId'])) {
            $model->casId = $map['CasId'];
        }

        if (isset($map['CasRegion'])) {
            $model->casRegion = $map['CasRegion'];
        }

        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }

        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }

        if (isset($map['HostnameId'])) {
            $model->hostnameId = $map['HostnameId'];
        }

        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['SslFlag'])) {
            $model->sslFlag = $map['SslFlag'];
        }

        return $model;
    }
}

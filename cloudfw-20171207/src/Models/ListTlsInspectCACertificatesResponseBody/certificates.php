<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\ListTlsInspectCACertificatesResponseBody;

use AlibabaCloud\Dara\Model;

class certificates extends Model
{
    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $caCertId;

    /**
     * @var string
     */
    public $caCertType;

    /**
     * @var int
     */
    public $expirationTime;

    /**
     * @var int
     */
    public $keySize;

    /**
     * @var string
     */
    public $parentCaCertId;

    /**
     * @var string
     */
    public $signAlgorithm;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'aliasName' => 'AliasName',
        'caCertId' => 'CaCertId',
        'caCertType' => 'CaCertType',
        'expirationTime' => 'ExpirationTime',
        'keySize' => 'KeySize',
        'parentCaCertId' => 'ParentCaCertId',
        'signAlgorithm' => 'SignAlgorithm',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }

        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->caCertId) {
            $res['CaCertId'] = $this->caCertId;
        }

        if (null !== $this->caCertType) {
            $res['CaCertType'] = $this->caCertType;
        }

        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }

        if (null !== $this->keySize) {
            $res['KeySize'] = $this->keySize;
        }

        if (null !== $this->parentCaCertId) {
            $res['ParentCaCertId'] = $this->parentCaCertId;
        }

        if (null !== $this->signAlgorithm) {
            $res['SignAlgorithm'] = $this->signAlgorithm;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }

        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['CaCertId'])) {
            $model->caCertId = $map['CaCertId'];
        }

        if (isset($map['CaCertType'])) {
            $model->caCertType = $map['CaCertType'];
        }

        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }

        if (isset($map['KeySize'])) {
            $model->keySize = $map['KeySize'];
        }

        if (isset($map['ParentCaCertId'])) {
            $model->parentCaCertId = $map['ParentCaCertId'];
        }

        if (isset($map['SignAlgorithm'])) {
            $model->signAlgorithm = $map['SignAlgorithm'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

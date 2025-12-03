<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class SetDomainCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $caCertificateBody;

    /**
     * @var string
     */
    public $certificateBody;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $certificatePrivateKey;

    /**
     * @var bool
     */
    public $clientCertSDnPassThrough;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var bool
     */
    public $sslOcspCacheEnable;

    /**
     * @var bool
     */
    public $sslOcspEnable;

    /**
     * @var string
     */
    public $sslVerifyDepth;
    protected $_name = [
        'caCertificateBody' => 'CaCertificateBody',
        'certificateBody' => 'CertificateBody',
        'certificateName' => 'CertificateName',
        'certificatePrivateKey' => 'CertificatePrivateKey',
        'clientCertSDnPassThrough' => 'ClientCertSDnPassThrough',
        'domainName' => 'DomainName',
        'groupId' => 'GroupId',
        'securityToken' => 'SecurityToken',
        'sslOcspCacheEnable' => 'SslOcspCacheEnable',
        'sslOcspEnable' => 'SslOcspEnable',
        'sslVerifyDepth' => 'SslVerifyDepth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caCertificateBody) {
            $res['CaCertificateBody'] = $this->caCertificateBody;
        }

        if (null !== $this->certificateBody) {
            $res['CertificateBody'] = $this->certificateBody;
        }

        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }

        if (null !== $this->certificatePrivateKey) {
            $res['CertificatePrivateKey'] = $this->certificatePrivateKey;
        }

        if (null !== $this->clientCertSDnPassThrough) {
            $res['ClientCertSDnPassThrough'] = $this->clientCertSDnPassThrough;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->sslOcspCacheEnable) {
            $res['SslOcspCacheEnable'] = $this->sslOcspCacheEnable;
        }

        if (null !== $this->sslOcspEnable) {
            $res['SslOcspEnable'] = $this->sslOcspEnable;
        }

        if (null !== $this->sslVerifyDepth) {
            $res['SslVerifyDepth'] = $this->sslVerifyDepth;
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
        if (isset($map['CaCertificateBody'])) {
            $model->caCertificateBody = $map['CaCertificateBody'];
        }

        if (isset($map['CertificateBody'])) {
            $model->certificateBody = $map['CertificateBody'];
        }

        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }

        if (isset($map['CertificatePrivateKey'])) {
            $model->certificatePrivateKey = $map['CertificatePrivateKey'];
        }

        if (isset($map['ClientCertSDnPassThrough'])) {
            $model->clientCertSDnPassThrough = $map['ClientCertSDnPassThrough'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['SslOcspCacheEnable'])) {
            $model->sslOcspCacheEnable = $map['SslOcspCacheEnable'];
        }

        if (isset($map['SslOcspEnable'])) {
            $model->sslOcspEnable = $map['SslOcspEnable'];
        }

        if (isset($map['SslVerifyDepth'])) {
            $model->sslVerifyDepth = $map['SslVerifyDepth'];
        }

        return $model;
    }
}

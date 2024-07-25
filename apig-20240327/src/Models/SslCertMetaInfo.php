<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class SslCertMetaInfo extends Model
{
    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var int
     */
    public $certId;

    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $domainMatchCert;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isChainCompleted;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $keySize;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var int
     */
    public $notAfterTimestamp;

    /**
     * @var int
     */
    public $notBeforeTimestamp;

    /**
     * @var string
     */
    public $sans;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $sha2;

    /**
     * @var string
     */
    public $signAlgorithm;
    protected $_name = [
        'algorithm'          => 'algorithm',
        'certId'             => 'certId',
        'certIdentifier'     => 'certIdentifier',
        'certName'           => 'certName',
        'commonName'         => 'commonName',
        'domain'             => 'domain',
        'domainMatchCert'    => 'domainMatchCert',
        'fingerprint'        => 'fingerprint',
        'instanceId'         => 'instanceId',
        'isChainCompleted'   => 'isChainCompleted',
        'issuer'             => 'issuer',
        'keySize'            => 'keySize',
        'md5'                => 'md5',
        'notAfterTimestamp'  => 'notAfterTimestamp',
        'notBeforeTimestamp' => 'notBeforeTimestamp',
        'sans'               => 'sans',
        'serialNo'           => 'serialNo',
        'sha2'               => 'sha2',
        'signAlgorithm'      => 'signAlgorithm',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['algorithm'] = $this->algorithm;
        }
        if (null !== $this->certId) {
            $res['certId'] = $this->certId;
        }
        if (null !== $this->certIdentifier) {
            $res['certIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->certName) {
            $res['certName'] = $this->certName;
        }
        if (null !== $this->commonName) {
            $res['commonName'] = $this->commonName;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->domainMatchCert) {
            $res['domainMatchCert'] = $this->domainMatchCert;
        }
        if (null !== $this->fingerprint) {
            $res['fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->isChainCompleted) {
            $res['isChainCompleted'] = $this->isChainCompleted;
        }
        if (null !== $this->issuer) {
            $res['issuer'] = $this->issuer;
        }
        if (null !== $this->keySize) {
            $res['keySize'] = $this->keySize;
        }
        if (null !== $this->md5) {
            $res['md5'] = $this->md5;
        }
        if (null !== $this->notAfterTimestamp) {
            $res['notAfterTimestamp'] = $this->notAfterTimestamp;
        }
        if (null !== $this->notBeforeTimestamp) {
            $res['notBeforeTimestamp'] = $this->notBeforeTimestamp;
        }
        if (null !== $this->sans) {
            $res['sans'] = $this->sans;
        }
        if (null !== $this->serialNo) {
            $res['serialNo'] = $this->serialNo;
        }
        if (null !== $this->sha2) {
            $res['sha2'] = $this->sha2;
        }
        if (null !== $this->signAlgorithm) {
            $res['signAlgorithm'] = $this->signAlgorithm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SslCertMetaInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['algorithm'])) {
            $model->algorithm = $map['algorithm'];
        }
        if (isset($map['certId'])) {
            $model->certId = $map['certId'];
        }
        if (isset($map['certIdentifier'])) {
            $model->certIdentifier = $map['certIdentifier'];
        }
        if (isset($map['certName'])) {
            $model->certName = $map['certName'];
        }
        if (isset($map['commonName'])) {
            $model->commonName = $map['commonName'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['domainMatchCert'])) {
            $model->domainMatchCert = $map['domainMatchCert'];
        }
        if (isset($map['fingerprint'])) {
            $model->fingerprint = $map['fingerprint'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['isChainCompleted'])) {
            $model->isChainCompleted = $map['isChainCompleted'];
        }
        if (isset($map['issuer'])) {
            $model->issuer = $map['issuer'];
        }
        if (isset($map['keySize'])) {
            $model->keySize = $map['keySize'];
        }
        if (isset($map['md5'])) {
            $model->md5 = $map['md5'];
        }
        if (isset($map['notAfterTimestamp'])) {
            $model->notAfterTimestamp = $map['notAfterTimestamp'];
        }
        if (isset($map['notBeforeTimestamp'])) {
            $model->notBeforeTimestamp = $map['notBeforeTimestamp'];
        }
        if (isset($map['sans'])) {
            $model->sans = $map['sans'];
        }
        if (isset($map['serialNo'])) {
            $model->serialNo = $map['serialNo'];
        }
        if (isset($map['sha2'])) {
            $model->sha2 = $map['sha2'];
        }
        if (isset($map['signAlgorithm'])) {
            $model->signAlgorithm = $map['signAlgorithm'];
        }

        return $model;
    }
}

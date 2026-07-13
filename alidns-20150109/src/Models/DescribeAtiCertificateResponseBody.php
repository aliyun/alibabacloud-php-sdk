<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeAtiCertificateResponseBody\accessDeniedDetail;

class DescribeAtiCertificateResponseBody extends Model
{
    /**
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $agentHost;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $certPem;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $notAfter;

    /**
     * @var string
     */
    public $notBefore;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $san;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $tlsaFingerprint;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'agentHost' => 'AgentHost',
        'agentId' => 'AgentId',
        'algorithm' => 'Algorithm',
        'certPem' => 'CertPem',
        'certType' => 'CertType',
        'createTimestamp' => 'CreateTimestamp',
        'issuer' => 'Issuer',
        'notAfter' => 'NotAfter',
        'notBefore' => 'NotBefore',
        'requestId' => 'RequestId',
        'san' => 'San',
        'serialNumber' => 'SerialNumber',
        'source' => 'Source',
        'status' => 'Status',
        'subject' => 'Subject',
        'tlsaFingerprint' => 'TlsaFingerprint',
        'updateTimestamp' => 'UpdateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->accessDeniedDetail) {
            $this->accessDeniedDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toArray($noStream) : $this->accessDeniedDetail;
        }

        if (null !== $this->agentHost) {
            $res['AgentHost'] = $this->agentHost;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }

        if (null !== $this->certPem) {
            $res['CertPem'] = $this->certPem;
        }

        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }

        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->san) {
            $res['San'] = $this->san;
        }

        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }

        if (null !== $this->tlsaFingerprint) {
            $res['TlsaFingerprint'] = $this->tlsaFingerprint;
        }

        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = accessDeniedDetail::fromMap($map['AccessDeniedDetail']);
        }

        if (isset($map['AgentHost'])) {
            $model->agentHost = $map['AgentHost'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }

        if (isset($map['CertPem'])) {
            $model->certPem = $map['CertPem'];
        }

        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }

        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['San'])) {
            $model->san = $map['San'];
        }

        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        if (isset($map['TlsaFingerprint'])) {
            $model->tlsaFingerprint = $map['TlsaFingerprint'];
        }

        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}

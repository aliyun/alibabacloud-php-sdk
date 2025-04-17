<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListResponseBody\certificateListModel\certList;

use AlibabaCloud\Dara\Model;

class cert extends Model
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
    public $common;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $domainMatchCert;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var string
     */
    public $signAlgorithm;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'certId' => 'CertId',
        'certIdentifier' => 'CertIdentifier',
        'certName' => 'CertName',
        'common' => 'Common',
        'createTime' => 'CreateTime',
        'domainMatchCert' => 'DomainMatchCert',
        'endTime' => 'EndTime',
        'fingerprint' => 'Fingerprint',
        'instanceId' => 'InstanceId',
        'issuer' => 'Issuer',
        'lastTime' => 'LastTime',
        'signAlgorithm' => 'SignAlgorithm',
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

        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }

        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->domainMatchCert) {
            $res['DomainMatchCert'] = $this->domainMatchCert;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        if (null !== $this->signAlgorithm) {
            $res['SignAlgorithm'] = $this->signAlgorithm;
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

        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }

        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DomainMatchCert'])) {
            $model->domainMatchCert = $map['DomainMatchCert'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        if (isset($map['SignAlgorithm'])) {
            $model->signAlgorithm = $map['SignAlgorithm'];
        }

        return $model;
    }
}

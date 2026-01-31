<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class instanceList extends Model
{
    /**
     * @var string
     */
    public $autoReissue;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var int
     */
    public $certificateId;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var int
     */
    public $certificateNotAfter;

    /**
     * @var int
     */
    public $certificateRevokeTime;

    /**
     * @var string
     */
    public $certificateStatus;

    /**
     * @var string
     */
    public $certificateType;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $fullDomainCount;

    /**
     * @var int
     */
    public $instanceEndTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceStartTime;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $keyAlgorithm;

    /**
     * @var int
     */
    public $orderEndTime;

    /**
     * @var int
     */
    public $orderStartTime;

    /**
     * @var string
     */
    public $pendingResult;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $wildcardDomainCount;
    protected $_name = [
        'autoReissue' => 'AutoReissue',
        'brand' => 'Brand',
        'certIdentifier' => 'CertIdentifier',
        'certificateId' => 'CertificateId',
        'certificateName' => 'CertificateName',
        'certificateNotAfter' => 'CertificateNotAfter',
        'certificateRevokeTime' => 'CertificateRevokeTime',
        'certificateStatus' => 'CertificateStatus',
        'certificateType' => 'CertificateType',
        'domain' => 'Domain',
        'fullDomainCount' => 'FullDomainCount',
        'instanceEndTime' => 'InstanceEndTime',
        'instanceId' => 'InstanceId',
        'instanceStartTime' => 'InstanceStartTime',
        'instanceType' => 'InstanceType',
        'keyAlgorithm' => 'KeyAlgorithm',
        'orderEndTime' => 'OrderEndTime',
        'orderStartTime' => 'OrderStartTime',
        'pendingResult' => 'PendingResult',
        'spec' => 'Spec',
        'status' => 'Status',
        'wildcardDomainCount' => 'WildcardDomainCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoReissue) {
            $res['AutoReissue'] = $this->autoReissue;
        }

        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }

        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }

        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }

        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }

        if (null !== $this->certificateNotAfter) {
            $res['CertificateNotAfter'] = $this->certificateNotAfter;
        }

        if (null !== $this->certificateRevokeTime) {
            $res['CertificateRevokeTime'] = $this->certificateRevokeTime;
        }

        if (null !== $this->certificateStatus) {
            $res['CertificateStatus'] = $this->certificateStatus;
        }

        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->fullDomainCount) {
            $res['FullDomainCount'] = $this->fullDomainCount;
        }

        if (null !== $this->instanceEndTime) {
            $res['InstanceEndTime'] = $this->instanceEndTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceStartTime) {
            $res['InstanceStartTime'] = $this->instanceStartTime;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->keyAlgorithm) {
            $res['KeyAlgorithm'] = $this->keyAlgorithm;
        }

        if (null !== $this->orderEndTime) {
            $res['OrderEndTime'] = $this->orderEndTime;
        }

        if (null !== $this->orderStartTime) {
            $res['OrderStartTime'] = $this->orderStartTime;
        }

        if (null !== $this->pendingResult) {
            $res['PendingResult'] = $this->pendingResult;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->wildcardDomainCount) {
            $res['WildcardDomainCount'] = $this->wildcardDomainCount;
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
        if (isset($map['AutoReissue'])) {
            $model->autoReissue = $map['AutoReissue'];
        }

        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }

        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }

        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }

        if (isset($map['CertificateNotAfter'])) {
            $model->certificateNotAfter = $map['CertificateNotAfter'];
        }

        if (isset($map['CertificateRevokeTime'])) {
            $model->certificateRevokeTime = $map['CertificateRevokeTime'];
        }

        if (isset($map['CertificateStatus'])) {
            $model->certificateStatus = $map['CertificateStatus'];
        }

        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['FullDomainCount'])) {
            $model->fullDomainCount = $map['FullDomainCount'];
        }

        if (isset($map['InstanceEndTime'])) {
            $model->instanceEndTime = $map['InstanceEndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceStartTime'])) {
            $model->instanceStartTime = $map['InstanceStartTime'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['KeyAlgorithm'])) {
            $model->keyAlgorithm = $map['KeyAlgorithm'];
        }

        if (isset($map['OrderEndTime'])) {
            $model->orderEndTime = $map['OrderEndTime'];
        }

        if (isset($map['OrderStartTime'])) {
            $model->orderStartTime = $map['OrderStartTime'];
        }

        if (isset($map['PendingResult'])) {
            $model->pendingResult = $map['PendingResult'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WildcardDomainCount'])) {
            $model->wildcardDomainCount = $map['WildcardDomainCount'];
        }

        return $model;
    }
}

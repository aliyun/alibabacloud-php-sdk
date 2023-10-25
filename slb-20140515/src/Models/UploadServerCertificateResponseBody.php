<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\UploadServerCertificateResponseBody\subjectAlternativeNames;
use AlibabaCloud\Tea\Model;

class UploadServerCertificateResponseBody extends Model
{
    /**
     * @description The AliCloud certificate ID.
     *
     * @example 775****
     *
     * @var string
     */
    public $aliCloudCertificateId;

    /**
     * @description The AliCloud certificate name.
     *
     * @example cloudcertificate****
     *
     * @var string
     */
    public $aliCloudCertificateName;

    /**
     * @description The domain name of the CA certificate.
     *
     * @example example.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The time when the CA certificate is uploaded.
     *
     * @example 2022-02-21T02:49:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The timestamp generated when the CA certificate is uploaded.
     *
     * @example 1504147745000
     *
     * @var int
     */
    public $createTimeStamp;

    /**
     * @description The time when the CA certificate expires.
     *
     * @example 2022-10-18T23:59:59Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The timestamp generated when the CA certificate expires.
     *
     * @example 1504147745000
     *
     * @var int
     */
    public $expireTimeStamp;

    /**
     * @description The fingerprint of the CA certificate.
     *
     * @example 8f:7d:cb:e5:f8:c8:33:9c:17:65:c1:92:30:9e:45:55:9c:3a:85:60
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @description Indicates whether the certificate is provided by Alibaba Cloud Certificate Management Service. Valid values:
     * - **0**: The certificate is not provided by Alibaba Cloud Certificate Management Service.
     * - **1**: The certificate is provided by Alibaba Cloud Certificate Management Service.
     * @example 0
     *
     * @var int
     */
    public $isAliCloudCertificate;

    /**
     * @description The ID of the region where the Classic Load Balancer (CLB) instance is deployed.
     *
     * You can call the [DescribeRegions](~~27584~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 365F4154-92F6-4AE4-92F8-7FF34B540710
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource group ID.
     *
     * @example rg-atstuj3rt****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the server certificate.
     *
     * @example 1321932713******_17f1b4b696b_1114720822_-1671******
     *
     * @var string
     */
    public $serverCertificateId;

    /**
     * @description The name of the server certificate.
     *
     * The name must be 1 to 80 characters in length. It must start with an English letter. It can contain letters, numbers, periods (.), underscores (\_), and hyphens (-).
     * @example mycert01
     *
     * @var string
     */
    public $serverCertificateName;

    /**
     * @description The subject alternative names.
     *
     * A domain name list is supported. A maximum of 10 domain names are supported.
     * @var subjectAlternativeNames
     */
    public $subjectAlternativeNames;
    protected $_name = [
        'aliCloudCertificateId'   => 'AliCloudCertificateId',
        'aliCloudCertificateName' => 'AliCloudCertificateName',
        'commonName'              => 'CommonName',
        'createTime'              => 'CreateTime',
        'createTimeStamp'         => 'CreateTimeStamp',
        'expireTime'              => 'ExpireTime',
        'expireTimeStamp'         => 'ExpireTimeStamp',
        'fingerprint'             => 'Fingerprint',
        'isAliCloudCertificate'   => 'IsAliCloudCertificate',
        'regionId'                => 'RegionId',
        'requestId'               => 'RequestId',
        'resourceGroupId'         => 'ResourceGroupId',
        'serverCertificateId'     => 'ServerCertificateId',
        'serverCertificateName'   => 'ServerCertificateName',
        'subjectAlternativeNames' => 'SubjectAlternativeNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliCloudCertificateId) {
            $res['AliCloudCertificateId'] = $this->aliCloudCertificateId;
        }
        if (null !== $this->aliCloudCertificateName) {
            $res['AliCloudCertificateName'] = $this->aliCloudCertificateName;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expireTimeStamp) {
            $res['ExpireTimeStamp'] = $this->expireTimeStamp;
        }
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->isAliCloudCertificate) {
            $res['IsAliCloudCertificate'] = $this->isAliCloudCertificate;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->serverCertificateName) {
            $res['ServerCertificateName'] = $this->serverCertificateName;
        }
        if (null !== $this->subjectAlternativeNames) {
            $res['SubjectAlternativeNames'] = null !== $this->subjectAlternativeNames ? $this->subjectAlternativeNames->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadServerCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliCloudCertificateId'])) {
            $model->aliCloudCertificateId = $map['AliCloudCertificateId'];
        }
        if (isset($map['AliCloudCertificateName'])) {
            $model->aliCloudCertificateName = $map['AliCloudCertificateName'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExpireTimeStamp'])) {
            $model->expireTimeStamp = $map['ExpireTimeStamp'];
        }
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['IsAliCloudCertificate'])) {
            $model->isAliCloudCertificate = $map['IsAliCloudCertificate'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['ServerCertificateName'])) {
            $model->serverCertificateName = $map['ServerCertificateName'];
        }
        if (isset($map['SubjectAlternativeNames'])) {
            $model->subjectAlternativeNames = subjectAlternativeNames::fromMap($map['SubjectAlternativeNames']);
        }

        return $model;
    }
}

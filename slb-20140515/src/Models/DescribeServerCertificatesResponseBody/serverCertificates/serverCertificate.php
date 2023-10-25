<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponseBody\serverCertificates;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponseBody\serverCertificates\serverCertificate\subjectAlternativeNames;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponseBody\serverCertificates\serverCertificate\tags;
use AlibabaCloud\Tea\Model;

class serverCertificate extends Model
{
    /**
     * @description The ID of the server certificate from Alibaba Cloud Certificate Management Service.
     *
     * @example 7309********_15d97e7709a_71445759hr_789289731
     *
     * @var string
     */
    public $aliCloudCertificateId;

    /**
     * @description The name of the server certificate from Alibaba Cloud Certificate Management Service.
     *
     * @example testcertkey
     *
     * @var string
     */
    public $aliCloudCertificateName;

    /**
     * @description The domain name of the certificate. The domain name is specified in the `CommonName` field.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The time when the server certificate is uploaded.
     *
     * @example 2021-08-31T02:49:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The timestamp generated when the server certificate is uploaded.
     *
     * @example 1504147745000
     *
     * @var int
     */
    public $createTimeStamp;

    /**
     * @description The expiration time.
     *
     * @example 2023-01-26T23:59:59Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The timestamp that indicates when the certificate expires.
     *
     * @example 15041477450
     *
     * @var int
     */
    public $expireTimeStamp;

    /**
     * @description The fingerprint of the server certificate.
     *
     * @example 68:08:1a:f8:2c:97:69:a3:a1:e6:16:41:4b:ca:4f:5d:ee:a5:ef:0d
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @description Indicates whether the server certificate is from Alibaba Cloud Certificate Management Service. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 0
     *
     * @var int
     */
    public $isAliCloudCertificate;

    /**
     * @description The ID of the region where the server certificate is created.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the server certificate.
     *
     * @example 123157********_166f8204689_1714763408_709981430-cn-east-hangzhou-02
     *
     * @var string
     */
    public $serverCertificateId;

    /**
     * @description The name of the server certificate.
     *
     * @example slb
     *
     * @var string
     */
    public $serverCertificateName;

    /**
     * @description The list of alternative domain names of the server certificate. The alternative domain names are specified in the `Subject Alternative Name` field of the server certificate.
     *
     * @var subjectAlternativeNames
     */
    public $subjectAlternativeNames;

    /**
     * @description The tags.
     *
     * @var tags
     */
    public $tags;
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
        'resourceGroupId'         => 'ResourceGroupId',
        'serverCertificateId'     => 'ServerCertificateId',
        'serverCertificateName'   => 'ServerCertificateName',
        'subjectAlternativeNames' => 'SubjectAlternativeNames',
        'tags'                    => 'Tags',
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
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverCertificate
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
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\UploadServerCertificateResponseBody\subjectAlternativeNames;
use AlibabaCloud\Tea\Model;

class UploadServerCertificateResponseBody extends Model
{
    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var int
     */
    public $expireTimeStamp;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var subjectAlternativeNames
     */
    public $subjectAlternativeNames;

    /**
     * @var string
     */
    public $aliCloudCertificateId;

    /**
     * @var string
     */
    public $aliCloudCertificateName;

    /**
     * @var int
     */
    public $isAliCloudCertificate;

    /**
     * @var string
     */
    public $serverCertificateId;

    /**
     * @var string
     */
    public $serverCertificateName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $createTimeStamp;

    /**
     * @var string
     */
    public $commonName;
    protected $_name = [
        'fingerprint'             => 'Fingerprint',
        'expireTimeStamp'         => 'ExpireTimeStamp',
        'requestId'               => 'RequestId',
        'resourceGroupId'         => 'ResourceGroupId',
        'createTime'              => 'CreateTime',
        'subjectAlternativeNames' => 'SubjectAlternativeNames',
        'aliCloudCertificateId'   => 'AliCloudCertificateId',
        'aliCloudCertificateName' => 'AliCloudCertificateName',
        'isAliCloudCertificate'   => 'IsAliCloudCertificate',
        'serverCertificateId'     => 'ServerCertificateId',
        'serverCertificateName'   => 'ServerCertificateName',
        'regionId'                => 'RegionId',
        'expireTime'              => 'ExpireTime',
        'createTimeStamp'         => 'CreateTimeStamp',
        'commonName'              => 'CommonName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->expireTimeStamp) {
            $res['ExpireTimeStamp'] = $this->expireTimeStamp;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->subjectAlternativeNames) {
            $res['SubjectAlternativeNames'] = null !== $this->subjectAlternativeNames ? $this->subjectAlternativeNames->toMap() : null;
        }
        if (null !== $this->aliCloudCertificateId) {
            $res['AliCloudCertificateId'] = $this->aliCloudCertificateId;
        }
        if (null !== $this->aliCloudCertificateName) {
            $res['AliCloudCertificateName'] = $this->aliCloudCertificateName;
        }
        if (null !== $this->isAliCloudCertificate) {
            $res['IsAliCloudCertificate'] = $this->isAliCloudCertificate;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->serverCertificateName) {
            $res['ServerCertificateName'] = $this->serverCertificateName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
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
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['ExpireTimeStamp'])) {
            $model->expireTimeStamp = $map['ExpireTimeStamp'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SubjectAlternativeNames'])) {
            $model->subjectAlternativeNames = subjectAlternativeNames::fromMap($map['SubjectAlternativeNames']);
        }
        if (isset($map['AliCloudCertificateId'])) {
            $model->aliCloudCertificateId = $map['AliCloudCertificateId'];
        }
        if (isset($map['AliCloudCertificateName'])) {
            $model->aliCloudCertificateName = $map['AliCloudCertificateName'];
        }
        if (isset($map['IsAliCloudCertificate'])) {
            $model->isAliCloudCertificate = $map['IsAliCloudCertificate'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['ServerCertificateName'])) {
            $model->serverCertificateName = $map['ServerCertificateName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        return $model;
    }
}

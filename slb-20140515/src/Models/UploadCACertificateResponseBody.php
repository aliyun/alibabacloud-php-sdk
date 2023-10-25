<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class UploadCACertificateResponseBody extends Model
{
    /**
     * @description The name of the CA certificate.
     *
     * @example 139a00604ad-cn-east-hangzhou-01
     *
     * @var string
     */
    public $CACertificateId;

    /**
     * @description The domain name of the CA certificate.
     *
     * @example mycacert01
     *
     * @var string
     */
    public $CACertificateName;

    /**
     * @description The fingerprint of the CA certificate.
     *
     * @example .example.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The time when the CA certificate expires.
     *
     * @example 2017-08-31T02:49:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The name of the CA certificate.
     *
     * @example 1504147745000
     *
     * @var int
     */
    public $createTimeStamp;

    /**
     * @description The timestamp generated when the CA certificate is uploaded.
     *
     * @example 2024-11-21T06:04:25Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The ID of the enterprise resource group.
     *
     * @example 1732169065000
     *
     * @var int
     */
    public $expireTimeStamp;

    /**
     * @description The ID of the request.
     *
     * @example 02:DF:AB:ED
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @description The ID of the enterprise resource group.
     *
     * @example 365F4154-92F6-4AE4-92F8-7FF34B540710
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the CA certificate is uploaded.
     *
     * @example rg-atstuj3rtoptyui
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'CACertificateId'   => 'CACertificateId',
        'CACertificateName' => 'CACertificateName',
        'commonName'        => 'CommonName',
        'createTime'        => 'CreateTime',
        'createTimeStamp'   => 'CreateTimeStamp',
        'expireTime'        => 'ExpireTime',
        'expireTimeStamp'   => 'ExpireTimeStamp',
        'fingerprint'       => 'Fingerprint',
        'requestId'         => 'RequestId',
        'resourceGroupId'   => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CACertificateId) {
            $res['CACertificateId'] = $this->CACertificateId;
        }
        if (null !== $this->CACertificateName) {
            $res['CACertificateName'] = $this->CACertificateName;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadCACertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CACertificateId'])) {
            $model->CACertificateId = $map['CACertificateId'];
        }
        if (isset($map['CACertificateName'])) {
            $model->CACertificateName = $map['CACertificateName'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class UploadCACertificateResponseBody extends Model
{
    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $expireTimeStamp;

    /**
     * @var string
     */
    public $CACertificateId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $CACertificateName;

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
        'fingerprint'       => 'Fingerprint',
        'requestId'         => 'RequestId',
        'resourceGroupId'   => 'ResourceGroupId',
        'expireTimeStamp'   => 'ExpireTimeStamp',
        'CACertificateId'   => 'CACertificateId',
        'createTime'        => 'CreateTime',
        'CACertificateName' => 'CACertificateName',
        'expireTime'        => 'ExpireTime',
        'createTimeStamp'   => 'CreateTimeStamp',
        'commonName'        => 'CommonName',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->expireTimeStamp) {
            $res['ExpireTimeStamp'] = $this->expireTimeStamp;
        }
        if (null !== $this->CACertificateId) {
            $res['CACertificateId'] = $this->CACertificateId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->CACertificateName) {
            $res['CACertificateName'] = $this->CACertificateName;
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
     * @return UploadCACertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ExpireTimeStamp'])) {
            $model->expireTimeStamp = $map['ExpireTimeStamp'];
        }
        if (isset($map['CACertificateId'])) {
            $model->CACertificateId = $map['CACertificateId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CACertificateName'])) {
            $model->CACertificateName = $map['CACertificateName'];
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

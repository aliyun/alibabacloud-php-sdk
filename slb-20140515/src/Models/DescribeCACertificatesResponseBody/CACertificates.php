<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeCACertificatesResponseBody;

use AlibabaCloud\Tea\Model;

class CACertificates extends Model
{
    /**
     * @var int
     */
    public $createTimeStamp;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $createTime;

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
    public $regionId;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $CACertificateName;
    protected $_name = [
        'createTimeStamp'   => 'CreateTimeStamp',
        'expireTime'        => 'ExpireTime',
        'createTime'        => 'CreateTime',
        'expireTimeStamp'   => 'ExpireTimeStamp',
        'CACertificateId'   => 'CACertificateId',
        'regionId'          => 'RegionId',
        'fingerprint'       => 'Fingerprint',
        'resourceGroupId'   => 'ResourceGroupId',
        'commonName'        => 'CommonName',
        'CACertificateName' => 'CACertificateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTimeStamp) {
            $res['ExpireTimeStamp'] = $this->expireTimeStamp;
        }
        if (null !== $this->CACertificateId) {
            $res['CACertificateId'] = $this->CACertificateId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->CACertificateName) {
            $res['CACertificateName'] = $this->CACertificateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CACertificates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTimeStamp'])) {
            $model->expireTimeStamp = $map['ExpireTimeStamp'];
        }
        if (isset($map['CACertificateId'])) {
            $model->CACertificateId = $map['CACertificateId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['CACertificateName'])) {
            $model->CACertificateName = $map['CACertificateName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeCACertificatesResponseBody\CACertificates;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeCACertificatesResponseBody\CACertificates\CACertificate\tags;
use AlibabaCloud\Tea\Model;

class CACertificate extends Model
{
    /**
     * @description The CA certificate ID.
     *
     * @example 139a00604bd-cn-east-hangzho****
     *
     * @var string
     */
    public $CACertificateId;

    /**
     * @description The CA certificate name.
     *
     * @example test
     *
     * @var string
     */
    public $CACertificateName;

    /**
     * @description The domain name of the CA certificate.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The time when the CA certificate was created. The time is in the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2021-08-31T02:49:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The timestamp when the CA certificate was created. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1504147745000
     *
     * @var int
     */
    public $createTimeStamp;

    /**
     * @description The time when the CA certificate expires. The time is in the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2024-11-21T06:04:25Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The timestamp that indicates when the CA certificate expires. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1732169065000
     *
     * @var int
     */
    public $expireTimeStamp;

    /**
     * @description The fingerprint of the CA certificate.
     *
     * @example 79:43:fb:7d:a4:7f:44:32:61:16:57:17:e3:e8:b7:36:03:57:f6:89
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @description The region of the CA certificate.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tag.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'CACertificateId'   => 'CACertificateId',
        'CACertificateName' => 'CACertificateName',
        'commonName'        => 'CommonName',
        'createTime'        => 'CreateTime',
        'createTimeStamp'   => 'CreateTimeStamp',
        'expireTime'        => 'ExpireTime',
        'expireTimeStamp'   => 'ExpireTimeStamp',
        'fingerprint'       => 'Fingerprint',
        'regionId'          => 'RegionId',
        'resourceGroupId'   => 'ResourceGroupId',
        'tags'              => 'Tags',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CACertificate
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}

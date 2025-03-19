<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateSupplierInformationRequest;

use AlibabaCloud\Tea\Model;

class deliverySettings extends Model
{
    /**
     * @description The name of the OSS bucket.
     *
     * @example mybucket
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @description Specifies whether to enable screencast delivery to Object Storage Service (OSS). Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $ossEnabled;

    /**
     * @description The number of days for which the screencasts are saved.
     *
     * @example 7
     *
     * @var int
     */
    public $ossExpirationDays;

    /**
     * @description The OSS path.
     *
     * @example path1/path2/
     *
     * @var string
     */
    public $ossPath;
    protected $_name = [
        'ossBucketName' => 'OssBucketName',
        'ossEnabled' => 'OssEnabled',
        'ossExpirationDays' => 'OssExpirationDays',
        'ossPath' => 'OssPath',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossEnabled) {
            $res['OssEnabled'] = $this->ossEnabled;
        }
        if (null !== $this->ossExpirationDays) {
            $res['OssExpirationDays'] = $this->ossExpirationDays;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deliverySettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['OssEnabled'])) {
            $model->ossEnabled = $map['OssEnabled'];
        }
        if (isset($map['OssExpirationDays'])) {
            $model->ossExpirationDays = $map['OssExpirationDays'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }

        return $model;
    }
}

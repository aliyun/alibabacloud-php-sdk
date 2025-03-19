<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\UpdateUserInformationRequest;

use AlibabaCloud\Tea\Model;

class deliverySettings extends Model
{
    /**
     * @description Specifies whether to enable screencast delivery to OSS. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $actiontrailDeliveryToOssEnabled;

    /**
     * @description The name of the OSS bucket.
     *
     * @example "mybucket"
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
     * @example true
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
     * @example "path1/path2/"
     *
     * @var string
     */
    public $ossPath;
    protected $_name = [
        'actiontrailDeliveryToOssEnabled' => 'ActiontrailDeliveryToOssEnabled',
        'ossBucketName' => 'OssBucketName',
        'ossEnabled' => 'OssEnabled',
        'ossExpirationDays' => 'OssExpirationDays',
        'ossPath' => 'OssPath',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actiontrailDeliveryToOssEnabled) {
            $res['ActiontrailDeliveryToOssEnabled'] = $this->actiontrailDeliveryToOssEnabled;
        }
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
        if (isset($map['ActiontrailDeliveryToOssEnabled'])) {
            $model->actiontrailDeliveryToOssEnabled = $map['ActiontrailDeliveryToOssEnabled'];
        }
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

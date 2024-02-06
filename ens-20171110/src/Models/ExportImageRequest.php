<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ExportImageRequest extends Model
{
    /**
     * @description The ID of the image.
     *
     * @example m-5ragaz3s74b7go8ks7jp9****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The OSS bucket to which you want to export the image.
     *
     * @example whxyl****
     *
     * @var string
     */
    public $OSSBucket;

    /**
     * @description The prefix of the object as which you want to store the image in the OSS bucket. The prefix must be 1 to 30 characters in length and can contain digits and letters.
     *
     * @example dataCenter/972****\/
     *
     * @var string
     */
    public $OSSPrefix;

    /**
     * @description The ID of the region.
     *
     * Valid values:
     *
     *   cn-beijing
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $OSSRegionId;

    /**
     * @description The name of the Resource Access Management (RAM) role.
     *
     * @example AliyunMNSLoggingRole
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'imageId'     => 'ImageId',
        'OSSBucket'   => 'OSSBucket',
        'OSSPrefix'   => 'OSSPrefix',
        'OSSRegionId' => 'OSSRegionId',
        'roleName'    => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->OSSBucket) {
            $res['OSSBucket'] = $this->OSSBucket;
        }
        if (null !== $this->OSSPrefix) {
            $res['OSSPrefix'] = $this->OSSPrefix;
        }
        if (null !== $this->OSSRegionId) {
            $res['OSSRegionId'] = $this->OSSRegionId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['OSSBucket'])) {
            $model->OSSBucket = $map['OSSBucket'];
        }
        if (isset($map['OSSPrefix'])) {
            $model->OSSPrefix = $map['OSSPrefix'];
        }
        if (isset($map['OSSRegionId'])) {
            $model->OSSRegionId = $map['OSSRegionId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}

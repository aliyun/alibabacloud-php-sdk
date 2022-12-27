<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ExportImageRequest extends Model
{
    /**
     * @example m-5ragaz3s74b7go8ks7jp9rch1
     *
     * @var string
     */
    public $imageId;

    /**
     * @example whxyl
     *
     * @var string
     */
    public $OSSBucket;

    /**
     * @example dataCenter/9724208/
     *
     * @var string
     */
    public $OSSPrefix;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $OSSRegionId;

    /**
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

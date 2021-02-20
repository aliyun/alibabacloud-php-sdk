<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ExportImageRequest extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $OSSBucket;

    /**
     * @var string
     */
    public $OSSRegionId;

    /**
     * @var string
     */
    public $OSSPrefix;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'version'     => 'Version',
        'imageId'     => 'ImageId',
        'OSSBucket'   => 'OSSBucket',
        'OSSRegionId' => 'OSSRegionId',
        'OSSPrefix'   => 'OSSPrefix',
        'roleName'    => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->OSSBucket) {
            $res['OSSBucket'] = $this->OSSBucket;
        }
        if (null !== $this->OSSRegionId) {
            $res['OSSRegionId'] = $this->OSSRegionId;
        }
        if (null !== $this->OSSPrefix) {
            $res['OSSPrefix'] = $this->OSSPrefix;
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['OSSBucket'])) {
            $model->OSSBucket = $map['OSSBucket'];
        }
        if (isset($map['OSSRegionId'])) {
            $model->OSSRegionId = $map['OSSRegionId'];
        }
        if (isset($map['OSSPrefix'])) {
            $model->OSSPrefix = $map['OSSPrefix'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}

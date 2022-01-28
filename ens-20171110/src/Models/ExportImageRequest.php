<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ExportImageRequest extends Model
{
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
    public $OSSPrefix;

    /**
     * @var string
     */
    public $OSSRegionId;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'imageId'     => 'ImageId',
        'OSSBucket'   => 'OSSBucket',
        'OSSPrefix'   => 'OSSPrefix',
        'OSSRegionId' => 'OSSRegionId',
        'roleName'    => 'RoleName',
        'version'     => 'Version',
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
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

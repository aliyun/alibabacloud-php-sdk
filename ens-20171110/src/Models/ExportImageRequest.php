<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

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
    protected $_name = [
        'imageId' => 'ImageId',
        'OSSBucket' => 'OSSBucket',
        'OSSPrefix' => 'OSSPrefix',
        'OSSRegionId' => 'OSSRegionId',
        'roleName' => 'RoleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

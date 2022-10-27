<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetUserImageRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $containerType;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $imagePath;

    /**
     * @var string
     */
    public $OSSBucket;

    /**
     * @var string
     */
    public $OSSEndPoint;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'containerType' => 'ContainerType',
        'imageName'     => 'ImageName',
        'imagePath'     => 'ImagePath',
        'OSSBucket'     => 'OSSBucket',
        'OSSEndPoint'   => 'OSSEndPoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->containerType) {
            $res['ContainerType'] = $this->containerType;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imagePath) {
            $res['ImagePath'] = $this->imagePath;
        }
        if (null !== $this->OSSBucket) {
            $res['OSSBucket'] = $this->OSSBucket;
        }
        if (null !== $this->OSSEndPoint) {
            $res['OSSEndPoint'] = $this->OSSEndPoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ContainerType'])) {
            $model->containerType = $map['ContainerType'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImagePath'])) {
            $model->imagePath = $map['ImagePath'];
        }
        if (isset($map['OSSBucket'])) {
            $model->OSSBucket = $map['OSSBucket'];
        }
        if (isset($map['OSSEndPoint'])) {
            $model->OSSEndPoint = $map['OSSEndPoint'];
        }

        return $model;
    }
}

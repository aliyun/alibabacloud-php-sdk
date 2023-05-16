<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImagesResponseBody\images;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @example 2017-12-08T12:10:03Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @example Ubuntu_16.04
     *
     * @var string
     */
    public $imageName;

    /**
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @example 40
     *
     * @var string
     */
    public $imageSize;

    /**
     * @example centos
     *
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'architecture'    => 'Architecture',
        'creationTime'    => 'CreationTime',
        'imageId'         => 'ImageId',
        'imageName'       => 'ImageName',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'imageSize'       => 'ImageSize',
        'platform'        => 'Platform',
        'snapshotId'      => 'SnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}

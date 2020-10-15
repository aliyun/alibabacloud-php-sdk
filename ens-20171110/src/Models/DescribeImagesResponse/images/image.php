<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImagesResponse\images;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $imageSize;
    protected $_name = [
        'imageId'         => 'ImageId',
        'imageName'       => 'ImageName',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'platform'        => 'Platform',
        'architecture'    => 'Architecture',
        'creationTime'    => 'CreationTime',
        'imageSize'       => 'ImageSize',
    ];

    public function validate()
    {
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('imageName', $this->imageName, true);
        Model::validateRequired('imageOwnerAlias', $this->imageOwnerAlias, true);
        Model::validateRequired('platform', $this->platform, true);
        Model::validateRequired('architecture', $this->architecture, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('imageSize', $this->imageSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }

        return $model;
    }
}

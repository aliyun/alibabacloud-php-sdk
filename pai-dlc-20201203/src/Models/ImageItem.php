<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ImageItem extends Model
{
    /**
     * @example gpu
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @example ken
     *
     * @var string
     */
    public $authorId;

    /**
     * @example PyTorchJob
     *
     * @var string
     */
    public $framework;

    /**
     * @example Community
     *
     * @var string
     */
    public $imageProviderType;

    /**
     * @example tensorflow-training:2.3-cpu-py36-ubuntu18.04
     *
     * @var string
     */
    public $imageTag;

    /**
     * @example registry.cn-beijing.aliyuncs.com/pai-dlc/tensorflow-training:2.3-cpu-py36-ubuntu18.04
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example registry-vpc.cn-beijing.aliyuncs.com/pai-dlc/tensorflow-training:2.3-cpu-py36-ubuntu18.04
     *
     * @var string
     */
    public $imageUrlVpc;
    protected $_name = [
        'acceleratorType'   => 'AcceleratorType',
        'authorId'          => 'AuthorId',
        'framework'         => 'Framework',
        'imageProviderType' => 'ImageProviderType',
        'imageTag'          => 'ImageTag',
        'imageUrl'          => 'ImageUrl',
        'imageUrlVpc'       => 'ImageUrlVpc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }
        if (null !== $this->authorId) {
            $res['AuthorId'] = $this->authorId;
        }
        if (null !== $this->framework) {
            $res['Framework'] = $this->framework;
        }
        if (null !== $this->imageProviderType) {
            $res['ImageProviderType'] = $this->imageProviderType;
        }
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->imageUrlVpc) {
            $res['ImageUrlVpc'] = $this->imageUrlVpc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }
        if (isset($map['AuthorId'])) {
            $model->authorId = $map['AuthorId'];
        }
        if (isset($map['Framework'])) {
            $model->framework = $map['Framework'];
        }
        if (isset($map['ImageProviderType'])) {
            $model->imageProviderType = $map['ImageProviderType'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['ImageUrlVpc'])) {
            $model->imageUrlVpc = $map['ImageUrlVpc'];
        }

        return $model;
    }
}

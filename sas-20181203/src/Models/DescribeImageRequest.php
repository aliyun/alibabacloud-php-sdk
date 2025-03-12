<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageRequest extends Model
{
    /**
     * @description The instance ID of the image.
     *
     * This parameter is required.
     * @example cri-hfs6gaawhyu6****
     *
     * @var string
     */
    public $imageInstanceId;

    /**
     * @description The region ID of the image.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $imageRegionId;

    /**
     * @description The ID of the image repository.
     *
     * This parameter is required.
     * @example crr-7i88t7lx3fmf****
     *
     * @var string
     */
    public $imageRepoId;

    /**
     * @description The tag that is added to the image.
     *
     * This parameter is required.
     * @example 1.8.0.15
     *
     * @var string
     */
    public $imageTag;
    protected $_name = [
        'imageInstanceId' => 'ImageInstanceId',
        'imageRegionId'   => 'ImageRegionId',
        'imageRepoId'     => 'ImageRepoId',
        'imageTag'        => 'ImageTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageInstanceId) {
            $res['ImageInstanceId'] = $this->imageInstanceId;
        }
        if (null !== $this->imageRegionId) {
            $res['ImageRegionId'] = $this->imageRegionId;
        }
        if (null !== $this->imageRepoId) {
            $res['ImageRepoId'] = $this->imageRepoId;
        }
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageInstanceId'])) {
            $model->imageInstanceId = $map['ImageInstanceId'];
        }
        if (isset($map['ImageRegionId'])) {
            $model->imageRegionId = $map['ImageRegionId'];
        }
        if (isset($map['ImageRepoId'])) {
            $model->imageRepoId = $map['ImageRepoId'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }

        return $model;
    }
}

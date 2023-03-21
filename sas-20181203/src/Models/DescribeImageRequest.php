<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageRequest extends Model
{
    /**
     * @var string
     */
    public $imageInstanceId;

    /**
     * @var string
     */
    public $imageRegionId;

    /**
     * @var string
     */
    public $imageRepoId;

    /**
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

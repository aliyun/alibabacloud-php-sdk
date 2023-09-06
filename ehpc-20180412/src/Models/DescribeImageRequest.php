<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The type of the container. Set the value to singularity.
     *
     * @example singularity
     *
     * @var string
     */
    public $containerType;

    /**
     * @description The tags of the image. Default value: latest.
     *
     * @example latest
     *
     * @var string
     */
    public $imageTag;

    /**
     * @description The name of the repository.
     *
     * @example repo1
     *
     * @var string
     */
    public $repository;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'containerType' => 'ContainerType',
        'imageTag'      => 'ImageTag',
        'repository'    => 'Repository',
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
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }
        if (null !== $this->repository) {
            $res['Repository'] = $this->repository;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ContainerType'])) {
            $model->containerType = $map['ContainerType'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['Repository'])) {
            $model->repository = $map['Repository'];
        }

        return $model;
    }
}

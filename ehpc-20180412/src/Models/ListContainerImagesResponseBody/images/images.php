<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListContainerImagesResponseBody\images;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @description The ID of the image.
     *
     * @example centos_7_06_64_20G_alibase_2019071****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the repository.
     *
     * @example busybox
     *
     * @var string
     */
    public $repository;

    /**
     * @description The status of the image.
     *
     * @example READY
     *
     * @var string
     */
    public $status;

    /**
     * @description The container system of the image.
     *
     * @example mycluster
     *
     * @var string
     */
    public $system;

    /**
     * @description The tags of the image.
     *
     * @example latest
     *
     * @var string
     */
    public $tag;

    /**
     * @description The type of the container. Set the value to singularity.
     *
     * @example docker
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the image was updated.
     *
     * @example 2018-08-02T20:11:36
     *
     * @var string
     */
    public $updateDateTime;
    protected $_name = [
        'imageId'        => 'ImageId',
        'repository'     => 'Repository',
        'status'         => 'Status',
        'system'         => 'System',
        'tag'            => 'Tag',
        'type'           => 'Type',
        'updateDateTime' => 'UpdateDateTime',
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
        if (null !== $this->repository) {
            $res['Repository'] = $this->repository;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->system) {
            $res['System'] = $this->system;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateDateTime) {
            $res['UpdateDateTime'] = $this->updateDateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Repository'])) {
            $model->repository = $map['Repository'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['System'])) {
            $model->system = $map['System'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateDateTime'])) {
            $model->updateDateTime = $map['UpdateDateTime'];
        }

        return $model;
    }
}

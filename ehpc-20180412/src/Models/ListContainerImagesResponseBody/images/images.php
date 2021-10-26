<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListContainerImagesResponseBody\images;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $repository;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $system;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $type;

    /**
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

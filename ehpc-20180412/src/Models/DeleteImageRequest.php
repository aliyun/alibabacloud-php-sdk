<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DeleteImageRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $repository;

    /**
     * @var string
     */
    public $imageTag;

    /**
     * @var string
     */
    public $containerType;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'repository'    => 'Repository',
        'imageTag'      => 'ImageTag',
        'containerType' => 'ContainerType',
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
        if (null !== $this->repository) {
            $res['Repository'] = $this->repository;
        }
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }
        if (null !== $this->containerType) {
            $res['ContainerType'] = $this->containerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Repository'])) {
            $model->repository = $map['Repository'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['ContainerType'])) {
            $model->containerType = $map['ContainerType'];
        }

        return $model;
    }
}

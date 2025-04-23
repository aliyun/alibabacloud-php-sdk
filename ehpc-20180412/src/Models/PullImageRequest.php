<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;

class PullImageRequest extends Model
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
    public $imageTag;

    /**
     * @var string
     */
    public $repository;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'containerType' => 'ContainerType',
        'imageTag' => 'ImageTag',
        'repository' => 'Repository',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

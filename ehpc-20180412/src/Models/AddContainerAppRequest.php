<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class AddContainerAppRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $repository;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imageTag;

    /**
     * @var string
     */
    public $containerType;
    protected $_name = [
        'name'          => 'Name',
        'repository'    => 'Repository',
        'description'   => 'Description',
        'imageTag'      => 'ImageTag',
        'containerType' => 'ContainerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->repository) {
            $res['Repository'] = $this->repository;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return AddContainerAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Repository'])) {
            $model->repository = $map['Repository'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

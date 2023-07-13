<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class AddContainerAppRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example singularity
     *
     * @var string
     */
    public $containerType;

    /**
     * @description The tags of the image.
     *
     * Default value: latest
     * @example descriptionContainer
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the container. Set the value to singularity.
     *
     * @example latest
     *
     * @var string
     */
    public $imageTag;

    /**
     * @description The name of the repository. The image that has the same name as the repository is pulled.
     *
     * For information about image names, visit [Docker Hub official website](https://hub.docker.com/search?q=\&type=image).
     * @example container1
     *
     * @var string
     */
    public $name;

    /**
     * @description The description of the container.
     *
     * @example repo1
     *
     * @var string
     */
    public $repository;
    protected $_name = [
        'containerType' => 'ContainerType',
        'description'   => 'Description',
        'imageTag'      => 'ImageTag',
        'name'          => 'Name',
        'repository'    => 'Repository',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerType) {
            $res['ContainerType'] = $this->containerType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->repository) {
            $res['Repository'] = $this->repository;
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
        if (isset($map['ContainerType'])) {
            $model->containerType = $map['ContainerType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Repository'])) {
            $model->repository = $map['Repository'];
        }

        return $model;
    }
}

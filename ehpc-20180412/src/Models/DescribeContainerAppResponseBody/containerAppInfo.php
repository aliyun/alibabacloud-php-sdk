<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeContainerAppResponseBody;

use AlibabaCloud\Tea\Model;

class containerAppInfo extends Model
{
    /**
     * @description The time when the containerized application was created.
     *
     * @example 2018-07-18T17:46:47
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the containerized application.
     *
     * @example ExampleDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the containerized application.
     *
     * @example ehpc-container-ABDUGSkjs****
     *
     * @var string
     */
    public $id;

    /**
     * @description The tags of the image.
     *
     * @example latest
     *
     * @var string
     */
    public $imageTag;

    /**
     * @description The name of the containerized application.
     *
     * @example ExampleName
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the repository.
     *
     * @example busybox
     *
     * @var string
     */
    public $repository;

    /**
     * @description The type of the container. Set the value to singularity.
     *
     * @example singularity
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'id'          => 'Id',
        'imageTag'    => 'ImageTag',
        'name'        => 'Name',
        'repository'  => 'Repository',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerAppInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

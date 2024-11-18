<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListImagesResponseBody;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $appId;

    /**
     * @example 2022-12-09T07:06:34Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example m-bp181x855551ww5yq****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description This parameter is required.
     *
     * @example VM
     *
     * @var string
     */
    public $imageType;

    /**
     * @example app-image
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $osTag;

    /**
     * @example v1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'appId'       => 'AppId',
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'imageId'     => 'ImageId',
        'imageType'   => 'ImageType',
        'name'        => 'Name',
        'osTag'       => 'OsTag',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

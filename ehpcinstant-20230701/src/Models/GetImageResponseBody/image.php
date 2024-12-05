<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetImageResponseBody;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetImageResponseBody\image\containerImageSpec;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetImageResponseBody\image\documentInfo;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetImageResponseBody\image\VMImageSpec;
use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var containerImageSpec
     */
    public $containerImageSpec;

    /**
     * @example 2022-12-23T09:51:39Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var documentInfo
     */
    public $documentInfo;

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
     * @example 40 GiB
     *
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $status;

    /**
     * @var VMImageSpec
     */
    public $VMImageSpec;

    /**
     * @example v1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'appId'              => 'AppId',
        'containerImageSpec' => 'ContainerImageSpec',
        'createTime'         => 'CreateTime',
        'description'        => 'Description',
        'documentInfo'       => 'DocumentInfo',
        'imageType'          => 'ImageType',
        'name'               => 'Name',
        'size'               => 'Size',
        'status'             => 'Status',
        'VMImageSpec'        => 'VMImageSpec',
        'version'            => 'Version',
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
        if (null !== $this->containerImageSpec) {
            $res['ContainerImageSpec'] = null !== $this->containerImageSpec ? $this->containerImageSpec->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->documentInfo) {
            $res['DocumentInfo'] = null !== $this->documentInfo ? $this->documentInfo->toMap() : null;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->VMImageSpec) {
            $res['VMImageSpec'] = null !== $this->VMImageSpec ? $this->VMImageSpec->toMap() : null;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ContainerImageSpec'])) {
            $model->containerImageSpec = containerImageSpec::fromMap($map['ContainerImageSpec']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DocumentInfo'])) {
            $model->documentInfo = documentInfo::fromMap($map['DocumentInfo']);
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VMImageSpec'])) {
            $model->VMImageSpec = VMImageSpec::fromMap($map['VMImageSpec']);
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

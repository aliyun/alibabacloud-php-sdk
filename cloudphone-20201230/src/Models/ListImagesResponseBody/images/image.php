<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListImagesResponseBody\images;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @description The time when the image was created. The time follows the ISO 8601 standard.
     *
     * @example 2021-01-01T01:07:58Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The image description.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The image type.
     *
     * @example system
     *
     * @var string
     */
    public $imageCategory;

    /**
     * @description The image ID.
     *
     * @example cpm-xxxxxxxx
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The image name.
     *
     * @example testImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description Indicates whether the image is shared with other Alibaba Cloud accounts.
     *
     * @example false
     *
     * @var bool
     */
    public $isSelfShared;

    /**
     * @description The display name of the OS in Chinese.
     *
     * @example Android 9.0
     *
     * @var string
     */
    public $OSName;

    /**
     * @description The display name of the OS in English.
     *
     * @example Android 9.0
     *
     * @var string
     */
    public $OSNameEn;

    /**
     * @description The image OS.
     *
     * @example android
     *
     * @var string
     */
    public $OSType;

    /**
     * @description The OS distribution.
     *
     * @example Android 9.0
     *
     * @var string
     */
    public $platform;

    /**
     * @description The progress of image creation.
     *
     * @example 100%
     *
     * @var string
     */
    public $progress;

    /**
     * @description The image state.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the image is used by instances. Valid values:
     *
     *   none: The image is idle.
     *   instance: The image is used by instances.
     *
     * @example none
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'creationTime'  => 'CreationTime',
        'description'   => 'Description',
        'imageCategory' => 'ImageCategory',
        'imageId'       => 'ImageId',
        'imageName'     => 'ImageName',
        'isSelfShared'  => 'IsSelfShared',
        'OSName'        => 'OSName',
        'OSNameEn'      => 'OSNameEn',
        'OSType'        => 'OSType',
        'platform'      => 'Platform',
        'progress'      => 'Progress',
        'status'        => 'Status',
        'usage'         => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageCategory) {
            $res['ImageCategory'] = $this->imageCategory;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->isSelfShared) {
            $res['IsSelfShared'] = $this->isSelfShared;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->OSNameEn) {
            $res['OSNameEn'] = $this->OSNameEn;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageCategory'])) {
            $model->imageCategory = $map['ImageCategory'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['IsSelfShared'])) {
            $model->isSelfShared = $map['IsSelfShared'];
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['OSNameEn'])) {
            $model->OSNameEn = $map['OSNameEn'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}

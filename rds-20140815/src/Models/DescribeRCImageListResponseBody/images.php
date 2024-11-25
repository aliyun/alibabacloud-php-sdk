<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCImageListResponseBody;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @description The image architecture. Valid values:
     *
     *   x86_64
     *   arm64
     *
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description The time when the image was created.
     *
     * @example 2024-04-25T02:17:40Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the image.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The image ID.
     *
     * @example m-2oqiu973jwcxe****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The image name.
     *
     * @example Created_from_i-2zeh17y17sz677x****
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The image version.
     *
     * @example 2
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @description Indicates whether the image is a public image. Public images include public images provided by Alibaba Cloud and custom images published as community images.
     *
     *   **true**: The image is a public image.
     *   **false**: The image is not a public image.
     *
     * @example false
     *
     * @var bool
     */
    public $isPublic;

    /**
     * @var bool
     */
    public $isSupportRdsCustom;

    /**
     * @description The display name of the operating system in Chinese.
     *
     * @var string
     */
    public $OSName;

    /**
     * @description The display name of the operating system in English.
     *
     * @example Alibaba Cloud Linux  2.1903 LTS 64 bit Quick Boot
     *
     * @var string
     */
    public $OSNameEn;

    /**
     * @description The type of the operating system. Valid values:
     *
     *   **windows**
     *   **linux**
     *
     * @example linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @description The image size. Unit: GiB.
     *
     * @example 40
     *
     * @var int
     */
    public $size;

    /**
     * @description The image status. Valid values:
     *
     *   **Unavailable**
     *   **Available**
     *   **Creating**
     *   **CreateFailed**
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the image is used by the RDS Custom instance. Valid values:
     *
     *   **instance**: The image is used to create one or more RDS Custom instances.
     *   **none**: The image is not used to create RDS Custom instances.
     *
     * @example instance
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'architecture'       => 'Architecture',
        'creationTime'       => 'CreationTime',
        'description'        => 'Description',
        'imageId'            => 'ImageId',
        'imageName'          => 'ImageName',
        'imageVersion'       => 'ImageVersion',
        'isPublic'           => 'IsPublic',
        'isSupportRdsCustom' => 'IsSupportRdsCustom',
        'OSName'             => 'OSName',
        'OSNameEn'           => 'OSNameEn',
        'OSType'             => 'OSType',
        'size'               => 'Size',
        'status'             => 'Status',
        'usage'              => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->isPublic) {
            $res['IsPublic'] = $this->isPublic;
        }
        if (null !== $this->isSupportRdsCustom) {
            $res['IsSupportRdsCustom'] = $this->isSupportRdsCustom;
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
        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['IsPublic'])) {
            $model->isPublic = $map['IsPublic'];
        }
        if (isset($map['IsSupportRdsCustom'])) {
            $model->isSupportRdsCustom = $map['IsSupportRdsCustom'];
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
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
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

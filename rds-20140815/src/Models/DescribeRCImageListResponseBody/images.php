<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCImageListResponseBody;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @example 2024-04-25T02:17:40Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example m-2oqiu973jwcxe****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example Created_from_i-2zeh17y17sz677x****
     *
     * @var string
     */
    public $imageName;

    /**
     * @example 2
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @example false
     *
     * @var bool
     */
    public $isPublic;

    /**
     * @var string
     */
    public $OSName;

    /**
     * @example Alibaba Cloud Linux  2.1903 LTS 64 bit Quick Boot
     *
     * @var string
     */
    public $OSNameEn;

    /**
     * @example linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @example 40
     *
     * @var int
     */
    public $size;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @example instance
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'architecture' => 'Architecture',
        'creationTime' => 'CreationTime',
        'description'  => 'Description',
        'imageId'      => 'ImageId',
        'imageName'    => 'ImageName',
        'imageVersion' => 'ImageVersion',
        'isPublic'     => 'IsPublic',
        'OSName'       => 'OSName',
        'OSNameEn'     => 'OSNameEn',
        'OSType'       => 'OSType',
        'size'         => 'Size',
        'status'       => 'Status',
        'usage'        => 'Usage',
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

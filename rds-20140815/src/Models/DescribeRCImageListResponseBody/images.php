<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCImageListResponseBody;

use AlibabaCloud\Dara\Model;

class images extends Model
{
    /**
     * @var string
     */
    public $architecture;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $imageName;
    /**
     * @var string
     */
    public $imageVersion;
    /**
     * @var bool
     */
    public $isPublic;
    /**
     * @var bool
     */
    public $isSupportRdsCustom;
    /**
     * @var string
     */
    public $OSName;
    /**
     * @var string
     */
    public $OSNameEn;
    /**
     * @var string
     */
    public $OSType;
    /**
     * @var string
     */
    public $platform;
    /**
     * @var int
     */
    public $size;
    /**
     * @var string
     */
    public $status;
    /**
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
        'platform'           => 'Platform',
        'size'               => 'Size',
        'status'             => 'Status',
        'usage'              => 'Usage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
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

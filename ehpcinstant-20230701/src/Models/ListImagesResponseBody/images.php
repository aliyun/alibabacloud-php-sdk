<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListImagesResponseBody;

use AlibabaCloud\Dara\Model;

class images extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $documentId;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $imageType;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $osTag;
    /**
     * @var string
     */
    public $updateTime;
    /**
     * @var string
     */
    public $version;
    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'appId'       => 'AppId',
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'documentId'  => 'DocumentId',
        'imageId'     => 'ImageId',
        'imageType'   => 'ImageType',
        'name'        => 'Name',
        'osTag'       => 'OsTag',
        'updateTime'  => 'UpdateTime',
        'version'     => 'Version',
        'weight'      => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
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

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
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

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}

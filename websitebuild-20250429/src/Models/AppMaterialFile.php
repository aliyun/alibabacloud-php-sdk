<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class AppMaterialFile extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deletedTime;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageSize;

    /**
     * @var string
     */
    public $suffix;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'bizId' => 'BizId',
        'contentType' => 'ContentType',
        'createTime' => 'CreateTime',
        'deletedTime' => 'DeletedTime',
        'directoryId' => 'DirectoryId',
        'fileId' => 'FileId',
        'fileUrl' => 'FileUrl',
        'height' => 'Height',
        'name' => 'Name',
        'status' => 'Status',
        'storageSize' => 'StorageSize',
        'suffix' => 'Suffix',
        'type' => 'Type',
        'width' => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->deletedTime) {
            $res['DeletedTime'] = $this->deletedTime;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        if (null !== $this->suffix) {
            $res['Suffix'] = $this->suffix;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DeletedTime'])) {
            $model->deletedTime = $map['DeletedTime'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        if (isset($map['Suffix'])) {
            $model->suffix = $map['Suffix'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}

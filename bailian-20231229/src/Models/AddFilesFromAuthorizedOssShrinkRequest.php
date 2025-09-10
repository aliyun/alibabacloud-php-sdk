<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class AddFilesFromAuthorizedOssShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryType;

    /**
     * @var string
     */
    public $fileDetailsShrink;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $ossRegionId;

    /**
     * @var bool
     */
    public $overWriteFileByOssKey;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'categoryType' => 'CategoryType',
        'fileDetailsShrink' => 'FileDetails',
        'ossBucketName' => 'OssBucketName',
        'ossRegionId' => 'OssRegionId',
        'overWriteFileByOssKey' => 'OverWriteFileByOssKey',
        'tagsShrink' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }

        if (null !== $this->fileDetailsShrink) {
            $res['FileDetails'] = $this->fileDetailsShrink;
        }

        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->ossRegionId) {
            $res['OssRegionId'] = $this->ossRegionId;
        }

        if (null !== $this->overWriteFileByOssKey) {
            $res['OverWriteFileByOssKey'] = $this->overWriteFileByOssKey;
        }

        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }

        if (isset($map['FileDetails'])) {
            $model->fileDetailsShrink = $map['FileDetails'];
        }

        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }

        if (isset($map['OssRegionId'])) {
            $model->ossRegionId = $map['OssRegionId'];
        }

        if (isset($map['OverWriteFileByOssKey'])) {
            $model->overWriteFileByOssKey = $map['OverWriteFileByOssKey'];
        }

        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}

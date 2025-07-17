<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class AddFilesFromAuthorizedOssShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cate_cdd11b1b79a74e8bbd675c356a91ee35xxxxxxxx
     *
     * @var string
     */
    public $categoryId;

    /**
     * @description This parameter is required.
     *
     * @example UNSTRUCTURED
     *
     * @var string
     */
    public $categoryType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $fileDetailsShrink;

    /**
     * @description This parameter is required.
     *
     * @example bucketNamexxxxx
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @description This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $ossRegionId;

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
        'tagsShrink' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFilesFromAuthorizedOssShrinkRequest
     */
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
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}

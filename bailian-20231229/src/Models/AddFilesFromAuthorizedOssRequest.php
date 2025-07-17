<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssRequest\fileDetails;
use AlibabaCloud\Tea\Model;

class AddFilesFromAuthorizedOssRequest extends Model
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
     * @var fileDetails[]
     */
    public $fileDetails;

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
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'categoryType' => 'CategoryType',
        'fileDetails' => 'FileDetails',
        'ossBucketName' => 'OssBucketName',
        'ossRegionId' => 'OssRegionId',
        'tags' => 'Tags',
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
        if (null !== $this->fileDetails) {
            $res['FileDetails'] = [];
            if (null !== $this->fileDetails && \is_array($this->fileDetails)) {
                $n = 0;
                foreach ($this->fileDetails as $item) {
                    $res['FileDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossRegionId) {
            $res['OssRegionId'] = $this->ossRegionId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFilesFromAuthorizedOssRequest
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
            if (!empty($map['FileDetails'])) {
                $model->fileDetails = [];
                $n = 0;
                foreach ($map['FileDetails'] as $item) {
                    $model->fileDetails[$n++] = null !== $item ? fileDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['OssRegionId'])) {
            $model->ossRegionId = $map['OssRegionId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}

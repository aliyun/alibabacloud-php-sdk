<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssRequest\fileDetails;

class AddFilesFromAuthorizedOssRequest extends Model
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
     * @var fileDetails[]
     */
    public $fileDetails;

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
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'categoryType' => 'CategoryType',
        'fileDetails' => 'FileDetails',
        'ossBucketName' => 'OssBucketName',
        'ossRegionId' => 'OssRegionId',
        'overWriteFileByOssKey' => 'OverWriteFileByOssKey',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->fileDetails)) {
            Model::validateArray($this->fileDetails);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
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

        if (null !== $this->fileDetails) {
            if (\is_array($this->fileDetails)) {
                $res['FileDetails'] = [];
                $n1 = 0;
                foreach ($this->fileDetails as $item1) {
                    $res['FileDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['FileDetails'])) {
                $model->fileDetails = [];
                $n1 = 0;
                foreach ($map['FileDetails'] as $item1) {
                    $model->fileDetails[$n1] = fileDetails::fromMap($item1);
                    ++$n1;
                }
            }
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
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

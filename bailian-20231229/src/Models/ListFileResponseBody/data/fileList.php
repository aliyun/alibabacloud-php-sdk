<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListFileResponseBody\data;

use AlibabaCloud\Tea\Model;

class fileList extends Model
{
    /**
     * @example cate_cdd11b1b79a74e8bbd675c356a91ee3510024405
     *
     * @var string
     */
    public $categoryId;

    /**
     * @example 2023-08-18 11:03:35
     *
     * @var string
     */
    public $createTime;

    /**
     * @example file_5ff599b3455a45db8c41b0054b361518_10098576
     *
     * @var string
     */
    public $fileId;

    /**
     * @example auto-test-1721096109278.pdf
     *
     * @var string
     */
    public $fileName;

    /**
     * @example docx
     *
     * @var string
     */
    public $fileType;

    /**
     * @example DASHSCOPE_DOCMIND
     *
     * @var string
     */
    public $parser;

    /**
     * @example 512
     *
     * @var int
     */
    public $sizeInBytes;

    /**
     * @example 200
     *
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'categoryId'  => 'CategoryId',
        'createTime'  => 'CreateTime',
        'fileId'      => 'FileId',
        'fileName'    => 'FileName',
        'fileType'    => 'FileType',
        'parser'      => 'Parser',
        'sizeInBytes' => 'SizeInBytes',
        'status'      => 'Status',
        'tags'        => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->parser) {
            $res['Parser'] = $this->parser;
        }
        if (null !== $this->sizeInBytes) {
            $res['SizeInBytes'] = $this->sizeInBytes;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['Parser'])) {
            $model->parser = $map['Parser'];
        }
        if (isset($map['SizeInBytes'])) {
            $model->sizeInBytes = $map['SizeInBytes'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}

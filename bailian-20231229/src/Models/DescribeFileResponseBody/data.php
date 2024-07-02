<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\DescribeFileResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example cate_cdd11b1b79a74e8bbd675c356a91ee3XXXXXXXX
     *
     * @var string
     */
    public $categoryId;

    /**
     * @example 2024-05-26 12:45:43
     *
     * @var string
     */
    public $createTime;

    /**
     * @example file_9a65732555b54d5ea10796ca5742ba22_XXXXXXXX
     *
     * @var string
     */
    public $fileId;

    /**
     * @example test.pdf
     *
     * @var string
     */
    public $fileName;

    /**
     * @example pdf
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
     * @example 1234
     *
     * @var int
     */
    public $sizeInBytes;

    /**
     * @example PARSE_SUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'categoryId'  => 'CategoryId',
        'createTime'  => 'CreateTime',
        'fileId'      => 'FileId',
        'fileName'    => 'FileName',
        'fileType'    => 'FileType',
        'parser'      => 'Parser',
        'sizeInBytes' => 'SizeInBytes',
        'status'      => 'Status',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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

        return $model;
    }
}

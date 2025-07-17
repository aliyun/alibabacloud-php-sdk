<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\DescribeFileResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the category to which the document belongs.
     *
     * @example cate_cdd11b1b79a74e8bbd675c356a91ee3XXXXXXXX
     *
     * @var string
     */
    public $categoryId;

    /**
     * @description The timestamp when the document was uploaded to Model Studio. Format: yyyy-MM-dd HH:mm:ss. Time zone: UTC + 8.
     *
     * @example 2024-05-26 12:45:43
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The primary key ID of the document.
     *
     * @example file_9a65732555b54d5ea10796ca5742ba22_XXXXXXXX
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The name of the document.
     *
     * @example test.pdf
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The file type of the document. The value is an extension. Valid values: pdf, docx, doc, txt, md, pptx, and ppt.
     *
     * @example pdf
     *
     * @var string
     */
    public $fileType;

    /**
     * @description The parser that is used to parse the document. Valid value:
     *
     *   DASHSCOPE_DOCMIND: The default document parser.
     *
     * @example DASHSCOPE_DOCMIND
     *
     * @var string
     */
    public $parser;

    /**
     * @description The size of the document. Unit: bytes.
     *
     * @example 1234
     *
     * @var int
     */
    public $sizeInBytes;

    /**
     * @description The status of the document. Valid values:
     *
     *   INIT: pending parsing.
     *   PARSING
     *   PARSE_SUCCESS
     *   PARSE_FAILED
     *
     * @example PARSE_SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags that are associated with the document. A document can be associated with multiple tags.
     *
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'createTime' => 'CreateTime',
        'fileId' => 'FileId',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'parser' => 'Parser',
        'sizeInBytes' => 'SizeInBytes',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate() {}

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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}

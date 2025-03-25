<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class ListChunksRequest extends Model
{
    /**
     * @description An array of field names. This parameter is used to filter non-private fields (prefixed with_underscores) in the Metadata parameter returned by this operation. By default, this parameter is left empty, which means all non-private fields in the Metadata parameter are returned. If you only want specified non-private fields, such as title, set this parameter to title.
     *
     * @var string[]
     */
    public $fields;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @description The primary key ID of the document. This parameter is not required for structured knowledge base, but is required for unstructured knowledge base. To view the ID, you can click the ID icon next to the file name on the [Data Management](https://bailian.console.aliyun.com/#/data-center) page. You can filter returned chunks by the document ID. This parameter is left empty by default.
     *
     * @example file_5f03dfea56da4050ab68d61871fc4cb3_10151493
     *
     * @var string
     */
    public $filed;

    /**
     * @description The primary key ID of the knowledge base, which is the `Data.Id` parameter returned by the [CreateIndex](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-createindex) operation.
     *
     * This parameter is required.
     *
     * @example otoru9en4v
     *
     * @var string
     */
    public $indexId;

    /**
     * @description The number of the pages to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of chunks to display on each page. Maximum value: 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'fields' => 'Fields',
        'fileId' => 'FileId',
        'filed' => 'Filed',
        'indexId' => 'IndexId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->filed) {
            $res['Filed'] = $this->filed;
        }
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChunksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = $map['Fields'];
            }
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Filed'])) {
            $model->filed = $map['Filed'];
        }
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

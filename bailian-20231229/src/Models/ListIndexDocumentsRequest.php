<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class ListIndexDocumentsRequest extends Model
{
    /**
     * @description The names of the queried documents. The default value is null, which means the names are not used to filter the results.
     *
     * @var string
     */
    public $documentName;

    /**
     * @description The import status of the documents to be queried. Valid values:
     *
     *   INSERT_ERROR
     *   RUNNING
     *   DELETED
     *   FINISH
     *
     * The default value is null, which means the import status is not used to filter the results.
     *
     * @example FINISH
     *
     * @var string
     */
    public $documentStatus;

    /**
     * @description The primary key ID of the knowledge base, which is the `Data.Id` parameter returned by the [CreateIndex](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-createindex) operation.
     *
     * This parameter is required.
     *
     * @example 79c0aly8zw
     *
     * @var string
     */
    public $indexId;

    /**
     * @description The page numbers of the pages to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of documents displayed on each page. No maximum value. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'documentName' => 'DocumentName',
        'documentStatus' => 'DocumentStatus',
        'indexId' => 'IndexId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentName) {
            $res['DocumentName'] = $this->documentName;
        }
        if (null !== $this->documentStatus) {
            $res['DocumentStatus'] = $this->documentStatus;
        }
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIndexDocumentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocumentName'])) {
            $model->documentName = $map['DocumentName'];
        }
        if (isset($map['DocumentStatus'])) {
            $model->documentStatus = $map['DocumentStatus'];
        }
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

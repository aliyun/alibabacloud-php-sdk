<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class SubmitIndexAddDocumentsJobRequest extends Model
{
    /**
     * @description The list of primary key IDs of the category.
     *
     * @var string[]
     */
    public $categoryIds;

    /**
     * @description The list of the primary key IDs of the documents.
     *
     * @var string[]
     */
    public $documentIds;

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
     * @description The data type of [Data Management](https://bailian.console.aliyun.com/#/data-center). For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base). Valid values:
     *
     *   DATA_CENTER_CATEGORY: The category type. Import all documents from one or more categories in Data Center.
     *   DATA_CENTER_FILE: The document type. Import one or more documents from Data Center.
     *
     * >  If this parameter is set to DATA_CENTER_CATEGORY, you must specify the `CategoryIds` parameter. If this parameter is set to DATA_CENTER_FILE, you must specify the `DocumentIds` parameter.
     *
     * This parameter is required.
     *
     * @example DATA_CENTER_FILE
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'categoryIds' => 'CategoryIds',
        'documentIds' => 'DocumentIds',
        'indexId' => 'IndexId',
        'sourceType' => 'SourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryIds) {
            $res['CategoryIds'] = $this->categoryIds;
        }
        if (null !== $this->documentIds) {
            $res['DocumentIds'] = $this->documentIds;
        }
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitIndexAddDocumentsJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryIds'])) {
            if (!empty($map['CategoryIds'])) {
                $model->categoryIds = $map['CategoryIds'];
            }
        }
        if (isset($map['DocumentIds'])) {
            if (!empty($map['DocumentIds'])) {
                $model->documentIds = $map['DocumentIds'];
            }
        }
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}

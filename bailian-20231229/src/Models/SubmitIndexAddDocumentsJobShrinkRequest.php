<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class SubmitIndexAddDocumentsJobShrinkRequest extends Model
{
    /**
     * @description The list of primary key IDs of the category.
     *
     * @var string
     */
    public $categoryIdsShrink;

    /**
     * @description The list of the primary key IDs of the documents.
     *
     * @var string
     */
    public $documentIdsShrink;

    /**
     * @description The primary key ID of the knowledge base, which is the `Data.Id` parameter returned by the [CreateIndex](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-createindex) operation.
     *
     * This parameter is required.
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
     * This parameter is required.
     * @example DATA_CENTER_FILE
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'categoryIdsShrink' => 'CategoryIds',
        'documentIdsShrink' => 'DocumentIds',
        'indexId'           => 'IndexId',
        'sourceType'        => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryIdsShrink) {
            $res['CategoryIds'] = $this->categoryIdsShrink;
        }
        if (null !== $this->documentIdsShrink) {
            $res['DocumentIds'] = $this->documentIdsShrink;
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
     * @return SubmitIndexAddDocumentsJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryIds'])) {
            $model->categoryIdsShrink = $map['CategoryIds'];
        }
        if (isset($map['DocumentIds'])) {
            $model->documentIdsShrink = $map['DocumentIds'];
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

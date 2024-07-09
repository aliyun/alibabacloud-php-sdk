<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class SubmitIndexAddDocumentsJobRequest extends Model
{
    /**
     * @var string[]
     */
    public $categoryIds;

    /**
     * @var string[]
     */
    public $documentIds;

    /**
     * @description This parameter is required.
     *
     * @example 79c0aly8zw
     *
     * @var string
     */
    public $indexId;

    /**
     * @description This parameter is required.
     *
     * @example DATA_CENTER_FILE
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'categoryIds' => 'CategoryIds',
        'documentIds' => 'DocumentIds',
        'indexId'     => 'IndexId',
        'sourceType'  => 'SourceType',
    ];

    public function validate()
    {
    }

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

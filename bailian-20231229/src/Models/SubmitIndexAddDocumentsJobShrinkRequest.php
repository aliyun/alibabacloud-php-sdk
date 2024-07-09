<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class SubmitIndexAddDocumentsJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $categoryIdsShrink;

    /**
     * @var string
     */
    public $documentIdsShrink;

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

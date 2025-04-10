<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $indexId;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'categoryIdsShrink' => 'CategoryIds',
        'documentIdsShrink' => 'DocumentIds',
        'indexId' => 'IndexId',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

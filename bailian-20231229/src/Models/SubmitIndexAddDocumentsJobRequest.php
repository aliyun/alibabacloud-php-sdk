<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $indexId;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'categoryIds' => 'CategoryIds',
        'documentIds' => 'DocumentIds',
        'indexId' => 'IndexId',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->categoryIds)) {
            Model::validateArray($this->categoryIds);
        }
        if (\is_array($this->documentIds)) {
            Model::validateArray($this->documentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryIds) {
            if (\is_array($this->categoryIds)) {
                $res['CategoryIds'] = [];
                $n1 = 0;
                foreach ($this->categoryIds as $item1) {
                    $res['CategoryIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->documentIds) {
            if (\is_array($this->documentIds)) {
                $res['DocumentIds'] = [];
                $n1 = 0;
                foreach ($this->documentIds as $item1) {
                    $res['DocumentIds'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['CategoryIds'])) {
                $model->categoryIds = [];
                $n1 = 0;
                foreach ($map['CategoryIds'] as $item1) {
                    $model->categoryIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DocumentIds'])) {
            if (!empty($map['DocumentIds'])) {
                $model->documentIds = [];
                $n1 = 0;
                foreach ($map['DocumentIds'] as $item1) {
                    $model->documentIds[$n1++] = $item1;
                }
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

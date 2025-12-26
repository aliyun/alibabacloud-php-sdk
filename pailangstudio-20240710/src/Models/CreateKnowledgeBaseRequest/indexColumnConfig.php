<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseRequest\indexColumnConfig\columnDefinitions;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseRequest\indexColumnConfig\contentColumns;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseRequest\indexColumnConfig\embeddingColumns;

class indexColumnConfig extends Model
{
    /**
     * @var columnDefinitions[]
     */
    public $columnDefinitions;

    /**
     * @var contentColumns[]
     */
    public $contentColumns;

    /**
     * @var embeddingColumns[]
     */
    public $embeddingColumns;
    protected $_name = [
        'columnDefinitions' => 'ColumnDefinitions',
        'contentColumns' => 'ContentColumns',
        'embeddingColumns' => 'EmbeddingColumns',
    ];

    public function validate()
    {
        if (\is_array($this->columnDefinitions)) {
            Model::validateArray($this->columnDefinitions);
        }
        if (\is_array($this->contentColumns)) {
            Model::validateArray($this->contentColumns);
        }
        if (\is_array($this->embeddingColumns)) {
            Model::validateArray($this->embeddingColumns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnDefinitions) {
            if (\is_array($this->columnDefinitions)) {
                $res['ColumnDefinitions'] = [];
                $n1 = 0;
                foreach ($this->columnDefinitions as $item1) {
                    $res['ColumnDefinitions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contentColumns) {
            if (\is_array($this->contentColumns)) {
                $res['ContentColumns'] = [];
                $n1 = 0;
                foreach ($this->contentColumns as $item1) {
                    $res['ContentColumns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->embeddingColumns) {
            if (\is_array($this->embeddingColumns)) {
                $res['EmbeddingColumns'] = [];
                $n1 = 0;
                foreach ($this->embeddingColumns as $item1) {
                    $res['EmbeddingColumns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ColumnDefinitions'])) {
            if (!empty($map['ColumnDefinitions'])) {
                $model->columnDefinitions = [];
                $n1 = 0;
                foreach ($map['ColumnDefinitions'] as $item1) {
                    $model->columnDefinitions[$n1] = columnDefinitions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ContentColumns'])) {
            if (!empty($map['ContentColumns'])) {
                $model->contentColumns = [];
                $n1 = 0;
                foreach ($map['ContentColumns'] as $item1) {
                    $model->contentColumns[$n1] = contentColumns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EmbeddingColumns'])) {
            if (!empty($map['EmbeddingColumns'])) {
                $model->embeddingColumns = [];
                $n1 = 0;
                foreach ($map['EmbeddingColumns'] as $item1) {
                    $model->embeddingColumns[$n1] = embeddingColumns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

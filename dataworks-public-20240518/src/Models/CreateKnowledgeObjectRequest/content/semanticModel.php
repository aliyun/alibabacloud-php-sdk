<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeObjectRequest\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeObjectRequest\content\semanticModel\datasets;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeObjectRequest\content\semanticModel\metrics;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeObjectRequest\content\semanticModel\relationships;

class semanticModel extends Model
{
    /**
     * @var datasets[]
     */
    public $datasets;

    /**
     * @var metrics[]
     */
    public $metrics;

    /**
     * @var relationships[]
     */
    public $relationships;
    protected $_name = [
        'datasets' => 'Datasets',
        'metrics' => 'Metrics',
        'relationships' => 'Relationships',
    ];

    public function validate()
    {
        if (\is_array($this->datasets)) {
            Model::validateArray($this->datasets);
        }
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        if (\is_array($this->relationships)) {
            Model::validateArray($this->relationships);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasets) {
            if (\is_array($this->datasets)) {
                $res['Datasets'] = [];
                $n1 = 0;
                foreach ($this->datasets as $item1) {
                    $res['Datasets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['Metrics'] = [];
                $n1 = 0;
                foreach ($this->metrics as $item1) {
                    $res['Metrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relationships) {
            if (\is_array($this->relationships)) {
                $res['Relationships'] = [];
                $n1 = 0;
                foreach ($this->relationships as $item1) {
                    $res['Relationships'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Datasets'])) {
            if (!empty($map['Datasets'])) {
                $model->datasets = [];
                $n1 = 0;
                foreach ($map['Datasets'] as $item1) {
                    $model->datasets[$n1] = datasets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n1 = 0;
                foreach ($map['Metrics'] as $item1) {
                    $model->metrics[$n1] = metrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Relationships'])) {
            if (!empty($map['Relationships'])) {
                $model->relationships = [];
                $n1 = 0;
                foreach ($map['Relationships'] as $item1) {
                    $model->relationships[$n1] = relationships::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

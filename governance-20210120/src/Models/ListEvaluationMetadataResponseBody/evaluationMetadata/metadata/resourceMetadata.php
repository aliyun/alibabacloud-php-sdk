<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\resourceMetadata\resourcePropertyMetadata;

class resourceMetadata extends Model
{
    /**
     * @var resourcePropertyMetadata[]
     */
    public $resourcePropertyMetadata;
    protected $_name = [
        'resourcePropertyMetadata' => 'ResourcePropertyMetadata',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePropertyMetadata)) {
            Model::validateArray($this->resourcePropertyMetadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourcePropertyMetadata) {
            if (\is_array($this->resourcePropertyMetadata)) {
                $res['ResourcePropertyMetadata'] = [];
                $n1 = 0;
                foreach ($this->resourcePropertyMetadata as $item1) {
                    $res['ResourcePropertyMetadata'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResourcePropertyMetadata'])) {
            if (!empty($map['ResourcePropertyMetadata'])) {
                $model->resourcePropertyMetadata = [];
                $n1 = 0;
                foreach ($map['ResourcePropertyMetadata'] as $item1) {
                    $model->resourcePropertyMetadata[$n1++] = resourcePropertyMetadata::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

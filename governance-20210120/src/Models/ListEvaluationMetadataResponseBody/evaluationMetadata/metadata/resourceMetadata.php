<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\resourceMetadata\resourcePropertyMetadata;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourcePropertyMetadata) {
            $res['ResourcePropertyMetadata'] = [];
            if (null !== $this->resourcePropertyMetadata && \is_array($this->resourcePropertyMetadata)) {
                $n = 0;
                foreach ($this->resourcePropertyMetadata as $item) {
                    $res['ResourcePropertyMetadata'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourcePropertyMetadata'])) {
            if (!empty($map['ResourcePropertyMetadata'])) {
                $model->resourcePropertyMetadata = [];
                $n                               = 0;
                foreach ($map['ResourcePropertyMetadata'] as $item) {
                    $model->resourcePropertyMetadata[$n++] = null !== $item ? resourcePropertyMetadata::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

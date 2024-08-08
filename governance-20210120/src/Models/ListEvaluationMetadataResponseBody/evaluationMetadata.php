<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata;
use AlibabaCloud\Tea\Model;

class evaluationMetadata extends Model
{
    /**
     * @var metadata[]
     */
    public $metadata;

    /**
     * @example Metric
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'metadata' => 'Metadata',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metadata) {
            $res['Metadata'] = [];
            if (null !== $this->metadata && \is_array($this->metadata)) {
                $n = 0;
                foreach ($this->metadata as $item) {
                    $res['Metadata'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluationMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                $n               = 0;
                foreach ($map['Metadata'] as $item) {
                    $model->metadata[$n++] = null !== $item ? metadata::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

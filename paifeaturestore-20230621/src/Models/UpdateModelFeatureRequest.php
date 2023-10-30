<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureRequest\features;
use AlibabaCloud\Tea\Model;

class UpdateModelFeatureRequest extends Model
{
    /**
     * @var features[]
     */
    public $features;

    /**
     * @example 4
     *
     * @var string
     */
    public $labelTableId;

    /**
     * @var string[]
     */
    public $sequenceFeatureViewIds;
    protected $_name = [
        'features'               => 'Features',
        'labelTableId'           => 'LabelTableId',
        'sequenceFeatureViewIds' => 'SequenceFeatureViewIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->features) {
            $res['Features'] = [];
            if (null !== $this->features && \is_array($this->features)) {
                $n = 0;
                foreach ($this->features as $item) {
                    $res['Features'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->labelTableId) {
            $res['LabelTableId'] = $this->labelTableId;
        }
        if (null !== $this->sequenceFeatureViewIds) {
            $res['SequenceFeatureViewIds'] = $this->sequenceFeatureViewIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateModelFeatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n               = 0;
                foreach ($map['Features'] as $item) {
                    $model->features[$n++] = null !== $item ? features::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LabelTableId'])) {
            $model->labelTableId = $map['LabelTableId'];
        }
        if (isset($map['SequenceFeatureViewIds'])) {
            if (!empty($map['SequenceFeatureViewIds'])) {
                $model->sequenceFeatureViewIds = $map['SequenceFeatureViewIds'];
            }
        }

        return $model;
    }
}

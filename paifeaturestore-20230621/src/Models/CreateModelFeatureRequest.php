<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateModelFeatureRequest\features;
use AlibabaCloud\Tea\Model;

class CreateModelFeatureRequest extends Model
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
     * @example model_feature_1
     *
     * @var string
     */
    public $name;

    /**
     * @example 3
     *
     * @var string
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $sequenceFeatureViewIds;
    protected $_name = [
        'features'               => 'Features',
        'labelTableId'           => 'LabelTableId',
        'name'                   => 'Name',
        'projectId'              => 'ProjectId',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sequenceFeatureViewIds) {
            $res['SequenceFeatureViewIds'] = $this->sequenceFeatureViewIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModelFeatureRequest
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SequenceFeatureViewIds'])) {
            if (!empty($map['SequenceFeatureViewIds'])) {
                $model->sequenceFeatureViewIds = $map['SequenceFeatureViewIds'];
            }
        }

        return $model;
    }
}

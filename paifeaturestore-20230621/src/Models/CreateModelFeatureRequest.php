<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateModelFeatureRequest\features;

class CreateModelFeatureRequest extends Model
{
    /**
     * @var features[]
     */
    public $features;

    /**
     * @var int
     */
    public $labelPriorityLevel;

    /**
     * @var string
     */
    public $labelTableId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $sequenceFeatureViewIds;
    protected $_name = [
        'features' => 'Features',
        'labelPriorityLevel' => 'LabelPriorityLevel',
        'labelTableId' => 'LabelTableId',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'sequenceFeatureViewIds' => 'SequenceFeatureViewIds',
    ];

    public function validate()
    {
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        if (\is_array($this->sequenceFeatureViewIds)) {
            Model::validateArray($this->sequenceFeatureViewIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['Features'] = [];
                $n1 = 0;
                foreach ($this->features as $item1) {
                    $res['Features'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->labelPriorityLevel) {
            $res['LabelPriorityLevel'] = $this->labelPriorityLevel;
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
            if (\is_array($this->sequenceFeatureViewIds)) {
                $res['SequenceFeatureViewIds'] = [];
                $n1 = 0;
                foreach ($this->sequenceFeatureViewIds as $item1) {
                    $res['SequenceFeatureViewIds'][$n1++] = $item1;
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
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n1 = 0;
                foreach ($map['Features'] as $item1) {
                    $model->features[$n1++] = features::fromMap($item1);
                }
            }
        }

        if (isset($map['LabelPriorityLevel'])) {
            $model->labelPriorityLevel = $map['LabelPriorityLevel'];
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
                $model->sequenceFeatureViewIds = [];
                $n1 = 0;
                foreach ($map['SequenceFeatureViewIds'] as $item1) {
                    $model->sequenceFeatureViewIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

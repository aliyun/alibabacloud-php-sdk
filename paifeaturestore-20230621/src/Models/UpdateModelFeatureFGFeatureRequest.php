<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureRequest\lookupFeatures;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureRequest\rawFeatures;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureRequest\sequenceFeatures;

class UpdateModelFeatureFGFeatureRequest extends Model
{
    /**
     * @var lookupFeatures[]
     */
    public $lookupFeatures;

    /**
     * @var rawFeatures[]
     */
    public $rawFeatures;

    /**
     * @var string[]
     */
    public $reserves;

    /**
     * @var sequenceFeatures[]
     */
    public $sequenceFeatures;
    protected $_name = [
        'lookupFeatures' => 'LookupFeatures',
        'rawFeatures' => 'RawFeatures',
        'reserves' => 'Reserves',
        'sequenceFeatures' => 'SequenceFeatures',
    ];

    public function validate()
    {
        if (\is_array($this->lookupFeatures)) {
            Model::validateArray($this->lookupFeatures);
        }
        if (\is_array($this->rawFeatures)) {
            Model::validateArray($this->rawFeatures);
        }
        if (\is_array($this->reserves)) {
            Model::validateArray($this->reserves);
        }
        if (\is_array($this->sequenceFeatures)) {
            Model::validateArray($this->sequenceFeatures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lookupFeatures) {
            if (\is_array($this->lookupFeatures)) {
                $res['LookupFeatures'] = [];
                $n1 = 0;
                foreach ($this->lookupFeatures as $item1) {
                    $res['LookupFeatures'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rawFeatures) {
            if (\is_array($this->rawFeatures)) {
                $res['RawFeatures'] = [];
                $n1 = 0;
                foreach ($this->rawFeatures as $item1) {
                    $res['RawFeatures'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reserves) {
            if (\is_array($this->reserves)) {
                $res['Reserves'] = [];
                $n1 = 0;
                foreach ($this->reserves as $item1) {
                    $res['Reserves'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sequenceFeatures) {
            if (\is_array($this->sequenceFeatures)) {
                $res['SequenceFeatures'] = [];
                $n1 = 0;
                foreach ($this->sequenceFeatures as $item1) {
                    $res['SequenceFeatures'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LookupFeatures'])) {
            if (!empty($map['LookupFeatures'])) {
                $model->lookupFeatures = [];
                $n1 = 0;
                foreach ($map['LookupFeatures'] as $item1) {
                    $model->lookupFeatures[$n1] = lookupFeatures::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RawFeatures'])) {
            if (!empty($map['RawFeatures'])) {
                $model->rawFeatures = [];
                $n1 = 0;
                foreach ($map['RawFeatures'] as $item1) {
                    $model->rawFeatures[$n1] = rawFeatures::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Reserves'])) {
            if (!empty($map['Reserves'])) {
                $model->reserves = [];
                $n1 = 0;
                foreach ($map['Reserves'] as $item1) {
                    $model->reserves[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SequenceFeatures'])) {
            if (!empty($map['SequenceFeatures'])) {
                $model->sequenceFeatures = [];
                $n1 = 0;
                foreach ($map['SequenceFeatures'] as $item1) {
                    $model->sequenceFeatures[$n1] = sequenceFeatures::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

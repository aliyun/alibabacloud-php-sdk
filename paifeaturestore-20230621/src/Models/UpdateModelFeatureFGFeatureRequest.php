<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureRequest\lookupFeatures;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureRequest\rawFeatures;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureRequest\sequenceFeatures;
use AlibabaCloud\Tea\Model;

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
        'lookupFeatures'   => 'LookupFeatures',
        'rawFeatures'      => 'RawFeatures',
        'reserves'         => 'Reserves',
        'sequenceFeatures' => 'SequenceFeatures',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lookupFeatures) {
            $res['LookupFeatures'] = [];
            if (null !== $this->lookupFeatures && \is_array($this->lookupFeatures)) {
                $n = 0;
                foreach ($this->lookupFeatures as $item) {
                    $res['LookupFeatures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rawFeatures) {
            $res['RawFeatures'] = [];
            if (null !== $this->rawFeatures && \is_array($this->rawFeatures)) {
                $n = 0;
                foreach ($this->rawFeatures as $item) {
                    $res['RawFeatures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->reserves) {
            $res['Reserves'] = $this->reserves;
        }
        if (null !== $this->sequenceFeatures) {
            $res['SequenceFeatures'] = [];
            if (null !== $this->sequenceFeatures && \is_array($this->sequenceFeatures)) {
                $n = 0;
                foreach ($this->sequenceFeatures as $item) {
                    $res['SequenceFeatures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateModelFeatureFGFeatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LookupFeatures'])) {
            if (!empty($map['LookupFeatures'])) {
                $model->lookupFeatures = [];
                $n                     = 0;
                foreach ($map['LookupFeatures'] as $item) {
                    $model->lookupFeatures[$n++] = null !== $item ? lookupFeatures::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RawFeatures'])) {
            if (!empty($map['RawFeatures'])) {
                $model->rawFeatures = [];
                $n                  = 0;
                foreach ($map['RawFeatures'] as $item) {
                    $model->rawFeatures[$n++] = null !== $item ? rawFeatures::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Reserves'])) {
            if (!empty($map['Reserves'])) {
                $model->reserves = $map['Reserves'];
            }
        }
        if (isset($map['SequenceFeatures'])) {
            if (!empty($map['SequenceFeatures'])) {
                $model->sequenceFeatures = [];
                $n                       = 0;
                foreach ($map['SequenceFeatures'] as $item) {
                    $model->sequenceFeatures[$n++] = null !== $item ? sequenceFeatures::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

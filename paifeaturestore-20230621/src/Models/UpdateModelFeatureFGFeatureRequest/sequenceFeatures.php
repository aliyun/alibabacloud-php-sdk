<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureRequest;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\UpdateModelFeatureFGFeatureRequest\sequenceFeatures\subFeatures;
use AlibabaCloud\Tea\Model;

class sequenceFeatures extends Model
{
    /**
     * @example #
     *
     * @var string
     */
    public $attributeDelim;

    /**
     * @example item_id
     *
     * @var string
     */
    public $featureName;

    /**
     * @example ;
     *
     * @var string
     */
    public $sequenceDelim;

    /**
     * @example 50
     *
     * @var int
     */
    public $sequenceLength;

    /**
     * @var subFeatures[]
     */
    public $subFeatures;
    protected $_name = [
        'attributeDelim' => 'AttributeDelim',
        'featureName'    => 'FeatureName',
        'sequenceDelim'  => 'SequenceDelim',
        'sequenceLength' => 'SequenceLength',
        'subFeatures'    => 'SubFeatures',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeDelim) {
            $res['AttributeDelim'] = $this->attributeDelim;
        }
        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }
        if (null !== $this->sequenceDelim) {
            $res['SequenceDelim'] = $this->sequenceDelim;
        }
        if (null !== $this->sequenceLength) {
            $res['SequenceLength'] = $this->sequenceLength;
        }
        if (null !== $this->subFeatures) {
            $res['SubFeatures'] = [];
            if (null !== $this->subFeatures && \is_array($this->subFeatures)) {
                $n = 0;
                foreach ($this->subFeatures as $item) {
                    $res['SubFeatures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sequenceFeatures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeDelim'])) {
            $model->attributeDelim = $map['AttributeDelim'];
        }
        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }
        if (isset($map['SequenceDelim'])) {
            $model->sequenceDelim = $map['SequenceDelim'];
        }
        if (isset($map['SequenceLength'])) {
            $model->sequenceLength = $map['SequenceLength'];
        }
        if (isset($map['SubFeatures'])) {
            if (!empty($map['SubFeatures'])) {
                $model->subFeatures = [];
                $n                  = 0;
                foreach ($map['SubFeatures'] as $item) {
                    $model->subFeatures[$n++] = null !== $item ? subFeatures::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

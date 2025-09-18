<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureFGFeatureResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureFGFeatureResponseBody\sequenceFeatures\subFeatures;

class sequenceFeatures extends Model
{
    /**
     * @var string
     */
    public $attributeDelim;

    /**
     * @var string
     */
    public $featureName;

    /**
     * @var string
     */
    public $sequenceDelim;

    /**
     * @var int
     */
    public $sequenceLength;

    /**
     * @var subFeatures[]
     */
    public $subFeatures;
    protected $_name = [
        'attributeDelim' => 'AttributeDelim',
        'featureName' => 'FeatureName',
        'sequenceDelim' => 'SequenceDelim',
        'sequenceLength' => 'SequenceLength',
        'subFeatures' => 'SubFeatures',
    ];

    public function validate()
    {
        if (\is_array($this->subFeatures)) {
            Model::validateArray($this->subFeatures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->subFeatures)) {
                $res['SubFeatures'] = [];
                $n1 = 0;
                foreach ($this->subFeatures as $item1) {
                    $res['SubFeatures'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['SubFeatures'] as $item1) {
                    $model->subFeatures[$n1] = subFeatures::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

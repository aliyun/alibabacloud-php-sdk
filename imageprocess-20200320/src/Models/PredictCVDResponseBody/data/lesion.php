<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\PredictCVDResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\PredictCVDResponseBody\data\lesion\featureScore;

class lesion extends Model
{
    /**
     * @var float
     */
    public $CVDProbability;

    /**
     * @var featureScore
     */
    public $featureScore;

    /**
     * @var string
     */
    public $imagesURL;

    /**
     * @var string[]
     */
    public $resultURL;
    protected $_name = [
        'CVDProbability' => 'CVDProbability',
        'featureScore' => 'FeatureScore',
        'imagesURL' => 'ImagesURL',
        'resultURL' => 'ResultURL',
    ];

    public function validate()
    {
        if (null !== $this->featureScore) {
            $this->featureScore->validate();
        }
        if (\is_array($this->resultURL)) {
            Model::validateArray($this->resultURL);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CVDProbability) {
            $res['CVDProbability'] = $this->CVDProbability;
        }

        if (null !== $this->featureScore) {
            $res['FeatureScore'] = null !== $this->featureScore ? $this->featureScore->toArray($noStream) : $this->featureScore;
        }

        if (null !== $this->imagesURL) {
            $res['ImagesURL'] = $this->imagesURL;
        }

        if (null !== $this->resultURL) {
            if (\is_array($this->resultURL)) {
                $res['ResultURL'] = [];
                $n1 = 0;
                foreach ($this->resultURL as $item1) {
                    $res['ResultURL'][$n1++] = $item1;
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
        if (isset($map['CVDProbability'])) {
            $model->CVDProbability = $map['CVDProbability'];
        }

        if (isset($map['FeatureScore'])) {
            $model->featureScore = featureScore::fromMap($map['FeatureScore']);
        }

        if (isset($map['ImagesURL'])) {
            $model->imagesURL = $map['ImagesURL'];
        }

        if (isset($map['ResultURL'])) {
            if (!empty($map['ResultURL'])) {
                $model->resultURL = [];
                $n1 = 0;
                foreach ($map['ResultURL'] as $item1) {
                    $model->resultURL[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

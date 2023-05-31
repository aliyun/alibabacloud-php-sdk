<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\PredictCVDResponseBody\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\PredictCVDResponseBody\data\lesion\featureScore;
use AlibabaCloud\Tea\Model;

class lesion extends Model
{
    /**
     * @example 0.5
     *
     * @var float
     */
    public $CVDProbability;

    /**
     * @var featureScore
     */
    public $featureScore;

    /**
     * @var string[]
     */
    public $resultURL;
    protected $_name = [
        'CVDProbability' => 'CVDProbability',
        'featureScore'   => 'FeatureScore',
        'resultURL'      => 'ResultURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CVDProbability) {
            $res['CVDProbability'] = $this->CVDProbability;
        }
        if (null !== $this->featureScore) {
            $res['FeatureScore'] = null !== $this->featureScore ? $this->featureScore->toMap() : null;
        }
        if (null !== $this->resultURL) {
            $res['ResultURL'] = $this->resultURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lesion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CVDProbability'])) {
            $model->CVDProbability = $map['CVDProbability'];
        }
        if (isset($map['FeatureScore'])) {
            $model->featureScore = featureScore::fromMap($map['FeatureScore']);
        }
        if (isset($map['ResultURL'])) {
            if (!empty($map['ResultURL'])) {
                $model->resultURL = $map['ResultURL'];
            }
        }

        return $model;
    }
}

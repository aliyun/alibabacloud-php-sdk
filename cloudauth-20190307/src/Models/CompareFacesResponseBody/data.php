<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\CompareFacesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {"0.0001":"90.07","0.001":"80.01","0.01":"70.02"}
     *
     * @var string
     */
    public $confidenceThresholds;

    /**
     * @example 98.7913
     *
     * @var float
     */
    public $similarityScore;
    protected $_name = [
        'confidenceThresholds' => 'ConfidenceThresholds',
        'similarityScore'      => 'SimilarityScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidenceThresholds) {
            $res['ConfidenceThresholds'] = $this->confidenceThresholds;
        }
        if (null !== $this->similarityScore) {
            $res['SimilarityScore'] = $this->similarityScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfidenceThresholds'])) {
            $model->confidenceThresholds = $map['ConfidenceThresholds'];
        }
        if (isset($map['SimilarityScore'])) {
            $model->similarityScore = $map['SimilarityScore'];
        }

        return $model;
    }
}

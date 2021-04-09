<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\CompareFacesResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $similarityScore;

    /**
     * @var string
     */
    public $confidenceThresholds;
    protected $_name = [
        'similarityScore'      => 'SimilarityScore',
        'confidenceThresholds' => 'ConfidenceThresholds',
    ];

    public function validate()
    {
        Model::validateRequired('similarityScore', $this->similarityScore, true);
        Model::validateRequired('confidenceThresholds', $this->confidenceThresholds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->similarityScore) {
            $res['SimilarityScore'] = $this->similarityScore;
        }
        if (null !== $this->confidenceThresholds) {
            $res['ConfidenceThresholds'] = $this->confidenceThresholds;
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
        if (isset($map['SimilarityScore'])) {
            $model->similarityScore = $map['SimilarityScore'];
        }
        if (isset($map['ConfidenceThresholds'])) {
            $model->confidenceThresholds = $map['ConfidenceThresholds'];
        }

        return $model;
    }
}

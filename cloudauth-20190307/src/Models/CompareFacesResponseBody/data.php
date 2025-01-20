<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\CompareFacesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $confidenceThresholds;
    /**
     * @var float
     */
    public $similarityScore;
    protected $_name = [
        'confidenceThresholds' => 'ConfidenceThresholds',
        'similarityScore'      => 'SimilarityScore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class BatchAddFacesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var float
     */
    public $similarityScoreThresholdInEntity;

    /**
     * @var float
     */
    public $similarityScoreThresholdBetweenEntity;

    /**
     * @var string
     */
    public $facesShrink;

    /**
     * @var float
     */
    public $qualityScoreThreshold;
    protected $_name = [
        'dbName'                                => 'DbName',
        'entityId'                              => 'EntityId',
        'similarityScoreThresholdInEntity'      => 'SimilarityScoreThresholdInEntity',
        'similarityScoreThresholdBetweenEntity' => 'SimilarityScoreThresholdBetweenEntity',
        'facesShrink'                           => 'Faces',
        'qualityScoreThreshold'                 => 'QualityScoreThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->similarityScoreThresholdInEntity) {
            $res['SimilarityScoreThresholdInEntity'] = $this->similarityScoreThresholdInEntity;
        }
        if (null !== $this->similarityScoreThresholdBetweenEntity) {
            $res['SimilarityScoreThresholdBetweenEntity'] = $this->similarityScoreThresholdBetweenEntity;
        }
        if (null !== $this->facesShrink) {
            $res['Faces'] = $this->facesShrink;
        }
        if (null !== $this->qualityScoreThreshold) {
            $res['QualityScoreThreshold'] = $this->qualityScoreThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddFacesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['SimilarityScoreThresholdInEntity'])) {
            $model->similarityScoreThresholdInEntity = $map['SimilarityScoreThresholdInEntity'];
        }
        if (isset($map['SimilarityScoreThresholdBetweenEntity'])) {
            $model->similarityScoreThresholdBetweenEntity = $map['SimilarityScoreThresholdBetweenEntity'];
        }
        if (isset($map['Faces'])) {
            $model->facesShrink = $map['Faces'];
        }
        if (isset($map['QualityScoreThreshold'])) {
            $model->qualityScoreThreshold = $map['QualityScoreThreshold'];
        }

        return $model;
    }
}

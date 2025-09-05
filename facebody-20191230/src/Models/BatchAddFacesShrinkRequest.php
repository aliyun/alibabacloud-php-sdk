<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $facesShrink;

    /**
     * @var float
     */
    public $qualityScoreThreshold;

    /**
     * @var float
     */
    public $similarityScoreThresholdBetweenEntity;

    /**
     * @var float
     */
    public $similarityScoreThresholdInEntity;
    protected $_name = [
        'dbName' => 'DbName',
        'entityId' => 'EntityId',
        'facesShrink' => 'Faces',
        'qualityScoreThreshold' => 'QualityScoreThreshold',
        'similarityScoreThresholdBetweenEntity' => 'SimilarityScoreThresholdBetweenEntity',
        'similarityScoreThresholdInEntity' => 'SimilarityScoreThresholdInEntity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->facesShrink) {
            $res['Faces'] = $this->facesShrink;
        }

        if (null !== $this->qualityScoreThreshold) {
            $res['QualityScoreThreshold'] = $this->qualityScoreThreshold;
        }

        if (null !== $this->similarityScoreThresholdBetweenEntity) {
            $res['SimilarityScoreThresholdBetweenEntity'] = $this->similarityScoreThresholdBetweenEntity;
        }

        if (null !== $this->similarityScoreThresholdInEntity) {
            $res['SimilarityScoreThresholdInEntity'] = $this->similarityScoreThresholdInEntity;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['Faces'])) {
            $model->facesShrink = $map['Faces'];
        }

        if (isset($map['QualityScoreThreshold'])) {
            $model->qualityScoreThreshold = $map['QualityScoreThreshold'];
        }

        if (isset($map['SimilarityScoreThresholdBetweenEntity'])) {
            $model->similarityScoreThresholdBetweenEntity = $map['SimilarityScoreThresholdBetweenEntity'];
        }

        if (isset($map['SimilarityScoreThresholdInEntity'])) {
            $model->similarityScoreThresholdInEntity = $map['SimilarityScoreThresholdInEntity'];
        }

        return $model;
    }
}

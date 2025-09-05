<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesAdvanceRequest\faces;

class BatchAddFacesAdvanceRequest extends Model
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
     * @var faces[]
     */
    public $faces;

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
        'faces' => 'Faces',
        'qualityScoreThreshold' => 'QualityScoreThreshold',
        'similarityScoreThresholdBetweenEntity' => 'SimilarityScoreThresholdBetweenEntity',
        'similarityScoreThresholdInEntity' => 'SimilarityScoreThresholdInEntity',
    ];

    public function validate()
    {
        if (\is_array($this->faces)) {
            Model::validateArray($this->faces);
        }
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

        if (null !== $this->faces) {
            if (\is_array($this->faces)) {
                $res['Faces'] = [];
                $n1 = 0;
                foreach ($this->faces as $item1) {
                    $res['Faces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['Faces'])) {
                $model->faces = [];
                $n1 = 0;
                foreach ($map['Faces'] as $item1) {
                    $model->faces[$n1] = faces::fromMap($item1);
                    ++$n1;
                }
            }
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

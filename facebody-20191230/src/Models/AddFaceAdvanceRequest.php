<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class AddFaceAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageUrlObject;

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
    public $extraData;

    /**
     * @var float
     */
    public $qualityScoreThreshold;

    /**
     * @var float
     */
    public $similarityScoreThresholdInEntity;

    /**
     * @var float
     */
    public $similarityScoreThresholdBetweenEntity;
    protected $_name = [
        'imageUrlObject'                        => 'ImageUrlObject',
        'dbName'                                => 'DbName',
        'entityId'                              => 'EntityId',
        'extraData'                             => 'ExtraData',
        'qualityScoreThreshold'                 => 'QualityScoreThreshold',
        'similarityScoreThresholdInEntity'      => 'SimilarityScoreThresholdInEntity',
        'similarityScoreThresholdBetweenEntity' => 'SimilarityScoreThresholdBetweenEntity',
    ];

    public function validate()
    {
        Model::validateRequired('imageUrlObject', $this->imageUrlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrlObject) {
            $res['ImageUrlObject'] = $this->imageUrlObject;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->qualityScoreThreshold) {
            $res['QualityScoreThreshold'] = $this->qualityScoreThreshold;
        }
        if (null !== $this->similarityScoreThresholdInEntity) {
            $res['SimilarityScoreThresholdInEntity'] = $this->similarityScoreThresholdInEntity;
        }
        if (null !== $this->similarityScoreThresholdBetweenEntity) {
            $res['SimilarityScoreThresholdBetweenEntity'] = $this->similarityScoreThresholdBetweenEntity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFaceAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrlObject'])) {
            $model->imageUrlObject = $map['ImageUrlObject'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['QualityScoreThreshold'])) {
            $model->qualityScoreThreshold = $map['QualityScoreThreshold'];
        }
        if (isset($map['SimilarityScoreThresholdInEntity'])) {
            $model->similarityScoreThresholdInEntity = $map['SimilarityScoreThresholdInEntity'];
        }
        if (isset($map['SimilarityScoreThresholdBetweenEntity'])) {
            $model->similarityScoreThresholdBetweenEntity = $map['SimilarityScoreThresholdBetweenEntity'];
        }

        return $model;
    }
}

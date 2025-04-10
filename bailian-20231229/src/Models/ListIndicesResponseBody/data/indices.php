<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndicesResponseBody\data;

use AlibabaCloud\Dara\Model;

class indices extends Model
{
    /**
     * @var int
     */
    public $chunkSize;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $documentIds;

    /**
     * @var string
     */
    public $embeddingModelName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $overlapSize;

    /**
     * @var string
     */
    public $rerankMinScore;

    /**
     * @var string
     */
    public $rerankModelName;

    /**
     * @var string
     */
    public $separator;

    /**
     * @var string
     */
    public $sinkInstanceId;

    /**
     * @var string
     */
    public $sinkRegion;

    /**
     * @var string
     */
    public $sinkType;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $structureType;
    protected $_name = [
        'chunkSize' => 'ChunkSize',
        'description' => 'Description',
        'documentIds' => 'DocumentIds',
        'embeddingModelName' => 'EmbeddingModelName',
        'id' => 'Id',
        'name' => 'Name',
        'overlapSize' => 'OverlapSize',
        'rerankMinScore' => 'RerankMinScore',
        'rerankModelName' => 'RerankModelName',
        'separator' => 'Separator',
        'sinkInstanceId' => 'SinkInstanceId',
        'sinkRegion' => 'SinkRegion',
        'sinkType' => 'SinkType',
        'sourceType' => 'SourceType',
        'structureType' => 'StructureType',
    ];

    public function validate()
    {
        if (\is_array($this->documentIds)) {
            Model::validateArray($this->documentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->documentIds) {
            if (\is_array($this->documentIds)) {
                $res['DocumentIds'] = [];
                $n1 = 0;
                foreach ($this->documentIds as $item1) {
                    $res['DocumentIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->embeddingModelName) {
            $res['EmbeddingModelName'] = $this->embeddingModelName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->overlapSize) {
            $res['OverlapSize'] = $this->overlapSize;
        }

        if (null !== $this->rerankMinScore) {
            $res['RerankMinScore'] = $this->rerankMinScore;
        }

        if (null !== $this->rerankModelName) {
            $res['RerankModelName'] = $this->rerankModelName;
        }

        if (null !== $this->separator) {
            $res['Separator'] = $this->separator;
        }

        if (null !== $this->sinkInstanceId) {
            $res['SinkInstanceId'] = $this->sinkInstanceId;
        }

        if (null !== $this->sinkRegion) {
            $res['SinkRegion'] = $this->sinkRegion;
        }

        if (null !== $this->sinkType) {
            $res['SinkType'] = $this->sinkType;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->structureType) {
            $res['StructureType'] = $this->structureType;
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
        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DocumentIds'])) {
            if (!empty($map['DocumentIds'])) {
                $model->documentIds = [];
                $n1 = 0;
                foreach ($map['DocumentIds'] as $item1) {
                    $model->documentIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EmbeddingModelName'])) {
            $model->embeddingModelName = $map['EmbeddingModelName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OverlapSize'])) {
            $model->overlapSize = $map['OverlapSize'];
        }

        if (isset($map['RerankMinScore'])) {
            $model->rerankMinScore = $map['RerankMinScore'];
        }

        if (isset($map['RerankModelName'])) {
            $model->rerankModelName = $map['RerankModelName'];
        }

        if (isset($map['Separator'])) {
            $model->separator = $map['Separator'];
        }

        if (isset($map['SinkInstanceId'])) {
            $model->sinkInstanceId = $map['SinkInstanceId'];
        }

        if (isset($map['SinkRegion'])) {
            $model->sinkRegion = $map['SinkRegion'];
        }

        if (isset($map['SinkType'])) {
            $model->sinkType = $map['SinkType'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['StructureType'])) {
            $model->structureType = $map['StructureType'];
        }

        return $model;
    }
}

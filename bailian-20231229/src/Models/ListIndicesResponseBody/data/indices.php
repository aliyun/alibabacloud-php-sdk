<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndicesResponseBody\data;

use AlibabaCloud\Tea\Model;

class indices extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $chunkSize;

    /**
     * @example If each RAM user belongs to a RAM group, the configuration is considered compliant.
     *
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $documentIds;

    /**
     * @example conv-rewrite-qwen-1.8b
     *
     * @var string
     */
    public $embeddingModelName;

    /**
     * @example 259899
     *
     * @var string
     */
    public $id;

    /**
     * @example temp_mUB4j
     *
     * @var string
     */
    public $name;

    /**
     * @example 10
     *
     * @var int
     */
    public $overlapSize;

    /**
     * @example 0.01
     *
     * @var string
     */
    public $rerankMinScore;

    /**
     * @example gte-rerank-hybrid
     *
     * @var string
     */
    public $rerankModelName;

    /**
     * @example \\n
     *
     * @var string
     */
    public $separator;

    /**
     * @example gp-bp1gq62t1788yw2ol
     *
     * @var string
     */
    public $sinkInstanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $sinkRegion;

    /**
     * @example es
     *
     * @var string
     */
    public $sinkType;

    /**
     * @example DATA_CENTER_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example structured
     *
     * @var string
     */
    public $structureType;
    protected $_name = [
        'chunkSize'          => 'ChunkSize',
        'description'        => 'Description',
        'documentIds'        => 'DocumentIds',
        'embeddingModelName' => 'EmbeddingModelName',
        'id'                 => 'Id',
        'name'               => 'Name',
        'overlapSize'        => 'OverlapSize',
        'rerankMinScore'     => 'RerankMinScore',
        'rerankModelName'    => 'RerankModelName',
        'separator'          => 'Separator',
        'sinkInstanceId'     => 'SinkInstanceId',
        'sinkRegion'         => 'SinkRegion',
        'sinkType'           => 'SinkType',
        'sourceType'         => 'SourceType',
        'structureType'      => 'StructureType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->documentIds) {
            $res['DocumentIds'] = $this->documentIds;
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

    /**
     * @param array $map
     *
     * @return indices
     */
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
                $model->documentIds = $map['DocumentIds'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexRequest\columns;
use AlibabaCloud\Tea\Model;

class CreateIndexRequest extends Model
{
    /**
     * @var string[]
     */
    public $categoryIds;

    /**
     * @example 128
     *
     * @var int
     */
    public $chunkSize;

    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $documentIds;

    /**
     * @example text-embedding-v2
     *
     * @var string
     */
    public $embeddingModelName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @example 16
     *
     * @var int
     */
    public $overlapSize;

    /**
     * @example 0.20
     *
     * @var float
     */
    public $rerankMinScore;

    /**
     * @example gte-rerank-hybrid
     *
     * @var string
     */
    public $rerankModelName;

    /**
     * @example ,
     *
     * @var string
     */
    public $separator;

    /**
     * @example gp-bp321093j84
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
     * @description This parameter is required.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $sinkType;

    /**
     * @description This parameter is required.
     *
     * @example DATA_CENTER_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description This parameter is required.
     *
     * @example structured
     *
     * @var string
     */
    public $structureType;
    protected $_name = [
        'categoryIds'        => 'CategoryIds',
        'chunkSize'          => 'ChunkSize',
        'columns'            => 'Columns',
        'description'        => 'Description',
        'documentIds'        => 'DocumentIds',
        'embeddingModelName' => 'EmbeddingModelName',
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
        if (null !== $this->categoryIds) {
            $res['CategoryIds'] = $this->categoryIds;
        }
        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }
        if (null !== $this->columns) {
            $res['Columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['Columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return CreateIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryIds'])) {
            if (!empty($map['CategoryIds'])) {
                $model->categoryIds = $map['CategoryIds'];
            }
        }
        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
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

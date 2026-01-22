<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class UpdateIndexRequest extends Model
{
    /**
     * @var int
     */
    public $denseSimilarityTopK;

    /**
     * @var string
     */
    public $description;

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
    public $pipelineCommercialCu;

    /**
     * @var string
     */
    public $pipelineCommercialType;

    /**
     * @var string
     */
    public $rerankMinScore;

    /**
     * @var int
     */
    public $sparseSimilarityTopK;
    protected $_name = [
        'denseSimilarityTopK' => 'DenseSimilarityTopK',
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
        'pipelineCommercialCu' => 'PipelineCommercialCu',
        'pipelineCommercialType' => 'PipelineCommercialType',
        'rerankMinScore' => 'RerankMinScore',
        'sparseSimilarityTopK' => 'SparseSimilarityTopK',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->denseSimilarityTopK) {
            $res['DenseSimilarityTopK'] = $this->denseSimilarityTopK;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pipelineCommercialCu) {
            $res['PipelineCommercialCu'] = $this->pipelineCommercialCu;
        }

        if (null !== $this->pipelineCommercialType) {
            $res['PipelineCommercialType'] = $this->pipelineCommercialType;
        }

        if (null !== $this->rerankMinScore) {
            $res['RerankMinScore'] = $this->rerankMinScore;
        }

        if (null !== $this->sparseSimilarityTopK) {
            $res['SparseSimilarityTopK'] = $this->sparseSimilarityTopK;
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
        if (isset($map['DenseSimilarityTopK'])) {
            $model->denseSimilarityTopK = $map['DenseSimilarityTopK'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PipelineCommercialCu'])) {
            $model->pipelineCommercialCu = $map['PipelineCommercialCu'];
        }

        if (isset($map['PipelineCommercialType'])) {
            $model->pipelineCommercialType = $map['PipelineCommercialType'];
        }

        if (isset($map['RerankMinScore'])) {
            $model->rerankMinScore = $map['RerankMinScore'];
        }

        if (isset($map['SparseSimilarityTopK'])) {
            $model->sparseSimilarityTopK = $map['SparseSimilarityTopK'];
        }

        return $model;
    }
}

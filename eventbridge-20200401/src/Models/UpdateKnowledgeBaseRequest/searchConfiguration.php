<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateKnowledgeBaseRequest;

use AlibabaCloud\Dara\Model;

class searchConfiguration extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $rankAlgorithm;

    /**
     * @var bool
     */
    public $rerankEnabled;

    /**
     * @var string
     */
    public $rerankModel;

    /**
     * @var int
     */
    public $rrfK;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var float
     */
    public $vectorWeight;
    protected $_name = [
        'mode' => 'Mode',
        'rankAlgorithm' => 'RankAlgorithm',
        'rerankEnabled' => 'RerankEnabled',
        'rerankModel' => 'RerankModel',
        'rrfK' => 'RrfK',
        'topK' => 'TopK',
        'vectorWeight' => 'VectorWeight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->rankAlgorithm) {
            $res['RankAlgorithm'] = $this->rankAlgorithm;
        }

        if (null !== $this->rerankEnabled) {
            $res['RerankEnabled'] = $this->rerankEnabled;
        }

        if (null !== $this->rerankModel) {
            $res['RerankModel'] = $this->rerankModel;
        }

        if (null !== $this->rrfK) {
            $res['RrfK'] = $this->rrfK;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }

        if (null !== $this->vectorWeight) {
            $res['VectorWeight'] = $this->vectorWeight;
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['RankAlgorithm'])) {
            $model->rankAlgorithm = $map['RankAlgorithm'];
        }

        if (isset($map['RerankEnabled'])) {
            $model->rerankEnabled = $map['RerankEnabled'];
        }

        if (isset($map['RerankModel'])) {
            $model->rerankModel = $map['RerankModel'];
        }

        if (isset($map['RrfK'])) {
            $model->rrfK = $map['RrfK'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        if (isset($map['VectorWeight'])) {
            $model->vectorWeight = $map['VectorWeight'];
        }

        return $model;
    }
}

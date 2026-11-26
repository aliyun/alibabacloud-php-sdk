<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListKnowledgeBasesResponseBody\items;

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
        'mode' => 'mode',
        'rankAlgorithm' => 'rankAlgorithm',
        'rerankEnabled' => 'rerankEnabled',
        'rerankModel' => 'rerankModel',
        'rrfK' => 'rrfK',
        'topK' => 'topK',
        'vectorWeight' => 'vectorWeight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->rankAlgorithm) {
            $res['rankAlgorithm'] = $this->rankAlgorithm;
        }

        if (null !== $this->rerankEnabled) {
            $res['rerankEnabled'] = $this->rerankEnabled;
        }

        if (null !== $this->rerankModel) {
            $res['rerankModel'] = $this->rerankModel;
        }

        if (null !== $this->rrfK) {
            $res['rrfK'] = $this->rrfK;
        }

        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }

        if (null !== $this->vectorWeight) {
            $res['vectorWeight'] = $this->vectorWeight;
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
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['rankAlgorithm'])) {
            $model->rankAlgorithm = $map['rankAlgorithm'];
        }

        if (isset($map['rerankEnabled'])) {
            $model->rerankEnabled = $map['rerankEnabled'];
        }

        if (isset($map['rerankModel'])) {
            $model->rerankModel = $map['rerankModel'];
        }

        if (isset($map['rrfK'])) {
            $model->rrfK = $map['rrfK'];
        }

        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        if (isset($map['vectorWeight'])) {
            $model->vectorWeight = $map['vectorWeight'];
        }

        return $model;
    }
}

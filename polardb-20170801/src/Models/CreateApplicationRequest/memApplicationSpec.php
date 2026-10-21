<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreateApplicationRequest;

use AlibabaCloud\Dara\Model;

class memApplicationSpec extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dbPassword;

    /**
     * @var string
     */
    public $dbUser;

    /**
     * @var string
     */
    public $embedderModel;

    /**
     * @var int
     */
    public $embedderModelDimension;

    /**
     * @var string
     */
    public $graphLlmModel;

    /**
     * @var string
     */
    public $llmModel;

    /**
     * @var string
     */
    public $memoryType;

    /**
     * @var string
     */
    public $polarAIEmbedderInstanceId;

    /**
     * @var string
     */
    public $polarAIGraphLlmInstanceId;

    /**
     * @var string
     */
    public $polarAILlmInstanceId;

    /**
     * @var string
     */
    public $polarAIRerankerInstanceId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $rerankerModel;

    /**
     * @var int
     */
    public $shard;

    /**
     * @var string
     */
    public $visualEmbedderModel;

    /**
     * @var int
     */
    public $visualEmbedderModelDimension;

    /**
     * @var string[]
     */
    public $visualLlmModalities;

    /**
     * @var string
     */
    public $visualLlmModel;
    protected $_name = [
        'dbName' => 'DbName',
        'dbPassword' => 'DbPassword',
        'dbUser' => 'DbUser',
        'embedderModel' => 'EmbedderModel',
        'embedderModelDimension' => 'EmbedderModelDimension',
        'graphLlmModel' => 'GraphLlmModel',
        'llmModel' => 'LlmModel',
        'memoryType' => 'MemoryType',
        'polarAIEmbedderInstanceId' => 'PolarAIEmbedderInstanceId',
        'polarAIGraphLlmInstanceId' => 'PolarAIGraphLlmInstanceId',
        'polarAILlmInstanceId' => 'PolarAILlmInstanceId',
        'polarAIRerankerInstanceId' => 'PolarAIRerankerInstanceId',
        'projectName' => 'ProjectName',
        'rerankerModel' => 'RerankerModel',
        'shard' => 'Shard',
        'visualEmbedderModel' => 'VisualEmbedderModel',
        'visualEmbedderModelDimension' => 'VisualEmbedderModelDimension',
        'visualLlmModalities' => 'VisualLlmModalities',
        'visualLlmModel' => 'VisualLlmModel',
    ];

    public function validate()
    {
        if (\is_array($this->visualLlmModalities)) {
            Model::validateArray($this->visualLlmModalities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->dbPassword) {
            $res['DbPassword'] = $this->dbPassword;
        }

        if (null !== $this->dbUser) {
            $res['DbUser'] = $this->dbUser;
        }

        if (null !== $this->embedderModel) {
            $res['EmbedderModel'] = $this->embedderModel;
        }

        if (null !== $this->embedderModelDimension) {
            $res['EmbedderModelDimension'] = $this->embedderModelDimension;
        }

        if (null !== $this->graphLlmModel) {
            $res['GraphLlmModel'] = $this->graphLlmModel;
        }

        if (null !== $this->llmModel) {
            $res['LlmModel'] = $this->llmModel;
        }

        if (null !== $this->memoryType) {
            $res['MemoryType'] = $this->memoryType;
        }

        if (null !== $this->polarAIEmbedderInstanceId) {
            $res['PolarAIEmbedderInstanceId'] = $this->polarAIEmbedderInstanceId;
        }

        if (null !== $this->polarAIGraphLlmInstanceId) {
            $res['PolarAIGraphLlmInstanceId'] = $this->polarAIGraphLlmInstanceId;
        }

        if (null !== $this->polarAILlmInstanceId) {
            $res['PolarAILlmInstanceId'] = $this->polarAILlmInstanceId;
        }

        if (null !== $this->polarAIRerankerInstanceId) {
            $res['PolarAIRerankerInstanceId'] = $this->polarAIRerankerInstanceId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->rerankerModel) {
            $res['RerankerModel'] = $this->rerankerModel;
        }

        if (null !== $this->shard) {
            $res['Shard'] = $this->shard;
        }

        if (null !== $this->visualEmbedderModel) {
            $res['VisualEmbedderModel'] = $this->visualEmbedderModel;
        }

        if (null !== $this->visualEmbedderModelDimension) {
            $res['VisualEmbedderModelDimension'] = $this->visualEmbedderModelDimension;
        }

        if (null !== $this->visualLlmModalities) {
            if (\is_array($this->visualLlmModalities)) {
                $res['VisualLlmModalities'] = [];
                $n1 = 0;
                foreach ($this->visualLlmModalities as $item1) {
                    $res['VisualLlmModalities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->visualLlmModel) {
            $res['VisualLlmModel'] = $this->visualLlmModel;
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

        if (isset($map['DbPassword'])) {
            $model->dbPassword = $map['DbPassword'];
        }

        if (isset($map['DbUser'])) {
            $model->dbUser = $map['DbUser'];
        }

        if (isset($map['EmbedderModel'])) {
            $model->embedderModel = $map['EmbedderModel'];
        }

        if (isset($map['EmbedderModelDimension'])) {
            $model->embedderModelDimension = $map['EmbedderModelDimension'];
        }

        if (isset($map['GraphLlmModel'])) {
            $model->graphLlmModel = $map['GraphLlmModel'];
        }

        if (isset($map['LlmModel'])) {
            $model->llmModel = $map['LlmModel'];
        }

        if (isset($map['MemoryType'])) {
            $model->memoryType = $map['MemoryType'];
        }

        if (isset($map['PolarAIEmbedderInstanceId'])) {
            $model->polarAIEmbedderInstanceId = $map['PolarAIEmbedderInstanceId'];
        }

        if (isset($map['PolarAIGraphLlmInstanceId'])) {
            $model->polarAIGraphLlmInstanceId = $map['PolarAIGraphLlmInstanceId'];
        }

        if (isset($map['PolarAILlmInstanceId'])) {
            $model->polarAILlmInstanceId = $map['PolarAILlmInstanceId'];
        }

        if (isset($map['PolarAIRerankerInstanceId'])) {
            $model->polarAIRerankerInstanceId = $map['PolarAIRerankerInstanceId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['RerankerModel'])) {
            $model->rerankerModel = $map['RerankerModel'];
        }

        if (isset($map['Shard'])) {
            $model->shard = $map['Shard'];
        }

        if (isset($map['VisualEmbedderModel'])) {
            $model->visualEmbedderModel = $map['VisualEmbedderModel'];
        }

        if (isset($map['VisualEmbedderModelDimension'])) {
            $model->visualEmbedderModelDimension = $map['VisualEmbedderModelDimension'];
        }

        if (isset($map['VisualLlmModalities'])) {
            if (!empty($map['VisualLlmModalities'])) {
                $model->visualLlmModalities = [];
                $n1 = 0;
                foreach ($map['VisualLlmModalities'] as $item1) {
                    $model->visualLlmModalities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VisualLlmModel'])) {
            $model->visualLlmModel = $map['VisualLlmModel'];
        }

        return $model;
    }
}

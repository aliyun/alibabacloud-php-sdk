<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseRequest\chunkConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseRequest\dataSources;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseRequest\embeddingConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseRequest\indexColumnConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseRequest\metaDataConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseRequest\vectorDBConfig;

class CreateKnowledgeBaseRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var chunkConfig
     */
    public $chunkConfig;

    /**
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @var string
     */
    public $description;

    /**
     * @var embeddingConfig
     */
    public $embeddingConfig;

    /**
     * @var indexColumnConfig
     */
    public $indexColumnConfig;

    /**
     * @var string
     */
    public $knowledgeBaseType;

    /**
     * @var metaDataConfig
     */
    public $metaDataConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputDir;

    /**
     * @var string
     */
    public $runtimeId;

    /**
     * @var vectorDBConfig
     */
    public $vectorDBConfig;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'chunkConfig' => 'ChunkConfig',
        'dataSources' => 'DataSources',
        'description' => 'Description',
        'embeddingConfig' => 'EmbeddingConfig',
        'indexColumnConfig' => 'IndexColumnConfig',
        'knowledgeBaseType' => 'KnowledgeBaseType',
        'metaDataConfig' => 'MetaDataConfig',
        'name' => 'Name',
        'outputDir' => 'OutputDir',
        'runtimeId' => 'RuntimeId',
        'vectorDBConfig' => 'VectorDBConfig',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->chunkConfig) {
            $this->chunkConfig->validate();
        }
        if (\is_array($this->dataSources)) {
            Model::validateArray($this->dataSources);
        }
        if (null !== $this->embeddingConfig) {
            $this->embeddingConfig->validate();
        }
        if (null !== $this->indexColumnConfig) {
            $this->indexColumnConfig->validate();
        }
        if (null !== $this->metaDataConfig) {
            $this->metaDataConfig->validate();
        }
        if (null !== $this->vectorDBConfig) {
            $this->vectorDBConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->chunkConfig) {
            $res['ChunkConfig'] = null !== $this->chunkConfig ? $this->chunkConfig->toArray($noStream) : $this->chunkConfig;
        }

        if (null !== $this->dataSources) {
            if (\is_array($this->dataSources)) {
                $res['DataSources'] = [];
                $n1 = 0;
                foreach ($this->dataSources as $item1) {
                    $res['DataSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->embeddingConfig) {
            $res['EmbeddingConfig'] = null !== $this->embeddingConfig ? $this->embeddingConfig->toArray($noStream) : $this->embeddingConfig;
        }

        if (null !== $this->indexColumnConfig) {
            $res['IndexColumnConfig'] = null !== $this->indexColumnConfig ? $this->indexColumnConfig->toArray($noStream) : $this->indexColumnConfig;
        }

        if (null !== $this->knowledgeBaseType) {
            $res['KnowledgeBaseType'] = $this->knowledgeBaseType;
        }

        if (null !== $this->metaDataConfig) {
            $res['MetaDataConfig'] = null !== $this->metaDataConfig ? $this->metaDataConfig->toArray($noStream) : $this->metaDataConfig;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputDir) {
            $res['OutputDir'] = $this->outputDir;
        }

        if (null !== $this->runtimeId) {
            $res['RuntimeId'] = $this->runtimeId;
        }

        if (null !== $this->vectorDBConfig) {
            $res['VectorDBConfig'] = null !== $this->vectorDBConfig ? $this->vectorDBConfig->toArray($noStream) : $this->vectorDBConfig;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['ChunkConfig'])) {
            $model->chunkConfig = chunkConfig::fromMap($map['ChunkConfig']);
        }

        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = [];
                $n1 = 0;
                foreach ($map['DataSources'] as $item1) {
                    $model->dataSources[$n1] = dataSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EmbeddingConfig'])) {
            $model->embeddingConfig = embeddingConfig::fromMap($map['EmbeddingConfig']);
        }

        if (isset($map['IndexColumnConfig'])) {
            $model->indexColumnConfig = indexColumnConfig::fromMap($map['IndexColumnConfig']);
        }

        if (isset($map['KnowledgeBaseType'])) {
            $model->knowledgeBaseType = $map['KnowledgeBaseType'];
        }

        if (isset($map['MetaDataConfig'])) {
            $model->metaDataConfig = metaDataConfig::fromMap($map['MetaDataConfig']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OutputDir'])) {
            $model->outputDir = $map['OutputDir'];
        }

        if (isset($map['RuntimeId'])) {
            $model->runtimeId = $map['RuntimeId'];
        }

        if (isset($map['VectorDBConfig'])) {
            $model->vectorDBConfig = vectorDBConfig::fromMap($map['VectorDBConfig']);
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

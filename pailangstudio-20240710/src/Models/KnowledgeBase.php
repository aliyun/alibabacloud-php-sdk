<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBase\autoUpdateConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBase\chunkConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBase\dataSources;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBase\embeddingConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBase\indexColumnConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBase\metaDataConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBase\vectorDBConfig;

class KnowledgeBase extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var autoUpdateConfig
     */
    public $autoUpdateConfig;

    /**
     * @var chunkConfig
     */
    public $chunkConfig;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var embeddingConfig
     */
    public $embeddingConfig;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var indexColumnConfig
     */
    public $indexColumnConfig;

    /**
     * @var string
     */
    public $knowledgeBaseId;

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
    public $versionName;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'autoUpdateConfig' => 'AutoUpdateConfig',
        'chunkConfig' => 'ChunkConfig',
        'creator' => 'Creator',
        'dataSources' => 'DataSources',
        'datasetId' => 'DatasetId',
        'description' => 'Description',
        'embeddingConfig' => 'EmbeddingConfig',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'indexColumnConfig' => 'IndexColumnConfig',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'knowledgeBaseType' => 'KnowledgeBaseType',
        'metaDataConfig' => 'MetaDataConfig',
        'name' => 'Name',
        'outputDir' => 'OutputDir',
        'runtimeId' => 'RuntimeId',
        'vectorDBConfig' => 'VectorDBConfig',
        'versionName' => 'VersionName',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->autoUpdateConfig) {
            $this->autoUpdateConfig->validate();
        }
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

        if (null !== $this->autoUpdateConfig) {
            $res['AutoUpdateConfig'] = null !== $this->autoUpdateConfig ? $this->autoUpdateConfig->toArray($noStream) : $this->autoUpdateConfig;
        }

        if (null !== $this->chunkConfig) {
            $res['ChunkConfig'] = null !== $this->chunkConfig ? $this->chunkConfig->toArray($noStream) : $this->chunkConfig;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
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

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->embeddingConfig) {
            $res['EmbeddingConfig'] = null !== $this->embeddingConfig ? $this->embeddingConfig->toArray($noStream) : $this->embeddingConfig;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->indexColumnConfig) {
            $res['IndexColumnConfig'] = null !== $this->indexColumnConfig ? $this->indexColumnConfig->toArray($noStream) : $this->indexColumnConfig;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
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

        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
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

        if (isset($map['AutoUpdateConfig'])) {
            $model->autoUpdateConfig = autoUpdateConfig::fromMap($map['AutoUpdateConfig']);
        }

        if (isset($map['ChunkConfig'])) {
            $model->chunkConfig = chunkConfig::fromMap($map['ChunkConfig']);
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
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

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EmbeddingConfig'])) {
            $model->embeddingConfig = embeddingConfig::fromMap($map['EmbeddingConfig']);
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['IndexColumnConfig'])) {
            $model->indexColumnConfig = indexColumnConfig::fromMap($map['IndexColumnConfig']);
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
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

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

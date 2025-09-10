<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateDocumentCollectionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $collection;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $dimension;

    /**
     * @var string
     */
    public $embeddingModel;

    /**
     * @var bool
     */
    public $enableGraph;

    /**
     * @var string
     */
    public $entityTypesShrink;

    /**
     * @var int
     */
    public $externalStorage;

    /**
     * @var string
     */
    public $fullTextRetrievalFields;

    /**
     * @var string
     */
    public $hnswEfConstruction;

    /**
     * @var int
     */
    public $hnswM;

    /**
     * @var string
     */
    public $LLMModel;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $managerAccount;

    /**
     * @var string
     */
    public $managerAccountPassword;

    /**
     * @var string
     */
    public $metadata;

    /**
     * @var string
     */
    public $metadataIndices;

    /**
     * @var string
     */
    public $metrics;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $parser;

    /**
     * @var int
     */
    public $pqEnable;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $relationshipTypesShrink;
    protected $_name = [
        'collection' => 'Collection',
        'DBInstanceId' => 'DBInstanceId',
        'dimension' => 'Dimension',
        'embeddingModel' => 'EmbeddingModel',
        'enableGraph' => 'EnableGraph',
        'entityTypesShrink' => 'EntityTypes',
        'externalStorage' => 'ExternalStorage',
        'fullTextRetrievalFields' => 'FullTextRetrievalFields',
        'hnswEfConstruction' => 'HnswEfConstruction',
        'hnswM' => 'HnswM',
        'LLMModel' => 'LLMModel',
        'language' => 'Language',
        'managerAccount' => 'ManagerAccount',
        'managerAccountPassword' => 'ManagerAccountPassword',
        'metadata' => 'Metadata',
        'metadataIndices' => 'MetadataIndices',
        'metrics' => 'Metrics',
        'namespace' => 'Namespace',
        'ownerId' => 'OwnerId',
        'parser' => 'Parser',
        'pqEnable' => 'PqEnable',
        'regionId' => 'RegionId',
        'relationshipTypesShrink' => 'RelationshipTypes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        if (null !== $this->embeddingModel) {
            $res['EmbeddingModel'] = $this->embeddingModel;
        }

        if (null !== $this->enableGraph) {
            $res['EnableGraph'] = $this->enableGraph;
        }

        if (null !== $this->entityTypesShrink) {
            $res['EntityTypes'] = $this->entityTypesShrink;
        }

        if (null !== $this->externalStorage) {
            $res['ExternalStorage'] = $this->externalStorage;
        }

        if (null !== $this->fullTextRetrievalFields) {
            $res['FullTextRetrievalFields'] = $this->fullTextRetrievalFields;
        }

        if (null !== $this->hnswEfConstruction) {
            $res['HnswEfConstruction'] = $this->hnswEfConstruction;
        }

        if (null !== $this->hnswM) {
            $res['HnswM'] = $this->hnswM;
        }

        if (null !== $this->LLMModel) {
            $res['LLMModel'] = $this->LLMModel;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->managerAccount) {
            $res['ManagerAccount'] = $this->managerAccount;
        }

        if (null !== $this->managerAccountPassword) {
            $res['ManagerAccountPassword'] = $this->managerAccountPassword;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->metadataIndices) {
            $res['MetadataIndices'] = $this->metadataIndices;
        }

        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->parser) {
            $res['Parser'] = $this->parser;
        }

        if (null !== $this->pqEnable) {
            $res['PqEnable'] = $this->pqEnable;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->relationshipTypesShrink) {
            $res['RelationshipTypes'] = $this->relationshipTypesShrink;
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
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        if (isset($map['EmbeddingModel'])) {
            $model->embeddingModel = $map['EmbeddingModel'];
        }

        if (isset($map['EnableGraph'])) {
            $model->enableGraph = $map['EnableGraph'];
        }

        if (isset($map['EntityTypes'])) {
            $model->entityTypesShrink = $map['EntityTypes'];
        }

        if (isset($map['ExternalStorage'])) {
            $model->externalStorage = $map['ExternalStorage'];
        }

        if (isset($map['FullTextRetrievalFields'])) {
            $model->fullTextRetrievalFields = $map['FullTextRetrievalFields'];
        }

        if (isset($map['HnswEfConstruction'])) {
            $model->hnswEfConstruction = $map['HnswEfConstruction'];
        }

        if (isset($map['HnswM'])) {
            $model->hnswM = $map['HnswM'];
        }

        if (isset($map['LLMModel'])) {
            $model->LLMModel = $map['LLMModel'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['ManagerAccount'])) {
            $model->managerAccount = $map['ManagerAccount'];
        }

        if (isset($map['ManagerAccountPassword'])) {
            $model->managerAccountPassword = $map['ManagerAccountPassword'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['MetadataIndices'])) {
            $model->metadataIndices = $map['MetadataIndices'];
        }

        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Parser'])) {
            $model->parser = $map['Parser'];
        }

        if (isset($map['PqEnable'])) {
            $model->pqEnable = $map['PqEnable'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RelationshipTypes'])) {
            $model->relationshipTypesShrink = $map['RelationshipTypes'];
        }

        return $model;
    }
}

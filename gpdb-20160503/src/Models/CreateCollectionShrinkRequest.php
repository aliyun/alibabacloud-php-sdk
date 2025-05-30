<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateCollectionShrinkRequest extends Model
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
    public $sparseVectorIndexConfigShrink;

    /**
     * @var bool
     */
    public $supportSparse;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'collection' => 'Collection',
        'DBInstanceId' => 'DBInstanceId',
        'dimension' => 'Dimension',
        'externalStorage' => 'ExternalStorage',
        'fullTextRetrievalFields' => 'FullTextRetrievalFields',
        'hnswEfConstruction' => 'HnswEfConstruction',
        'hnswM' => 'HnswM',
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
        'sparseVectorIndexConfigShrink' => 'SparseVectorIndexConfig',
        'supportSparse' => 'SupportSparse',
        'workspaceId' => 'WorkspaceId',
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

        if (null !== $this->sparseVectorIndexConfigShrink) {
            $res['SparseVectorIndexConfig'] = $this->sparseVectorIndexConfigShrink;
        }

        if (null !== $this->supportSparse) {
            $res['SupportSparse'] = $this->supportSparse;
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
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
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

        if (isset($map['SparseVectorIndexConfig'])) {
            $model->sparseVectorIndexConfigShrink = $map['SparseVectorIndexConfig'];
        }

        if (isset($map['SupportSparse'])) {
            $model->supportSparse = $map['SupportSparse'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

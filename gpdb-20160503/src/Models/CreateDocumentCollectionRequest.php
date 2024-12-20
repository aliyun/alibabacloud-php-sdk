<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateDocumentCollectionRequest extends Model
{
    /**
     * @description Name of the document library to be created.
     *
     * This parameter is required.
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @description Instance ID.
     *
     * This parameter is required.
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Vectorization algorithm.
     *
     * > - clip-rn50x64: CLIP RN50x64 model, 1024 dimensions, image vectorization algorithm
     * @example text-embedding-v1
     *
     * @var string
     */
    public $embeddingModel;

    /**
     * @description Whether to use mmap to build HNSW index, default is 0. If the data does not need to be deleted and there are requirements for the speed of uploading data, it is recommended to set this to 1.
     *
     * > - When set to 1, the index will be built using mmap. This mode does not support deletion or update operations.
     * @example 0
     *
     * @var int
     */
    public $externalStorage;

    /**
     * @description Fields used for full-text search, separated by commas (,). These fields must be keys defined in Metadata.
     *
     * @example title,page
     *
     * @var string
     */
    public $fullTextRetrievalFields;

    /**
     * @description The maximum number of neighbors in the HNSW algorithm, ranging from 1 to 1000. The interface will automatically set this value based on the vector dimension, and it generally does not need to be manually configured.
     * > It is recommended to set according to the vector dimension: >- For dimensions less than or equal to 384: 16 >- For dimensions greater than 384 but less than or equal to 768: 32 >- For dimensions greater than 768 but less than or equal to 1024: 64 >- For dimensions greater than 1024: 128
     * @example 64
     *
     * @var int
     */
    public $hnswM;

    /**
     * @description Name of the management account with rds_superuser permissions.
     *
     * This parameter is required.
     * @example testaccount
     *
     * @var string
     */
    public $managerAccount;

    /**
     * @description Management account password.
     *
     * This parameter is required.
     * @example testpassword
     *
     * @var string
     */
    public $managerAccountPassword;

    /**
     * @description Metadata of vector data, in the form of a MAP JSON string. The key represents the field name, and the value represents the data type.
     *
     * >Warning: The fields id, vector, doc_name, content, loader_metadata, source, and to_tsvector are reserved and should not be used.
     * @example {"title":"text","page":"int"}
     *
     * @var string
     */
    public $metadata;

    /**
     * @var string
     */
    public $metadataIndices;

    /**
     * @description Method used when building the vector index.
     *
     * Value description:
     * - **l2**: Euclidean distance.
     * - **ip**: Inner product (dot product) distance.
     * - **cosine** (default): Cosine similarity.
     * @example cosine
     *
     * @var string
     */
    public $metrics;

    /**
     * @description Namespace, default is public.
     *
     * > You can create a namespace using the [CreateNamespace](https://help.aliyun.com/document_detail/2401495.html) API and view the list using the [ListNamespaces](https://help.aliyun.com/document_detail/2401502.html) API.
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Tokenizer used for full-text search, default is zh_cn.
     *
     * @example zh_cn
     *
     * @var string
     */
    public $parser;

    /**
     * @description Whether to enable PQ (Product Quantization) algorithm for index acceleration. It is recommended to enable this when the data volume exceeds 500,000. Value description:
     * - 1: Enabled (default).
     * @example 1
     *
     * @var int
     */
    public $pqEnable;

    /**
     * @description ID of the region where the instance is located.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'collection'              => 'Collection',
        'DBInstanceId'            => 'DBInstanceId',
        'embeddingModel'          => 'EmbeddingModel',
        'externalStorage'         => 'ExternalStorage',
        'fullTextRetrievalFields' => 'FullTextRetrievalFields',
        'hnswM'                   => 'HnswM',
        'managerAccount'          => 'ManagerAccount',
        'managerAccountPassword'  => 'ManagerAccountPassword',
        'metadata'                => 'Metadata',
        'metadataIndices'         => 'MetadataIndices',
        'metrics'                 => 'Metrics',
        'namespace'               => 'Namespace',
        'ownerId'                 => 'OwnerId',
        'parser'                  => 'Parser',
        'pqEnable'                => 'PqEnable',
        'regionId'                => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->embeddingModel) {
            $res['EmbeddingModel'] = $this->embeddingModel;
        }
        if (null !== $this->externalStorage) {
            $res['ExternalStorage'] = $this->externalStorage;
        }
        if (null !== $this->fullTextRetrievalFields) {
            $res['FullTextRetrievalFields'] = $this->fullTextRetrievalFields;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDocumentCollectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['EmbeddingModel'])) {
            $model->embeddingModel = $map['EmbeddingModel'];
        }
        if (isset($map['ExternalStorage'])) {
            $model->externalStorage = $map['ExternalStorage'];
        }
        if (isset($map['FullTextRetrievalFields'])) {
            $model->fullTextRetrievalFields = $map['FullTextRetrievalFields'];
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

        return $model;
    }
}

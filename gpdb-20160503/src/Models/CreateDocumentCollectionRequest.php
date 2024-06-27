<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateDocumentCollectionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @description This parameter is required.
     *
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The vectorization algorithm.
     *
     * >  Valid values:
     *
     *   text-embedding-v1: the algorithm that produces 1536-dimensional vectors.
     *
     *   text-embedding-v2: the algorithm that produces 1536-dimensional vectors.
     *
     *   text2vec: the algorithm that produces 1024-dimensional vectors.
     *
     *   m3e-base: the algorithm that produces 768-dimensional vectors.
     *
     *   m3e-small: the algorithm that produces 512-dimensional vectors.
     *
     *   multimodal-embedding-one-peace-v1: the image vectorization algorithm that produces 1536-dimensional vectors.
     *
     *   clip-vit-b-32: the image vectorization algorithm that uses the Contrastive Language-Image Pre-Training (CLIP) ViT-B/32 model and produces 512-dimensional vectors.
     *
     *   clip-vit-b-16: the image vectorization algorithm that uses the CLIP ViT-B/16 model and produces 512-dimensional vectors.
     *
     *   clip-vit-l-14: the image vectorization algorithm that uses the CLIP ViT-L/14 model and produces 768-dimensional vectors.
     *
     *   clip-vit-l-14-336px: the image vectorization algorithm that uses the CLIP ViT-L/14@336px model and produces 768-dimensional vectors.
     *
     *   clip-rn50: the image vectorization algorithm that uses the CLIP RN50 model and produces 1024-dimensional vectors.
     *
     *   clip-rn101: the image vectorization algorithm that uses the CLIP RN101 model and produces 512-dimensional vectors.
     *
     *   clip-rn50x4: the image vectorization algorithm that uses the CLIP RN50x4 model and produces 640-dimensional vectors.
     *
     *   clip-rn50x16: the image vectorization algorithm that uses the CLIP RN50x16 model and produces 768-dimensional vectors.
     *
     *   clip-rn50x64: the image vectorization algorithm that uses the CLIP RN50x64 model and produces 1024-dimensional vectors.
     *
     * @example text-embedding-v1
     *
     * @var string
     */
    public $embeddingModel;

    /**
     * @description Specifies whether to use the memory mapping technology to create HNSW indexes. Valid values: 0 and 1. Default value: 0. We recommend that you set the value to 1 in scenarios that require upload speed but not data deletion.
     *
     * >
     *
     *   0: uses segmented paging storage to create indexes. This method uses the shared buffer of PostgreSQL for caching and supports the delete and update operations.
     *
     *   1: uses the memory mapping technology to create indexes. This method does not support the delete or update operation.
     *
     * @example 0
     *
     * @var int
     */
    public $externalStorage;

    /**
     * @example title,page
     *
     * @var string
     */
    public $fullTextRetrievalFields;

    /**
     * @description The maximum number of neighbors for the Hierarchical Navigable Small World (HNSW) algorithm. Valid values: 1 to 1000. In most cases, this parameter is automatically configured based on the value of the Dimension parameter. You do not need to configure this parameter.
     *
     * >  We recommend that you configure this parameter based on the value of the Dimension parameter.
     *
     *   If you set Dimension to a value less than or equal to 384, set the value of HnswM to 16.
     *
     *   If you set Dimension to a value greater than 384 and less than or equal to 768, set the value of HnswM to 32.
     *
     *   If you set Dimension to a value greater than 768 and less than or equal to 1024, set the value of HnswM to 64.
     *
     *   If you set Dimension to a value greater than 1024, set the value of HnswM to 128.
     *
     * @example 64
     *
     * @var int
     */
    public $hnswM;

    /**
     * @description This parameter is required.
     *
     * @example testaccount
     *
     * @var string
     */
    public $managerAccount;

    /**
     * @description This parameter is required.
     *
     * @example testpassword
     *
     * @var string
     */
    public $managerAccountPassword;

    /**
     * @example {"title":"text","page":"int"}
     *
     * @var string
     */
    public $metadata;

    /**
     * @example cosine
     *
     * @var string
     */
    public $metrics;

    /**
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
     * @example zh_cn
     *
     * @var string
     */
    public $parser;

    /**
     * @description Specifies whether to enable the product quantization (PQ) feature for index acceleration. We recommend that you enable this feature for more than 500,000 rows of data. Valid values:
     *
     *   0: no.
     *   1 (default): yes.
     *
     * @example 0
     *
     * @var int
     */
    public $pqEnable;

    /**
     * @description This parameter is required.
     *
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

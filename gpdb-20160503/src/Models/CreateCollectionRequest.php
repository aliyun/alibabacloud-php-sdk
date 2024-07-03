<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateCollectionRequest extends Model
{
    /**
     * @description The name of the collection that you want to create.
     *
     * This parameter is required.
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
     * @description The number of vector dimensions.
     *
     * >  If you specify this parameter, an index is created. When you call the [UpsertCollectionData](https://help.aliyun.com/document_detail/2401493.html) operation, make sure that the length of the Rows.Vector parameter is the same as the value of this parameter. If you do not specify this parameter, you can call the [CreateVectorIndex](https://help.aliyun.com/document_detail/2401499.html) operation to create an index.
     * @example 1024
     *
     * @var int
     */
    public $dimension;

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
     * @example title,content
     *
     * @var string
     */
    public $fullTextRetrievalFields;

    /**
     * @description The maximum number of neighbors for the Hierarchical Navigable Small World (HNSW) algorithm. Valid values: 1 to 1000. In most cases, this parameter is automatically configured based on the value of the Dimension parameter. You do not need to configure this parameter.
     *
     * >  We recommend that you configure this parameter based on the value of the Dimension parameter.
     *
     *If you set Dimension to a value less than or equal to 384, set the value of HnswM to 16.
     *
     *If you set Dimension to a value greater than 384 and less than or equal to 768, set the value of HnswM to 32.
     *
     *If you set Dimension to a value greater than 768 and less than or equal to 1024, set the value of HnswM to 64.
     *
     *If you set Dimension to a value greater than 1024, set the value of HnswM to 128.
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
     * @description The metadata of the vector data, which is a JSON string in the MAP format. The key specifies the field name, and the value specifies the data type.
     *
     * This parameter is required.
     * @example {"title":"text","content":"text","response":"int"}
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
     * @description The name of the namespace.
     *
     * >  You can call the [CreateNamespace](https://help.aliyun.com/document_detail/2401495.html) operation to create a namespace and call the [ListNamespaces](https://help.aliyun.com/document_detail/2401502.html) operation to query a list of namespaces.
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
     * @description The region ID of the instance.
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
        'dimension'               => 'Dimension',
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
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
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
     * @return CreateCollectionRequest
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
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
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

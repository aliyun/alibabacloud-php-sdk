<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkDashVectorParameters\dashVectorSchemaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkDashVectorParameters\partition;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkDashVectorParameters\primaryKeyId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkDashVectorParameters\vector;
use AlibabaCloud\Tea\Model;

class sinkDashVectorParameters extends Model
{
    /**
     * @description The API key that you want to create in the DashVector console.
     *
     * @example Q34nExQH7sQ****
     *
     * @var string
     */
    public $apiKey;

    /**
     * @description The collection name.
     *
     * @example collection1
     *
     * @var string
     */
    public $collection;

    /**
     * @description The parameters in the Schema field of the table when data is inserted into DashVector. After the event content is transformed, the data must be in JSON format.
     *
     * @var dashVectorSchemaParameters
     */
    public $dashVectorSchemaParameters;

    /**
     * @description The ID of the DashVector instance.
     *
     * @example vrs-cn-lbj3ru1***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The network type. Valid values:
     *
     *   PrivateNetwork
     *   PublicNetwork
     *
     * @example PublicNetwork
     *
     * @var string
     */
    public $network;

    /**
     * @description The type of operation that you want to perform on the DashVector database. Valid values:
     *
     *   Delete
     *   Upsert
     *
     * @example Upsert
     *
     * @var string
     */
    public $operation;

    /**
     * @description The partition. Default value: default.
     *
     * @var partition
     */
    public $partition;

    /**
     * @description The ID of the primary key that you want to use when you insert or delete records. If you do not specify this parameter, a random primary key ID is returned.
     *
     * @var primaryKeyId
     */
    public $primaryKeyId;

    /**
     * @description The vector that is recorded when data is inserted into DashVector.
     *
     * @var vector
     */
    public $vector;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'collection' => 'Collection',
        'dashVectorSchemaParameters' => 'DashVectorSchemaParameters',
        'instanceId' => 'InstanceId',
        'network' => 'Network',
        'operation' => 'Operation',
        'partition' => 'Partition',
        'primaryKeyId' => 'PrimaryKeyId',
        'vector' => 'Vector',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }
        if (null !== $this->dashVectorSchemaParameters) {
            $res['DashVectorSchemaParameters'] = null !== $this->dashVectorSchemaParameters ? $this->dashVectorSchemaParameters->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->partition) {
            $res['Partition'] = null !== $this->partition ? $this->partition->toMap() : null;
        }
        if (null !== $this->primaryKeyId) {
            $res['PrimaryKeyId'] = null !== $this->primaryKeyId ? $this->primaryKeyId->toMap() : null;
        }
        if (null !== $this->vector) {
            $res['Vector'] = null !== $this->vector ? $this->vector->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkDashVectorParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }
        if (isset($map['DashVectorSchemaParameters'])) {
            $model->dashVectorSchemaParameters = dashVectorSchemaParameters::fromMap($map['DashVectorSchemaParameters']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['Partition'])) {
            $model->partition = partition::fromMap($map['Partition']);
        }
        if (isset($map['PrimaryKeyId'])) {
            $model->primaryKeyId = primaryKeyId::fromMap($map['PrimaryKeyId']);
        }
        if (isset($map['Vector'])) {
            $model->vector = vector::fromMap($map['Vector']);
        }

        return $model;
    }
}

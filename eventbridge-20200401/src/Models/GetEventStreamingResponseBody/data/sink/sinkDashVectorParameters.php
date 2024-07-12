<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDashVectorParameters\dashVectorSchemaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDashVectorParameters\partition;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDashVectorParameters\primaryKeyId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDashVectorParameters\vector;
use AlibabaCloud\Tea\Model;

class sinkDashVectorParameters extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $collection;

    /**
     * @var dashVectorSchemaParameters
     */
    public $dashVectorSchemaParameters;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var partition
     */
    public $partition;

    /**
     * @var primaryKeyId
     */
    public $primaryKeyId;

    /**
     * @var vector
     */
    public $vector;
    protected $_name = [
        'apiKey'                     => 'ApiKey',
        'collection'                 => 'Collection',
        'dashVectorSchemaParameters' => 'DashVectorSchemaParameters',
        'instanceId'                 => 'InstanceId',
        'network'                    => 'Network',
        'operation'                  => 'Operation',
        'partition'                  => 'Partition',
        'primaryKeyId'               => 'PrimaryKeyId',
        'vector'                     => 'Vector',
    ];

    public function validate()
    {
    }

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

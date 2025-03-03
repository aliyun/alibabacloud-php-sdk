<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDashVectorParameters\dashVectorSchemaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDashVectorParameters\partition;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDashVectorParameters\primaryKeyId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDashVectorParameters\vector;

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
        if (null !== $this->dashVectorSchemaParameters) {
            $this->dashVectorSchemaParameters->validate();
        }
        if (null !== $this->partition) {
            $this->partition->validate();
        }
        if (null !== $this->primaryKeyId) {
            $this->primaryKeyId->validate();
        }
        if (null !== $this->vector) {
            $this->vector->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }

        if (null !== $this->dashVectorSchemaParameters) {
            $res['DashVectorSchemaParameters'] = null !== $this->dashVectorSchemaParameters ? $this->dashVectorSchemaParameters->toArray($noStream) : $this->dashVectorSchemaParameters;
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
            $res['Partition'] = null !== $this->partition ? $this->partition->toArray($noStream) : $this->partition;
        }

        if (null !== $this->primaryKeyId) {
            $res['PrimaryKeyId'] = null !== $this->primaryKeyId ? $this->primaryKeyId->toArray($noStream) : $this->primaryKeyId;
        }

        if (null !== $this->vector) {
            $res['Vector'] = null !== $this->vector ? $this->vector->toArray($noStream) : $this->vector;
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

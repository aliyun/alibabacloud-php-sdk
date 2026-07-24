<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\GetJobDebugDataResponseBody\data;

use AlibabaCloud\Dara\Model;

class dataRows extends Model
{
    /**
     * @var string
     */
    public $flinkInstanceId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $partition;

    /**
     * @var string
     */
    public $processedValue;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'flinkInstanceId' => 'FlinkInstanceId',
        'jobName' => 'JobName',
        'offset' => 'Offset',
        'partition' => 'Partition',
        'processedValue' => 'ProcessedValue',
        'timestamp' => 'Timestamp',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flinkInstanceId) {
            $res['FlinkInstanceId'] = $this->flinkInstanceId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }

        if (null !== $this->processedValue) {
            $res['ProcessedValue'] = $this->processedValue;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['FlinkInstanceId'])) {
            $model->flinkInstanceId = $map['FlinkInstanceId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }

        if (isset($map['ProcessedValue'])) {
            $model->processedValue = $map['ProcessedValue'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

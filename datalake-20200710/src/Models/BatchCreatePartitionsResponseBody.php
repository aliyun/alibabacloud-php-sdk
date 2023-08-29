<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class BatchCreatePartitionsResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example .
     *
     * @var string
     */
    public $message;

    /**
     * @var PartitionError[]
     */
    public $partitionErrors;

    /**
     * @var Partition[]
     */
    public $partitions;

    /**
     * @example B7F4B621-E41E-4C84-B97F-42B5380A32BB
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'            => 'Code',
        'message'         => 'Message',
        'partitionErrors' => 'PartitionErrors',
        'partitions'      => 'Partitions',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->partitionErrors) {
            $res['PartitionErrors'] = [];
            if (null !== $this->partitionErrors && \is_array($this->partitionErrors)) {
                $n = 0;
                foreach ($this->partitionErrors as $item) {
                    $res['PartitionErrors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->partitions) {
            $res['Partitions'] = [];
            if (null !== $this->partitions && \is_array($this->partitions)) {
                $n = 0;
                foreach ($this->partitions as $item) {
                    $res['Partitions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreatePartitionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PartitionErrors'])) {
            if (!empty($map['PartitionErrors'])) {
                $model->partitionErrors = [];
                $n                      = 0;
                foreach ($map['PartitionErrors'] as $item) {
                    $model->partitionErrors[$n++] = null !== $item ? PartitionError::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Partitions'])) {
            if (!empty($map['Partitions'])) {
                $model->partitions = [];
                $n                 = 0;
                foreach ($map['Partitions'] as $item) {
                    $model->partitions[$n++] = null !== $item ? Partition::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

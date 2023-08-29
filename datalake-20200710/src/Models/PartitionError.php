<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class PartitionError extends Model
{
    /**
     * @var ErrorDetail
     */
    public $errorDetail;

    /**
     * @var string[]
     */
    public $partitionValues;
    protected $_name = [
        'errorDetail'     => 'ErrorDetail',
        'partitionValues' => 'PartitionValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = null !== $this->errorDetail ? $this->errorDetail->toMap() : null;
        }
        if (null !== $this->partitionValues) {
            $res['PartitionValues'] = $this->partitionValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PartitionError
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorDetail'])) {
            $model->errorDetail = ErrorDetail::fromMap($map['ErrorDetail']);
        }
        if (isset($map['PartitionValues'])) {
            if (!empty($map['PartitionValues'])) {
                $model->partitionValues = $map['PartitionValues'];
            }
        }

        return $model;
    }
}

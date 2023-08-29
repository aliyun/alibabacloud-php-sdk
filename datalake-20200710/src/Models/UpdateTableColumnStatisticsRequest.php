<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class UpdateTableColumnStatisticsRequest extends Model
{
    /**
     * @var UpdateTablePartitionColumnStatisticsRequest
     */
    public $updateTablePartitionColumnStatisticsRequest;
    protected $_name = [
        'updateTablePartitionColumnStatisticsRequest' => 'UpdateTablePartitionColumnStatisticsRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTablePartitionColumnStatisticsRequest) {
            $res['UpdateTablePartitionColumnStatisticsRequest'] = null !== $this->updateTablePartitionColumnStatisticsRequest ? $this->updateTablePartitionColumnStatisticsRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTableColumnStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateTablePartitionColumnStatisticsRequest'])) {
            $model->updateTablePartitionColumnStatisticsRequest = UpdateTablePartitionColumnStatisticsRequest::fromMap($map['UpdateTablePartitionColumnStatisticsRequest']);
        }

        return $model;
    }
}

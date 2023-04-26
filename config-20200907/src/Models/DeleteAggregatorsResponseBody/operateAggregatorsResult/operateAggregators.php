<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsResponseBody\operateAggregatorsResult;

use AlibabaCloud\Tea\Model;

class operateAggregators extends Model
{
    /**
     * @example ca-dacf86d8314e00eb****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description Indicates whether the delete operation is successful. Valid values:
     *
     *   true: The account group is deleted.
     *   false: The account group fails to be deleted.
     *
     * @example AccountNotExisted
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The ID of the account group.
     *
     * @example false
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'aggregatorId' => 'AggregatorId',
        'errorCode'    => 'ErrorCode',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operateAggregators
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

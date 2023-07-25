<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsResponseBody\operateAggregatorsResult;

use AlibabaCloud\Tea\Model;

class operateAggregators extends Model
{
    /**
     * @description The ID of the account group.
     *
     * @example ca-dacf86d8314e00eb****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The error code returned.
     *
     * > No error code is returned for the account group if the account group is deleted.
     * @example AccountNotExisted
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true: The request was successful.
     *   false: The request failed.
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

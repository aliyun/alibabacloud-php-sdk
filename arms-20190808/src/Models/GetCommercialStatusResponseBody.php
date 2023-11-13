<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetCommercialStatusResponseBody\userAndCommodityStatus;
use AlibabaCloud\Tea\Model;

class GetCommercialStatusResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 49C82193-E991-5F6A-AF3E-1664D8D05CA3
     *
     * @var string
     */
    public $requestId;

    /**
     * @var userAndCommodityStatus
     */
    public $userAndCommodityStatus;
    protected $_name = [
        'requestId'              => 'RequestId',
        'userAndCommodityStatus' => 'UserAndCommodityStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userAndCommodityStatus) {
            $res['UserAndCommodityStatus'] = null !== $this->userAndCommodityStatus ? $this->userAndCommodityStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCommercialStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserAndCommodityStatus'])) {
            $model->userAndCommodityStatus = userAndCommodityStatus::fromMap($map['UserAndCommodityStatus']);
        }

        return $model;
    }
}

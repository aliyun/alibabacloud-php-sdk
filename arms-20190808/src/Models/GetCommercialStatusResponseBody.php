<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetCommercialStatusResponseBody\userAndCommodityStatus;

class GetCommercialStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userAndCommodityStatus
     */
    public $userAndCommodityStatus;
    protected $_name = [
        'requestId' => 'RequestId',
        'userAndCommodityStatus' => 'UserAndCommodityStatus',
    ];

    public function validate()
    {
        if (null !== $this->userAndCommodityStatus) {
            $this->userAndCommodityStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userAndCommodityStatus) {
            $res['UserAndCommodityStatus'] = null !== $this->userAndCommodityStatus ? $this->userAndCommodityStatus->toArray($noStream) : $this->userAndCommodityStatus;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserAndCommodityStatus'])) {
            $model->userAndCommodityStatus = userAndCommodityStatus::fromMap($map['UserAndCommodityStatus']);
        }

        return $model;
    }
}

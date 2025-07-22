<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\SDK\Mseap\V20210118\Models\GetOrderSummaryForPartnerResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetOrderSummaryForPartnerResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @description Id of the request
     *
     * @example 56B009EB-AAA5-52C9-B05F-AF425E3885E8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOrderSummaryForPartnerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

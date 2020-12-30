<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTrafficByRegionResponseBody\trafficDataList;
use AlibabaCloud\Tea\Model;

class GetTrafficByRegionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trafficDataList
     */
    public $trafficDataList;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'requestId'       => 'RequestId',
        'trafficDataList' => 'TrafficDataList',
        'code'            => 'Code',
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
        if (null !== $this->trafficDataList) {
            $res['TrafficDataList'] = null !== $this->trafficDataList ? $this->trafficDataList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTrafficByRegionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficDataList'])) {
            $model->trafficDataList = trafficDataList::fromMap($map['TrafficDataList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

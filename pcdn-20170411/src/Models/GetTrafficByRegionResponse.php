<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTrafficByRegionResponse\trafficDataList;
use AlibabaCloud\Tea\Model;

class GetTrafficByRegionResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var trafficDataList
     */
    public $trafficDataList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'code'            => 'Code',
        'trafficDataList' => 'TrafficDataList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('trafficDataList', $this->trafficDataList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->trafficDataList) {
            $res['TrafficDataList'] = null !== $this->trafficDataList ? $this->trafficDataList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTrafficByRegionResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['TrafficDataList'])) {
            $model->trafficDataList = trafficDataList::fromMap($map['TrafficDataList']);
        }

        return $model;
    }
}

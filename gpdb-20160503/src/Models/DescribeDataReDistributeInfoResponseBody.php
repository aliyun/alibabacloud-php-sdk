<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataReDistributeInfoResponseBody\dataReDistributeInfo;
use AlibabaCloud\Tea\Model;

class DescribeDataReDistributeInfoResponseBody extends Model
{
    /**
     * @description The data redistribution information.
     *
     * @var dataReDistributeInfo
     */
    public $dataReDistributeInfo;

    /**
     * @description The request ID.
     *
     * @example 04836A02-ADC9-1AA7-AC36-DE5E048BF505
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataReDistributeInfo' => 'DataReDistributeInfo',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataReDistributeInfo) {
            $res['DataReDistributeInfo'] = null !== $this->dataReDistributeInfo ? $this->dataReDistributeInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataReDistributeInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataReDistributeInfo'])) {
            $model->dataReDistributeInfo = dataReDistributeInfo::fromMap($map['DataReDistributeInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

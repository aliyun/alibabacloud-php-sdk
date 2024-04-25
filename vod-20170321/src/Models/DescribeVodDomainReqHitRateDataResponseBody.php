<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainReqHitRateDataResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainReqHitRateDataResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @example 300
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2023-12-22T08:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example D94E471F-1A27-442E-552D-D4D2000C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2023-12-21T08:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'data'         => 'Data',
        'dataInterval' => 'DataInterval',
        'domainName'   => 'DomainName',
        'endTime'      => 'EndTime',
        'requestId'    => 'RequestId',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainReqHitRateDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

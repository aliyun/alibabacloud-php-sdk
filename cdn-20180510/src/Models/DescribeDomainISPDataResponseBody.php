<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainISPDataResponseBody\value;
use AlibabaCloud\Tea\Model;

class DescribeDomainISPDataResponseBody extends Model
{
    /**
     * @description The accelerated domain name. You can specify only one domain name in each call.
     *
     * By default, this operation queries the proportions of data usage for all accelerated domain names.
     * @example 86400
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The end of the time range that was queried.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeDomainISPData**.
     *
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The number of queries per second.
     *
     * @example DE81639B-DAC1-4C76-AB72-F34B836837D5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The proportion of network traffic.
     *
     * @example 2019-11-29T05:33:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The proportion of the HTTP status code.
     *
     * @var value
     */
    public $value;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'domainName'   => 'DomainName',
        'endTime'      => 'EndTime',
        'requestId'    => 'RequestId',
        'startTime'    => 'StartTime',
        'value'        => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->value) {
            $res['Value'] = null !== $this->value ? $this->value->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainISPDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Value'])) {
            $model->value = value::fromMap($map['Value']);
        }

        return $model;
    }
}

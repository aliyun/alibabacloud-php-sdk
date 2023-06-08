<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainISPDataResponseBody\value;
use AlibabaCloud\Tea\Model;

class DescribeDomainISPDataResponseBody extends Model
{
    /**
     * @description The time interval. Unit: seconds.
     *
     * @example 86400
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the request.
     *
     * @example DE81639B-DAC1-4C76-AB72-F34B836837D5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range that was queried.
     *
     * @example 2019-11-29T05:33:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The access statistics by ISP.
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

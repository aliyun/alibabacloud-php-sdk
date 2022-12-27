<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainUvDataResponseBody\uvDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainUvDataResponseBody extends Model
{
    /**
     * @example 3600
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
     * @example 2015-11-30T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example E9D3257A-1B7C-414C-90C1-8D07AC47BCAC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2015-11-29T00:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @var uvDataInterval
     */
    public $uvDataInterval;
    protected $_name = [
        'dataInterval'   => 'DataInterval',
        'domainName'     => 'DomainName',
        'endTime'        => 'EndTime',
        'requestId'      => 'RequestId',
        'startTime'      => 'StartTime',
        'uvDataInterval' => 'UvDataInterval',
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
        if (null !== $this->uvDataInterval) {
            $res['UvDataInterval'] = null !== $this->uvDataInterval ? $this->uvDataInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainUvDataResponseBody
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
        if (isset($map['UvDataInterval'])) {
            $model->uvDataInterval = uvDataInterval::fromMap($map['UvDataInterval']);
        }

        return $model;
    }
}

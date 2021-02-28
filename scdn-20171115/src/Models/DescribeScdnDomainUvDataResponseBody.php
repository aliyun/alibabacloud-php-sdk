<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainUvDataResponseBody\uvDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeScdnDomainUvDataResponseBody extends Model
{
    /**
     * @var uvDataInterval
     */
    public $uvDataInterval;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $dataInterval;
    protected $_name = [
        'uvDataInterval' => 'UvDataInterval',
        'endTime'        => 'EndTime',
        'requestId'      => 'RequestId',
        'domainName'     => 'DomainName',
        'startTime'      => 'StartTime',
        'dataInterval'   => 'DataInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uvDataInterval) {
            $res['UvDataInterval'] = null !== $this->uvDataInterval ? $this->uvDataInterval->toMap() : null;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScdnDomainUvDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UvDataInterval'])) {
            $model->uvDataInterval = uvDataInterval::fromMap($map['UvDataInterval']);
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }

        return $model;
    }
}

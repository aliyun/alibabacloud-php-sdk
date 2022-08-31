<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20141111\Models;

use AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeDomainFileSizeProportionDataResponseBody\fileSizeProportionDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeDomainFileSizeProportionDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var fileSizeProportionDataInterval
     */
    public $fileSizeProportionDataInterval;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'                   => 'DataInterval',
        'domainName'                     => 'DomainName',
        'endTime'                        => 'EndTime',
        'fileSizeProportionDataInterval' => 'FileSizeProportionDataInterval',
        'requestId'                      => 'RequestId',
        'startTime'                      => 'StartTime',
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
        if (null !== $this->fileSizeProportionDataInterval) {
            $res['FileSizeProportionDataInterval'] = null !== $this->fileSizeProportionDataInterval ? $this->fileSizeProportionDataInterval->toMap() : null;
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
     * @return DescribeDomainFileSizeProportionDataResponseBody
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
        if (isset($map['FileSizeProportionDataInterval'])) {
            $model->fileSizeProportionDataInterval = fileSizeProportionDataInterval::fromMap($map['FileSizeProportionDataInterval']);
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

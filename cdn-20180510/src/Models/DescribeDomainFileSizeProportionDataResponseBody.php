<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainFileSizeProportionDataResponseBody\fileSizeProportionDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeDomainFileSizeProportionDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

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
    public $dataInterval;

    /**
     * @var fileSizeProportionDataInterval
     */
    public $fileSizeProportionDataInterval;
    protected $_name = [
        'endTime'                        => 'EndTime',
        'startTime'                      => 'StartTime',
        'requestId'                      => 'RequestId',
        'domainName'                     => 'DomainName',
        'dataInterval'                   => 'DataInterval',
        'fileSizeProportionDataInterval' => 'FileSizeProportionDataInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->fileSizeProportionDataInterval) {
            $res['FileSizeProportionDataInterval'] = null !== $this->fileSizeProportionDataInterval ? $this->fileSizeProportionDataInterval->toMap() : null;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['FileSizeProportionDataInterval'])) {
            $model->fileSizeProportionDataInterval = fileSizeProportionDataInterval::fromMap($map['FileSizeProportionDataInterval']);
        }

        return $model;
    }
}

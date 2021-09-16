<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainUsageDataResponseBody\usageDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainUsageDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $type;

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
    public $area;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var usageDataPerInterval
     */
    public $usageDataPerInterval;
    protected $_name = [
        'endTime'              => 'EndTime',
        'type'                 => 'Type',
        'startTime'            => 'StartTime',
        'requestId'            => 'RequestId',
        'area'                 => 'Area',
        'domainName'           => 'DomainName',
        'dataInterval'         => 'DataInterval',
        'usageDataPerInterval' => 'UsageDataPerInterval',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->usageDataPerInterval) {
            $res['UsageDataPerInterval'] = null !== $this->usageDataPerInterval ? $this->usageDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['UsageDataPerInterval'])) {
            $model->usageDataPerInterval = usageDataPerInterval::fromMap($map['UsageDataPerInterval']);
        }

        return $model;
    }
}

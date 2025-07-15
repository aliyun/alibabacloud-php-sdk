<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPvUvDataResponseBody\pvUvDataInfos;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainPvUvDataResponseBody extends Model
{
    /**
     * @description The time interval between the entries returned. Unit: seconds. Default value: 3600.
     *
     * @example 3600
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range during which the data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ssZ* format. The time is displayed in UTC.
     *
     * @example 2018-03-20T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The data of PVs and UVs.
     *
     * @var pvUvDataInfos
     */
    public $pvUvDataInfos;

    /**
     * @description The request ID.
     *
     * @example E9D3257A-1B7C-414C-90C1-8D07AC47BCAC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which the data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ssZ* format. The time is displayed in UTC.
     *
     * @example 2018-03-17T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'pvUvDataInfos' => 'PvUvDataInfos',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

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
        if (null !== $this->pvUvDataInfos) {
            $res['PvUvDataInfos'] = null !== $this->pvUvDataInfos ? $this->pvUvDataInfos->toMap() : null;
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
     * @return DescribeLiveDomainPvUvDataResponseBody
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
        if (isset($map['PvUvDataInfos'])) {
            $model->pvUvDataInfos = pvUvDataInfos::fromMap($map['PvUvDataInfos']);
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

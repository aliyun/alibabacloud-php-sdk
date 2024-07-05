<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainPvUvDataResponseBody\pvUvDataInfos;
use AlibabaCloud\Tea\Model;

class DescribeVsDomainPvUvDataResponseBody extends Model
{
    /**
     * @example 3600
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2021-11-24T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var pvUvDataInfos
     */
    public $pvUvDataInfos;

    /**
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2021-12-12T10:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'  => 'DataInterval',
        'domainName'    => 'DomainName',
        'endTime'       => 'EndTime',
        'pvUvDataInfos' => 'PvUvDataInfos',
        'requestId'     => 'RequestId',
        'startTime'     => 'StartTime',
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
     * @return DescribeVsDomainPvUvDataResponseBody
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

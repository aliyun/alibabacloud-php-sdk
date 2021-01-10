<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPvUvDataResponseBody\pvUvDataInfos;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainPvUvDataResponseBody extends Model
{
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
    public $endTime;

    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var pvUvDataInfos
     */
    public $pvUvDataInfos;
    protected $_name = [
        'requestId'     => 'RequestId',
        'domainName'    => 'DomainName',
        'startTime'     => 'StartTime',
        'endTime'       => 'EndTime',
        'dataInterval'  => 'DataInterval',
        'pvUvDataInfos' => 'PvUvDataInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->pvUvDataInfos) {
            $res['PvUvDataInfos'] = null !== $this->pvUvDataInfos ? $this->pvUvDataInfos->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['PvUvDataInfos'])) {
            $model->pvUvDataInfos = pvUvDataInfos::fromMap($map['PvUvDataInfos']);
        }

        return $model;
    }
}

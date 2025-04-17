<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainMax95BpsDataResponseBody\detailData;

class DescribeVodDomainMax95BpsDataResponseBody extends Model
{
    /**
     * @var detailData
     */
    public $detailData;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domesticMax95Bps;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $max95Bps;

    /**
     * @var string
     */
    public $overseasMax95Bps;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'detailData' => 'DetailData',
        'domainName' => 'DomainName',
        'domesticMax95Bps' => 'DomesticMax95Bps',
        'endTime' => 'EndTime',
        'max95Bps' => 'Max95Bps',
        'overseasMax95Bps' => 'OverseasMax95Bps',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (null !== $this->detailData) {
            $this->detailData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detailData) {
            $res['DetailData'] = null !== $this->detailData ? $this->detailData->toArray($noStream) : $this->detailData;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domesticMax95Bps) {
            $res['DomesticMax95Bps'] = $this->domesticMax95Bps;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->max95Bps) {
            $res['Max95Bps'] = $this->max95Bps;
        }

        if (null !== $this->overseasMax95Bps) {
            $res['OverseasMax95Bps'] = $this->overseasMax95Bps;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailData'])) {
            $model->detailData = detailData::fromMap($map['DetailData']);
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomesticMax95Bps'])) {
            $model->domesticMax95Bps = $map['DomesticMax95Bps'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Max95Bps'])) {
            $model->max95Bps = $map['Max95Bps'];
        }

        if (isset($map['OverseasMax95Bps'])) {
            $model->overseasMax95Bps = $map['OverseasMax95Bps'];
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

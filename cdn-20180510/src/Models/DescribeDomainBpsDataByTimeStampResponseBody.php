<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataByTimeStampResponseBody\bpsDataList;
use AlibabaCloud\Tea\Model;

class DescribeDomainBpsDataByTimeStampResponseBody extends Model
{
    /**
     * @var bpsDataList
     */
    public $bpsDataList;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'bpsDataList' => 'BpsDataList',
        'domainName'  => 'DomainName',
        'requestId'   => 'RequestId',
        'timeStamp'   => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bpsDataList) {
            $res['BpsDataList'] = null !== $this->bpsDataList ? $this->bpsDataList->toMap() : null;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainBpsDataByTimeStampResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BpsDataList'])) {
            $model->bpsDataList = bpsDataList::fromMap($map['BpsDataList']);
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}

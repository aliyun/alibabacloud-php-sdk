<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataByTimeStampResponseBody\bpsDataList;
use AlibabaCloud\Tea\Model;

class DescribeDomainBpsDataByTimeStampResponseBody extends Model
{
    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bpsDataList
     */
    public $bpsDataList;
    protected $_name = [
        'timeStamp'   => 'TimeStamp',
        'requestId'   => 'RequestId',
        'domainName'  => 'DomainName',
        'bpsDataList' => 'BpsDataList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->bpsDataList) {
            $res['BpsDataList'] = null !== $this->bpsDataList ? $this->bpsDataList->toMap() : null;
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
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['BpsDataList'])) {
            $model->bpsDataList = bpsDataList::fromMap($map['BpsDataList']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataByTimeStampResponseBody\bpsDataList;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainBpsDataByTimeStampResponseBody extends Model
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
    public $timeStamp;

    /**
     * @var bpsDataList
     */
    public $bpsDataList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'domainName'  => 'DomainName',
        'timeStamp'   => 'TimeStamp',
        'bpsDataList' => 'BpsDataList',
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
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->bpsDataList) {
            $res['BpsDataList'] = null !== $this->bpsDataList ? $this->bpsDataList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainBpsDataByTimeStampResponseBody
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
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['BpsDataList'])) {
            $model->bpsDataList = bpsDataList::fromMap($map['BpsDataList']);
        }

        return $model;
    }
}

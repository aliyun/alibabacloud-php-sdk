<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataByTimeStampResponseBody\bpsDataList;

class DescribeDomainBpsDataByTimeStampResponseBody extends Model
{
    /**
     * @var bpsDataList
     */
    public $bpsDataList;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'bpsDataList' => 'BpsDataList',
        'domainName' => 'DomainName',
        'requestId' => 'RequestId',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        if (null !== $this->bpsDataList) {
            $this->bpsDataList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bpsDataList) {
            $res['BpsDataList'] = null !== $this->bpsDataList ? $this->bpsDataList->toArray($noStream) : $this->bpsDataList;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

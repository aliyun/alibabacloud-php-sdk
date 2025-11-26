<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeBandwitdhByInternetChargeTypeResponseBody extends Model
{
    /**
     * @var int
     */
    public $bandwidthValue;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'bandwidthValue' => 'BandwidthValue',
        'internetChargeType' => 'InternetChargeType',
        'requestId' => 'RequestId',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthValue) {
            $res['BandwidthValue'] = $this->bandwidthValue;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
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
        if (isset($map['BandwidthValue'])) {
            $model->bandwidthValue = $map['BandwidthValue'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
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

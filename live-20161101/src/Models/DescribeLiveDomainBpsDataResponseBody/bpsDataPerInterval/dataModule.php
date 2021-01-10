<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataResponseBody\bpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $httpsBpsValue;

    /**
     * @var string
     */
    public $bpsValue;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $httpBpsValue;
    protected $_name = [
        'httpsBpsValue' => 'HttpsBpsValue',
        'bpsValue'      => 'BpsValue',
        'timeStamp'     => 'TimeStamp',
        'httpBpsValue'  => 'HttpBpsValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpsBpsValue) {
            $res['HttpsBpsValue'] = $this->httpsBpsValue;
        }
        if (null !== $this->bpsValue) {
            $res['BpsValue'] = $this->bpsValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->httpBpsValue) {
            $res['HttpBpsValue'] = $this->httpBpsValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpsBpsValue'])) {
            $model->httpsBpsValue = $map['HttpsBpsValue'];
        }
        if (isset($map['BpsValue'])) {
            $model->bpsValue = $map['BpsValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['HttpBpsValue'])) {
            $model->httpBpsValue = $map['HttpBpsValue'];
        }

        return $model;
    }
}

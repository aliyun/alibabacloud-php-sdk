<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataResponse\bpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $bpsValue;

    /**
     * @var string
     */
    public $httpBpsValue;

    /**
     * @var string
     */
    public $httpsBpsValue;
    protected $_name = [
        'timeStamp'     => 'TimeStamp',
        'bpsValue'      => 'BpsValue',
        'httpBpsValue'  => 'HttpBpsValue',
        'httpsBpsValue' => 'HttpsBpsValue',
    ];

    public function validate()
    {
        Model::validateRequired('timeStamp', $this->timeStamp, true);
        Model::validateRequired('bpsValue', $this->bpsValue, true);
        Model::validateRequired('httpBpsValue', $this->httpBpsValue, true);
        Model::validateRequired('httpsBpsValue', $this->httpsBpsValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->bpsValue) {
            $res['BpsValue'] = $this->bpsValue;
        }
        if (null !== $this->httpBpsValue) {
            $res['HttpBpsValue'] = $this->httpBpsValue;
        }
        if (null !== $this->httpsBpsValue) {
            $res['HttpsBpsValue'] = $this->httpsBpsValue;
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
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['BpsValue'])) {
            $model->bpsValue = $map['BpsValue'];
        }
        if (isset($map['HttpBpsValue'])) {
            $model->httpBpsValue = $map['HttpBpsValue'];
        }
        if (isset($map['HttpsBpsValue'])) {
            $model->httpsBpsValue = $map['HttpsBpsValue'];
        }

        return $model;
    }
}

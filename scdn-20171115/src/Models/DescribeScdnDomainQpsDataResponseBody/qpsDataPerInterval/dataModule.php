<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainQpsDataResponseBody\qpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $accValue;

    /**
     * @example 50
     *
     * @var string
     */
    public $httpAccValue;

    /**
     * @description http QPS。
     *
     * @example 0.28
     *
     * @var string
     */
    public $httpQpsValue;

    /**
     * @example 50
     *
     * @var string
     */
    public $httpsAccValue;

    /**
     * @description https QPS。
     *
     * @example 0.28
     *
     * @var string
     */
    public $httpsQpsValue;

    /**
     * @example 0.56
     *
     * @var string
     */
    public $qpsValue;

    /**
     * @example 2017-12-10T21:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'accValue'      => 'AccValue',
        'httpAccValue'  => 'HttpAccValue',
        'httpQpsValue'  => 'HttpQpsValue',
        'httpsAccValue' => 'HttpsAccValue',
        'httpsQpsValue' => 'HttpsQpsValue',
        'qpsValue'      => 'QpsValue',
        'timeStamp'     => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accValue) {
            $res['AccValue'] = $this->accValue;
        }
        if (null !== $this->httpAccValue) {
            $res['HttpAccValue'] = $this->httpAccValue;
        }
        if (null !== $this->httpQpsValue) {
            $res['HttpQpsValue'] = $this->httpQpsValue;
        }
        if (null !== $this->httpsAccValue) {
            $res['HttpsAccValue'] = $this->httpsAccValue;
        }
        if (null !== $this->httpsQpsValue) {
            $res['HttpsQpsValue'] = $this->httpsQpsValue;
        }
        if (null !== $this->qpsValue) {
            $res['QpsValue'] = $this->qpsValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['AccValue'])) {
            $model->accValue = $map['AccValue'];
        }
        if (isset($map['HttpAccValue'])) {
            $model->httpAccValue = $map['HttpAccValue'];
        }
        if (isset($map['HttpQpsValue'])) {
            $model->httpQpsValue = $map['HttpQpsValue'];
        }
        if (isset($map['HttpsAccValue'])) {
            $model->httpsAccValue = $map['HttpsAccValue'];
        }
        if (isset($map['HttpsQpsValue'])) {
            $model->httpsQpsValue = $map['HttpsQpsValue'];
        }
        if (isset($map['QpsValue'])) {
            $model->qpsValue = $map['QpsValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}

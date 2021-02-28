<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainQpsDataResponseBody\qpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $httpsAccValue;

    /**
     * @var string
     */
    public $qpsValue;

    /**
     * @var string
     */
    public $accValue;

    /**
     * @var string
     */
    public $httpQpsValue;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $httpsQpsValue;

    /**
     * @var string
     */
    public $httpAccValue;
    protected $_name = [
        'httpsAccValue' => 'HttpsAccValue',
        'qpsValue'      => 'QpsValue',
        'accValue'      => 'AccValue',
        'httpQpsValue'  => 'HttpQpsValue',
        'timeStamp'     => 'TimeStamp',
        'httpsQpsValue' => 'HttpsQpsValue',
        'httpAccValue'  => 'HttpAccValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpsAccValue) {
            $res['HttpsAccValue'] = $this->httpsAccValue;
        }
        if (null !== $this->qpsValue) {
            $res['QpsValue'] = $this->qpsValue;
        }
        if (null !== $this->accValue) {
            $res['AccValue'] = $this->accValue;
        }
        if (null !== $this->httpQpsValue) {
            $res['HttpQpsValue'] = $this->httpQpsValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->httpsQpsValue) {
            $res['HttpsQpsValue'] = $this->httpsQpsValue;
        }
        if (null !== $this->httpAccValue) {
            $res['HttpAccValue'] = $this->httpAccValue;
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
        if (isset($map['HttpsAccValue'])) {
            $model->httpsAccValue = $map['HttpsAccValue'];
        }
        if (isset($map['QpsValue'])) {
            $model->qpsValue = $map['QpsValue'];
        }
        if (isset($map['AccValue'])) {
            $model->accValue = $map['AccValue'];
        }
        if (isset($map['HttpQpsValue'])) {
            $model->httpQpsValue = $map['HttpQpsValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['HttpsQpsValue'])) {
            $model->httpsQpsValue = $map['HttpsQpsValue'];
        }
        if (isset($map['HttpAccValue'])) {
            $model->httpAccValue = $map['HttpAccValue'];
        }

        return $model;
    }
}

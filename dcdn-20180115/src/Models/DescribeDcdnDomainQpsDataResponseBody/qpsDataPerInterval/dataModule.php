<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainQpsDataResponseBody\qpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The total number of requests.
     *
     * @example 100
     *
     * @var float
     */
    public $acc;

    /**
     * @description The number of requests for dynamic content delivery over HTTP.
     *
     * @example 0
     *
     * @var float
     */
    public $dynamicHttpAcc;

    /**
     * @description The QPS for dynamic content delivery over HTTP.
     *
     * @example 0
     *
     * @var float
     */
    public $dynamicHttpQps;

    /**
     * @description The number of requests for dynamic content delivery over HTTPS.
     *
     * @example 0
     *
     * @var float
     */
    public $dynamicHttpsAcc;

    /**
     * @description The QPS for dynamic content delivery over HTTPS.
     *
     * @example 0
     *
     * @var float
     */
    public $dynamicHttpsQps;

    /**
     * @description The total QPS.
     *
     * @example 0.56
     *
     * @var float
     */
    public $qps;

    /**
     * @description The number of requests for static content delivery over HTTP.
     *
     * @example 0
     *
     * @var float
     */
    public $staticHttpAcc;

    /**
     * @description The QPS for static content delivery over HTTP.
     *
     * @example 0
     *
     * @var float
     */
    public $staticHttpQps;

    /**
     * @description The number of requests for static content delivery over HTTPS.
     *
     * @example 0
     *
     * @var float
     */
    public $staticHttpsAcc;

    /**
     * @description The QPS for static content delivery over HTTPS.
     *
     * @example 0
     *
     * @var float
     */
    public $staticHttpsQps;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2017-12-10T21:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'acc'             => 'Acc',
        'dynamicHttpAcc'  => 'DynamicHttpAcc',
        'dynamicHttpQps'  => 'DynamicHttpQps',
        'dynamicHttpsAcc' => 'DynamicHttpsAcc',
        'dynamicHttpsQps' => 'DynamicHttpsQps',
        'qps'             => 'Qps',
        'staticHttpAcc'   => 'StaticHttpAcc',
        'staticHttpQps'   => 'StaticHttpQps',
        'staticHttpsAcc'  => 'StaticHttpsAcc',
        'staticHttpsQps'  => 'StaticHttpsQps',
        'timeStamp'       => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
        }
        if (null !== $this->dynamicHttpAcc) {
            $res['DynamicHttpAcc'] = $this->dynamicHttpAcc;
        }
        if (null !== $this->dynamicHttpQps) {
            $res['DynamicHttpQps'] = $this->dynamicHttpQps;
        }
        if (null !== $this->dynamicHttpsAcc) {
            $res['DynamicHttpsAcc'] = $this->dynamicHttpsAcc;
        }
        if (null !== $this->dynamicHttpsQps) {
            $res['DynamicHttpsQps'] = $this->dynamicHttpsQps;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->staticHttpAcc) {
            $res['StaticHttpAcc'] = $this->staticHttpAcc;
        }
        if (null !== $this->staticHttpQps) {
            $res['StaticHttpQps'] = $this->staticHttpQps;
        }
        if (null !== $this->staticHttpsAcc) {
            $res['StaticHttpsAcc'] = $this->staticHttpsAcc;
        }
        if (null !== $this->staticHttpsQps) {
            $res['StaticHttpsQps'] = $this->staticHttpsQps;
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
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }
        if (isset($map['DynamicHttpAcc'])) {
            $model->dynamicHttpAcc = $map['DynamicHttpAcc'];
        }
        if (isset($map['DynamicHttpQps'])) {
            $model->dynamicHttpQps = $map['DynamicHttpQps'];
        }
        if (isset($map['DynamicHttpsAcc'])) {
            $model->dynamicHttpsAcc = $map['DynamicHttpsAcc'];
        }
        if (isset($map['DynamicHttpsQps'])) {
            $model->dynamicHttpsQps = $map['DynamicHttpsQps'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['StaticHttpAcc'])) {
            $model->staticHttpAcc = $map['StaticHttpAcc'];
        }
        if (isset($map['StaticHttpQps'])) {
            $model->staticHttpQps = $map['StaticHttpQps'];
        }
        if (isset($map['StaticHttpsAcc'])) {
            $model->staticHttpsAcc = $map['StaticHttpsAcc'];
        }
        if (isset($map['StaticHttpsQps'])) {
            $model->staticHttpsQps = $map['StaticHttpsQps'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}

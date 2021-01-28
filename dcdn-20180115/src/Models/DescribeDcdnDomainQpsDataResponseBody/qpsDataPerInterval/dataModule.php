<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainQpsDataResponseBody\qpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var float
     */
    public $dynamicHttpsAcc;

    /**
     * @var float
     */
    public $dynamicHttpAcc;

    /**
     * @var float
     */
    public $qps;

    /**
     * @var float
     */
    public $staticHttpsAcc;

    /**
     * @var float
     */
    public $staticHttpQps;

    /**
     * @var float
     */
    public $staticHttpAcc;

    /**
     * @var float
     */
    public $dynamicHttpsQps;

    /**
     * @var float
     */
    public $acc;

    /**
     * @var float
     */
    public $staticHttpsQps;

    /**
     * @var float
     */
    public $dynamicHttpQps;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'dynamicHttpsAcc' => 'DynamicHttpsAcc',
        'dynamicHttpAcc'  => 'DynamicHttpAcc',
        'qps'             => 'Qps',
        'staticHttpsAcc'  => 'StaticHttpsAcc',
        'staticHttpQps'   => 'StaticHttpQps',
        'staticHttpAcc'   => 'StaticHttpAcc',
        'dynamicHttpsQps' => 'DynamicHttpsQps',
        'acc'             => 'Acc',
        'staticHttpsQps'  => 'StaticHttpsQps',
        'dynamicHttpQps'  => 'DynamicHttpQps',
        'timeStamp'       => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicHttpsAcc) {
            $res['DynamicHttpsAcc'] = $this->dynamicHttpsAcc;
        }
        if (null !== $this->dynamicHttpAcc) {
            $res['DynamicHttpAcc'] = $this->dynamicHttpAcc;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->staticHttpsAcc) {
            $res['StaticHttpsAcc'] = $this->staticHttpsAcc;
        }
        if (null !== $this->staticHttpQps) {
            $res['StaticHttpQps'] = $this->staticHttpQps;
        }
        if (null !== $this->staticHttpAcc) {
            $res['StaticHttpAcc'] = $this->staticHttpAcc;
        }
        if (null !== $this->dynamicHttpsQps) {
            $res['DynamicHttpsQps'] = $this->dynamicHttpsQps;
        }
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
        }
        if (null !== $this->staticHttpsQps) {
            $res['StaticHttpsQps'] = $this->staticHttpsQps;
        }
        if (null !== $this->dynamicHttpQps) {
            $res['DynamicHttpQps'] = $this->dynamicHttpQps;
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
        if (isset($map['DynamicHttpsAcc'])) {
            $model->dynamicHttpsAcc = $map['DynamicHttpsAcc'];
        }
        if (isset($map['DynamicHttpAcc'])) {
            $model->dynamicHttpAcc = $map['DynamicHttpAcc'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['StaticHttpsAcc'])) {
            $model->staticHttpsAcc = $map['StaticHttpsAcc'];
        }
        if (isset($map['StaticHttpQps'])) {
            $model->staticHttpQps = $map['StaticHttpQps'];
        }
        if (isset($map['StaticHttpAcc'])) {
            $model->staticHttpAcc = $map['StaticHttpAcc'];
        }
        if (isset($map['DynamicHttpsQps'])) {
            $model->dynamicHttpsQps = $map['DynamicHttpsQps'];
        }
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }
        if (isset($map['StaticHttpsQps'])) {
            $model->staticHttpsQps = $map['StaticHttpsQps'];
        }
        if (isset($map['DynamicHttpQps'])) {
            $model->dynamicHttpQps = $map['DynamicHttpQps'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}

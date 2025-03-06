<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNativePageTrendResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 75.9
     *
     * @var float
     */
    public $avgLoadDuration;

    /**
     * @example 37.317
     *
     * @var float
     */
    public $crashRate;

    /**
     * @example 2460
     *
     * @var int
     */
    public $loadCnt;

    /**
     * @example 99.837
     *
     * @var float
     */
    public $slowLoadRate;

    /**
     * @example 2023-05-20
     *
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'avgLoadDuration' => 'avgLoadDuration',
        'crashRate'       => 'crashRate',
        'loadCnt'         => 'loadCnt',
        'slowLoadRate'    => 'slowLoadRate',
        'timePoint'       => 'timePoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgLoadDuration) {
            $res['avgLoadDuration'] = $this->avgLoadDuration;
        }
        if (null !== $this->crashRate) {
            $res['crashRate'] = $this->crashRate;
        }
        if (null !== $this->loadCnt) {
            $res['loadCnt'] = $this->loadCnt;
        }
        if (null !== $this->slowLoadRate) {
            $res['slowLoadRate'] = $this->slowLoadRate;
        }
        if (null !== $this->timePoint) {
            $res['timePoint'] = $this->timePoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['avgLoadDuration'])) {
            $model->avgLoadDuration = $map['avgLoadDuration'];
        }
        if (isset($map['crashRate'])) {
            $model->crashRate = $map['crashRate'];
        }
        if (isset($map['loadCnt'])) {
            $model->loadCnt = $map['loadCnt'];
        }
        if (isset($map['slowLoadRate'])) {
            $model->slowLoadRate = $map['slowLoadRate'];
        }
        if (isset($map['timePoint'])) {
            $model->timePoint = $map['timePoint'];
        }

        return $model;
    }
}

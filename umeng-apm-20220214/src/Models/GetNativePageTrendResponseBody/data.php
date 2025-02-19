<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNativePageTrendResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $avgLoadDuration;
    /**
     * @var float
     */
    public $crashRate;
    /**
     * @var int
     */
    public $loadCnt;
    /**
     * @var float
     */
    public $slowLoadRate;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

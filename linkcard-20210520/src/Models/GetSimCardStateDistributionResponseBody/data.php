<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\GetSimCardStateDistributionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $cardCount;

    /**
     * @var int
     */
    public $destoryedCount;

    /**
     * @var int
     */
    public $shutDownCount;

    /**
     * @var int
     */
    public $stopCount;

    /**
     * @var int
     */
    public $testCount;

    /**
     * @var int
     */
    public $unusedCount;

    /**
     * @var int
     */
    public $usingCount;
    protected $_name = [
        'cardCount'      => 'CardCount',
        'destoryedCount' => 'DestoryedCount',
        'shutDownCount'  => 'ShutDownCount',
        'stopCount'      => 'StopCount',
        'testCount'      => 'TestCount',
        'unusedCount'    => 'UnusedCount',
        'usingCount'     => 'UsingCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardCount) {
            $res['CardCount'] = $this->cardCount;
        }
        if (null !== $this->destoryedCount) {
            $res['DestoryedCount'] = $this->destoryedCount;
        }
        if (null !== $this->shutDownCount) {
            $res['ShutDownCount'] = $this->shutDownCount;
        }
        if (null !== $this->stopCount) {
            $res['StopCount'] = $this->stopCount;
        }
        if (null !== $this->testCount) {
            $res['TestCount'] = $this->testCount;
        }
        if (null !== $this->unusedCount) {
            $res['UnusedCount'] = $this->unusedCount;
        }
        if (null !== $this->usingCount) {
            $res['UsingCount'] = $this->usingCount;
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
        if (isset($map['CardCount'])) {
            $model->cardCount = $map['CardCount'];
        }
        if (isset($map['DestoryedCount'])) {
            $model->destoryedCount = $map['DestoryedCount'];
        }
        if (isset($map['ShutDownCount'])) {
            $model->shutDownCount = $map['ShutDownCount'];
        }
        if (isset($map['StopCount'])) {
            $model->stopCount = $map['StopCount'];
        }
        if (isset($map['TestCount'])) {
            $model->testCount = $map['TestCount'];
        }
        if (isset($map['UnusedCount'])) {
            $model->unusedCount = $map['UnusedCount'];
        }
        if (isset($map['UsingCount'])) {
            $model->usingCount = $map['UsingCount'];
        }

        return $model;
    }
}

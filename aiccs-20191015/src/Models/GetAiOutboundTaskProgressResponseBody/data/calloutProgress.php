<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskProgressResponseBody\data;

use AlibabaCloud\Tea\Model;

class calloutProgress extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $callLossCount;

    /**
     * @example 0.01
     *
     * @var float
     */
    public $callLossRate;

    /**
     * @example 5
     *
     * @var int
     */
    public $callOutConnectCount;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $callOutConnectRate;

    /**
     * @example 10
     *
     * @var int
     */
    public $callOutCount;

    /**
     * @example 4
     *
     * @var int
     */
    public $callOutServicerPickupCount;

    /**
     * @example 0.4
     *
     * @var float
     */
    public $callOutServicerPickupRate;

    /**
     * @example 5
     *
     * @var int
     */
    public $callOutUserPickupCount;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $callOutUserPickupRate;
    protected $_name = [
        'callLossCount'              => 'CallLossCount',
        'callLossRate'               => 'CallLossRate',
        'callOutConnectCount'        => 'CallOutConnectCount',
        'callOutConnectRate'         => 'CallOutConnectRate',
        'callOutCount'               => 'CallOutCount',
        'callOutServicerPickupCount' => 'CallOutServicerPickupCount',
        'callOutServicerPickupRate'  => 'CallOutServicerPickupRate',
        'callOutUserPickupCount'     => 'CallOutUserPickupCount',
        'callOutUserPickupRate'      => 'CallOutUserPickupRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callLossCount) {
            $res['CallLossCount'] = $this->callLossCount;
        }
        if (null !== $this->callLossRate) {
            $res['CallLossRate'] = $this->callLossRate;
        }
        if (null !== $this->callOutConnectCount) {
            $res['CallOutConnectCount'] = $this->callOutConnectCount;
        }
        if (null !== $this->callOutConnectRate) {
            $res['CallOutConnectRate'] = $this->callOutConnectRate;
        }
        if (null !== $this->callOutCount) {
            $res['CallOutCount'] = $this->callOutCount;
        }
        if (null !== $this->callOutServicerPickupCount) {
            $res['CallOutServicerPickupCount'] = $this->callOutServicerPickupCount;
        }
        if (null !== $this->callOutServicerPickupRate) {
            $res['CallOutServicerPickupRate'] = $this->callOutServicerPickupRate;
        }
        if (null !== $this->callOutUserPickupCount) {
            $res['CallOutUserPickupCount'] = $this->callOutUserPickupCount;
        }
        if (null !== $this->callOutUserPickupRate) {
            $res['CallOutUserPickupRate'] = $this->callOutUserPickupRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return calloutProgress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallLossCount'])) {
            $model->callLossCount = $map['CallLossCount'];
        }
        if (isset($map['CallLossRate'])) {
            $model->callLossRate = $map['CallLossRate'];
        }
        if (isset($map['CallOutConnectCount'])) {
            $model->callOutConnectCount = $map['CallOutConnectCount'];
        }
        if (isset($map['CallOutConnectRate'])) {
            $model->callOutConnectRate = $map['CallOutConnectRate'];
        }
        if (isset($map['CallOutCount'])) {
            $model->callOutCount = $map['CallOutCount'];
        }
        if (isset($map['CallOutServicerPickupCount'])) {
            $model->callOutServicerPickupCount = $map['CallOutServicerPickupCount'];
        }
        if (isset($map['CallOutServicerPickupRate'])) {
            $model->callOutServicerPickupRate = $map['CallOutServicerPickupRate'];
        }
        if (isset($map['CallOutUserPickupCount'])) {
            $model->callOutUserPickupCount = $map['CallOutUserPickupCount'];
        }
        if (isset($map['CallOutUserPickupRate'])) {
            $model->callOutUserPickupRate = $map['CallOutUserPickupRate'];
        }

        return $model;
    }
}

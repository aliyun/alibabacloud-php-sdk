<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateEdgeContainerAppResourceReserveResponseBody\reserveSet;
use AlibabaCloud\Tea\Model;

class UpdateEdgeContainerAppResourceReserveResponseBody extends Model
{
    /**
     * @example 2006-01-02T15:04:05Z
     *
     * @var string
     */
    public $durationTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example true
     *
     * @var bool
     */
    public $forever;

    /**
     * @example 1AB799CF-562A-5CAF-A99E-4354053D814F
     *
     * @var string
     */
    public $requestId;

    /**
     * @var reserveSet[]
     */
    public $reserveSet;
    protected $_name = [
        'durationTime' => 'DurationTime',
        'enable' => 'Enable',
        'forever' => 'Forever',
        'requestId' => 'RequestId',
        'reserveSet' => 'ReserveSet',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->durationTime) {
            $res['DurationTime'] = $this->durationTime;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->forever) {
            $res['Forever'] = $this->forever;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reserveSet) {
            $res['ReserveSet'] = [];
            if (null !== $this->reserveSet && \is_array($this->reserveSet)) {
                $n = 0;
                foreach ($this->reserveSet as $item) {
                    $res['ReserveSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEdgeContainerAppResourceReserveResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DurationTime'])) {
            $model->durationTime = $map['DurationTime'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Forever'])) {
            $model->forever = $map['Forever'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReserveSet'])) {
            if (!empty($map['ReserveSet'])) {
                $model->reserveSet = [];
                $n = 0;
                foreach ($map['ReserveSet'] as $item) {
                    $model->reserveSet[$n++] = null !== $item ? reserveSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

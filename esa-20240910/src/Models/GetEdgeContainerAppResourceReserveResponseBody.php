<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResourceReserveResponseBody\reserveSet;
use AlibabaCloud\Tea\Model;

class GetEdgeContainerAppResourceReserveResponseBody extends Model
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
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
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
     * @return GetEdgeContainerAppResourceReserveResponseBody
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResourceReserveResponseBody\reserveSet;

class GetEdgeContainerAppResourceReserveResponseBody extends Model
{
    /**
     * @var string
     */
    public $durationTime;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var bool
     */
    public $forever;

    /**
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

    public function validate()
    {
        if (\is_array($this->reserveSet)) {
            Model::validateArray($this->reserveSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->reserveSet)) {
                $res['ReserveSet'] = [];
                $n1 = 0;
                foreach ($this->reserveSet as $item1) {
                    $res['ReserveSet'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['ReserveSet'] as $item1) {
                    $model->reserveSet[$n1] = reserveSet::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateEdgeContainerAppResourceReserveRequest\reserveSet;

class UpdateEdgeContainerAppResourceReserveRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

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
     * @var reserveSet[]
     */
    public $reserveSet;
    protected $_name = [
        'appId' => 'AppId',
        'durationTime' => 'DurationTime',
        'enable' => 'Enable',
        'forever' => 'Forever',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->durationTime) {
            $res['DurationTime'] = $this->durationTime;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->forever) {
            $res['Forever'] = $this->forever;
        }

        if (null !== $this->reserveSet) {
            if (\is_array($this->reserveSet)) {
                $res['ReserveSet'] = [];
                $n1 = 0;
                foreach ($this->reserveSet as $item1) {
                    $res['ReserveSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['DurationTime'])) {
            $model->durationTime = $map['DurationTime'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['Forever'])) {
            $model->forever = $map['Forever'];
        }

        if (isset($map['ReserveSet'])) {
            if (!empty($map['ReserveSet'])) {
                $model->reserveSet = [];
                $n1 = 0;
                foreach ($map['ReserveSet'] as $item1) {
                    $model->reserveSet[$n1++] = reserveSet::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

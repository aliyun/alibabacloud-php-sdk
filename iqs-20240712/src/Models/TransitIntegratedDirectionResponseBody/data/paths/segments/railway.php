<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments;

use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\railway\arrivalStop;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\railway\departureStop;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\railway\spaces;
use AlibabaCloud\Tea\Model;

class railway extends Model
{
    /**
     * @var arrivalStop
     */
    public $arrivalStop;

    /**
     * @var departureStop
     */
    public $departureStop;

    /**
     * @example 398734
     *
     * @var string
     */
    public $distanceMeter;

    /**
     * @example 434508
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var spaces[]
     */
    public $spaces;

    /**
     * @example 2024-09-28 10:07:22
     *
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $trip;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'arrivalStop'   => 'arrivalStop',
        'departureStop' => 'departureStop',
        'distanceMeter' => 'distanceMeter',
        'id'            => 'id',
        'name'          => 'name',
        'spaces'        => 'spaces',
        'time'          => 'time',
        'trip'          => 'trip',
        'type'          => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrivalStop) {
            $res['arrivalStop'] = null !== $this->arrivalStop ? $this->arrivalStop->toMap() : null;
        }
        if (null !== $this->departureStop) {
            $res['departureStop'] = null !== $this->departureStop ? $this->departureStop->toMap() : null;
        }
        if (null !== $this->distanceMeter) {
            $res['distanceMeter'] = $this->distanceMeter;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->spaces) {
            $res['spaces'] = [];
            if (null !== $this->spaces && \is_array($this->spaces)) {
                $n = 0;
                foreach ($this->spaces as $item) {
                    $res['spaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }
        if (null !== $this->trip) {
            $res['trip'] = $this->trip;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return railway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arrivalStop'])) {
            $model->arrivalStop = arrivalStop::fromMap($map['arrivalStop']);
        }
        if (isset($map['departureStop'])) {
            $model->departureStop = departureStop::fromMap($map['departureStop']);
        }
        if (isset($map['distanceMeter'])) {
            $model->distanceMeter = $map['distanceMeter'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['spaces'])) {
            if (!empty($map['spaces'])) {
                $model->spaces = [];
                $n             = 0;
                foreach ($map['spaces'] as $item) {
                    $model->spaces[$n++] = null !== $item ? spaces::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }
        if (isset($map['trip'])) {
            $model->trip = $map['trip'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

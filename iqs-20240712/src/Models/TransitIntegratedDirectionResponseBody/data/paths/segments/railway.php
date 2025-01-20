<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\railway\arrivalStop;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\railway\departureStop;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\railway\spaces;

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
     * @var string
     */
    public $distanceMeter;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $index;
    /**
     * @var string
     */
    public $name;
    /**
     * @var spaces[]
     */
    public $spaces;
    /**
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
        'index'         => 'index',
        'name'          => 'name',
        'spaces'        => 'spaces',
        'time'          => 'time',
        'trip'          => 'trip',
        'type'          => 'type',
    ];

    public function validate()
    {
        if (null !== $this->arrivalStop) {
            $this->arrivalStop->validate();
        }
        if (null !== $this->departureStop) {
            $this->departureStop->validate();
        }
        if (\is_array($this->spaces)) {
            Model::validateArray($this->spaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrivalStop) {
            $res['arrivalStop'] = null !== $this->arrivalStop ? $this->arrivalStop->toArray($noStream) : $this->arrivalStop;
        }

        if (null !== $this->departureStop) {
            $res['departureStop'] = null !== $this->departureStop ? $this->departureStop->toArray($noStream) : $this->departureStop;
        }

        if (null !== $this->distanceMeter) {
            $res['distanceMeter'] = $this->distanceMeter;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->spaces) {
            if (\is_array($this->spaces)) {
                $res['spaces'] = [];
                $n1            = 0;
                foreach ($this->spaces as $item1) {
                    $res['spaces'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['spaces'])) {
            if (!empty($map['spaces'])) {
                $model->spaces = [];
                $n1            = 0;
                foreach ($map['spaces'] as $item1) {
                    $model->spaces[$n1++] = spaces::fromMap($item1);
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

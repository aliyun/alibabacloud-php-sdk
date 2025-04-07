<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\bus;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\bus\buslines\arrivalStop;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\bus\buslines\cost;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\bus\buslines\departureStop;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\bus\buslines\polyline;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\bus\buslines\viaStops;

class buslines extends Model
{
    /**
     * @var arrivalStop
     */
    public $arrivalStop;

    /**
     * @var string
     */
    public $busTimeTips;

    /**
     * @var string
     */
    public $bustimetag;

    /**
     * @var cost
     */
    public $cost;

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
    public $endTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var polyline
     */
    public $polyline;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $viaNum;

    /**
     * @var viaStops[]
     */
    public $viaStops;
    protected $_name = [
        'arrivalStop' => 'arrivalStop',
        'busTimeTips' => 'busTimeTips',
        'bustimetag' => 'bustimetag',
        'cost' => 'cost',
        'departureStop' => 'departureStop',
        'distanceMeter' => 'distanceMeter',
        'endTime' => 'endTime',
        'id' => 'id',
        'name' => 'name',
        'polyline' => 'polyline',
        'startTime' => 'startTime',
        'type' => 'type',
        'viaNum' => 'viaNum',
        'viaStops' => 'viaStops',
    ];

    public function validate()
    {
        if (null !== $this->arrivalStop) {
            $this->arrivalStop->validate();
        }
        if (null !== $this->cost) {
            $this->cost->validate();
        }
        if (null !== $this->departureStop) {
            $this->departureStop->validate();
        }
        if (null !== $this->polyline) {
            $this->polyline->validate();
        }
        if (\is_array($this->viaStops)) {
            Model::validateArray($this->viaStops);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrivalStop) {
            $res['arrivalStop'] = null !== $this->arrivalStop ? $this->arrivalStop->toArray($noStream) : $this->arrivalStop;
        }

        if (null !== $this->busTimeTips) {
            $res['busTimeTips'] = $this->busTimeTips;
        }

        if (null !== $this->bustimetag) {
            $res['bustimetag'] = $this->bustimetag;
        }

        if (null !== $this->cost) {
            $res['cost'] = null !== $this->cost ? $this->cost->toArray($noStream) : $this->cost;
        }

        if (null !== $this->departureStop) {
            $res['departureStop'] = null !== $this->departureStop ? $this->departureStop->toArray($noStream) : $this->departureStop;
        }

        if (null !== $this->distanceMeter) {
            $res['distanceMeter'] = $this->distanceMeter;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->polyline) {
            $res['polyline'] = null !== $this->polyline ? $this->polyline->toArray($noStream) : $this->polyline;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->viaNum) {
            $res['viaNum'] = $this->viaNum;
        }

        if (null !== $this->viaStops) {
            if (\is_array($this->viaStops)) {
                $res['viaStops'] = [];
                $n1 = 0;
                foreach ($this->viaStops as $item1) {
                    $res['viaStops'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['arrivalStop'])) {
            $model->arrivalStop = arrivalStop::fromMap($map['arrivalStop']);
        }

        if (isset($map['busTimeTips'])) {
            $model->busTimeTips = $map['busTimeTips'];
        }

        if (isset($map['bustimetag'])) {
            $model->bustimetag = $map['bustimetag'];
        }

        if (isset($map['cost'])) {
            $model->cost = cost::fromMap($map['cost']);
        }

        if (isset($map['departureStop'])) {
            $model->departureStop = departureStop::fromMap($map['departureStop']);
        }

        if (isset($map['distanceMeter'])) {
            $model->distanceMeter = $map['distanceMeter'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['polyline'])) {
            $model->polyline = polyline::fromMap($map['polyline']);
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['viaNum'])) {
            $model->viaNum = $map['viaNum'];
        }

        if (isset($map['viaStops'])) {
            if (!empty($map['viaStops'])) {
                $model->viaStops = [];
                $n1 = 0;
                foreach ($map['viaStops'] as $item1) {
                    $model->viaStops[$n1++] = viaStops::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

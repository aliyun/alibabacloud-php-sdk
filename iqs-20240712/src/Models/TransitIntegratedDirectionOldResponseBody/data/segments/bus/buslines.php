<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\bus;

use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\bus\buslines\arrivalStop;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\bus\buslines\cost;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\bus\buslines\departureStop;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\bus\buslines\viaStops;
use AlibabaCloud\Tea\Model;

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
     * @example 09:00---21:00
     *
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
     * @example 3000
     *
     * @var string
     */
    public $distanceMeter;

    /**
     * @example 1710432000000
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1841625
     *
     * @var string
     */
    public $id;

    /**
     * @example Sheet1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1730448000000
     *
     * @var string
     */
    public $startTime;

    /**
     * @example cluster
     *
     * @var string
     */
    public $type;

    /**
     * @example 3
     *
     * @var string
     */
    public $viaNum;

    /**
     * @var viaStops[]
     */
    public $viaStops;
    protected $_name = [
        'arrivalStop'   => 'arrivalStop',
        'busTimeTips'   => 'busTimeTips',
        'bustimetag'    => 'bustimetag',
        'cost'          => 'cost',
        'departureStop' => 'departureStop',
        'distanceMeter' => 'distanceMeter',
        'endTime'       => 'endTime',
        'id'            => 'id',
        'name'          => 'name',
        'startTime'     => 'startTime',
        'type'          => 'type',
        'viaNum'        => 'viaNum',
        'viaStops'      => 'viaStops',
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
        if (null !== $this->busTimeTips) {
            $res['busTimeTips'] = $this->busTimeTips;
        }
        if (null !== $this->bustimetag) {
            $res['bustimetag'] = $this->bustimetag;
        }
        if (null !== $this->cost) {
            $res['cost'] = null !== $this->cost ? $this->cost->toMap() : null;
        }
        if (null !== $this->departureStop) {
            $res['departureStop'] = null !== $this->departureStop ? $this->departureStop->toMap() : null;
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
            $res['viaStops'] = [];
            if (null !== $this->viaStops && \is_array($this->viaStops)) {
                $n = 0;
                foreach ($this->viaStops as $item) {
                    $res['viaStops'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buslines
     */
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
                $n               = 0;
                foreach ($map['viaStops'] as $item) {
                    $model->viaStops[$n++] = null !== $item ? viaStops::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

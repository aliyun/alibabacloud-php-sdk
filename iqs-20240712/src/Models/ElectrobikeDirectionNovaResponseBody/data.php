<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\ElectrobikeDirectionNovaResponseBody;

use AlibabaCloud\SDK\IQS\V20240712\Models\ElectrobikeDirectionNovaResponseBody\data\paths;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $count;

    /**
     * @example 40.345456
     *
     * @var string
     */
    public $destinationLatitude;

    /**
     * @example 116.46424
     *
     * @var string
     */
    public $destinationLongitude;

    /**
     * @example 39.995197
     *
     * @var string
     */
    public $originLatitude;

    /**
     * @example 116.345456
     *
     * @var string
     */
    public $originLongitude;

    /**
     * @var paths[]
     */
    public $paths;

    /**
     * @example 20
     *
     * @var string
     */
    public $taxiCost;
    protected $_name = [
        'count'                => 'count',
        'destinationLatitude'  => 'destinationLatitude',
        'destinationLongitude' => 'destinationLongitude',
        'originLatitude'       => 'originLatitude',
        'originLongitude'      => 'originLongitude',
        'paths'                => 'paths',
        'taxiCost'             => 'taxiCost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->destinationLatitude) {
            $res['destinationLatitude'] = $this->destinationLatitude;
        }
        if (null !== $this->destinationLongitude) {
            $res['destinationLongitude'] = $this->destinationLongitude;
        }
        if (null !== $this->originLatitude) {
            $res['originLatitude'] = $this->originLatitude;
        }
        if (null !== $this->originLongitude) {
            $res['originLongitude'] = $this->originLongitude;
        }
        if (null !== $this->paths) {
            $res['paths'] = [];
            if (null !== $this->paths && \is_array($this->paths)) {
                $n = 0;
                foreach ($this->paths as $item) {
                    $res['paths'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taxiCost) {
            $res['taxiCost'] = $this->taxiCost;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['destinationLatitude'])) {
            $model->destinationLatitude = $map['destinationLatitude'];
        }
        if (isset($map['destinationLongitude'])) {
            $model->destinationLongitude = $map['destinationLongitude'];
        }
        if (isset($map['originLatitude'])) {
            $model->originLatitude = $map['originLatitude'];
        }
        if (isset($map['originLongitude'])) {
            $model->originLongitude = $map['originLongitude'];
        }
        if (isset($map['paths'])) {
            if (!empty($map['paths'])) {
                $model->paths = [];
                $n            = 0;
                foreach ($map['paths'] as $item) {
                    $model->paths[$n++] = null !== $item ? paths::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taxiCost'])) {
            $model->taxiCost = $map['taxiCost'];
        }

        return $model;
    }
}

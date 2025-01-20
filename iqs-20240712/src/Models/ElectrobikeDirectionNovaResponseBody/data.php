<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\ElectrobikeDirectionNovaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20240712\Models\ElectrobikeDirectionNovaResponseBody\data\paths;

class data extends Model
{
    /**
     * @var string
     */
    public $count;
    /**
     * @var string
     */
    public $destinationLatitude;
    /**
     * @var string
     */
    public $destinationLongitude;
    /**
     * @var string
     */
    public $originLatitude;
    /**
     * @var string
     */
    public $originLongitude;
    /**
     * @var paths[]
     */
    public $paths;
    /**
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
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->paths)) {
                $res['paths'] = [];
                $n1           = 0;
                foreach ($this->paths as $item1) {
                    $res['paths'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->taxiCost) {
            $res['taxiCost'] = $this->taxiCost;
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
                $n1           = 0;
                foreach ($map['paths'] as $item1) {
                    $model->paths[$n1++] = paths::fromMap($item1);
                }
            }
        }

        if (isset($map['taxiCost'])) {
            $model->taxiCost = $map['taxiCost'];
        }

        return $model;
    }
}

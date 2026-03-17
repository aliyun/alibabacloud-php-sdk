<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListAccessPointsResponseBody;

use AlibabaCloud\Dara\Model;

class accessPoints extends Model
{
    /**
     * @var int
     */
    public $accessPointId;

    /**
     * @var int
     */
    public $activeSmartAGCount;

    /**
     * @var int
     */
    public $inactiveSmartAGCount;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $longitude;
    protected $_name = [
        'accessPointId' => 'AccessPointId',
        'activeSmartAGCount' => 'ActiveSmartAGCount',
        'inactiveSmartAGCount' => 'InactiveSmartAGCount',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }

        if (null !== $this->activeSmartAGCount) {
            $res['ActiveSmartAGCount'] = $this->activeSmartAGCount;
        }

        if (null !== $this->inactiveSmartAGCount) {
            $res['InactiveSmartAGCount'] = $this->inactiveSmartAGCount;
        }

        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }

        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
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
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }

        if (isset($map['ActiveSmartAGCount'])) {
            $model->activeSmartAGCount = $map['ActiveSmartAGCount'];
        }

        if (isset($map['InactiveSmartAGCount'])) {
            $model->inactiveSmartAGCount = $map['InactiveSmartAGCount'];
        }

        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }

        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }

        return $model;
    }
}

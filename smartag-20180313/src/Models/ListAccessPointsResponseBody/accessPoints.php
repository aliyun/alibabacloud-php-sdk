<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListAccessPointsResponseBody;

use AlibabaCloud\Tea\Model;

class accessPoints extends Model
{
    /**
     * @var string
     */
    public $longitude;

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
     * @var int
     */
    public $accessPointId;
    protected $_name = [
        'longitude'            => 'Longitude',
        'activeSmartAGCount'   => 'ActiveSmartAGCount',
        'inactiveSmartAGCount' => 'InactiveSmartAGCount',
        'latitude'             => 'Latitude',
        'accessPointId'        => 'AccessPointId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
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
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
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
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Tea\Model;

class RectangleTrafficStatusRequest extends Model
{
    /**
     * @example 39.966309
     *
     * @var string
     */
    public $lowerLeftLatitude;

    /**
     * @example 116.351147
     *
     * @var string
     */
    public $lowerLeftLongitude;

    /**
     * @example HIGHWAY
     *
     * @var string
     */
    public $roadLevel;

    /**
     * @example 39.968739
     *
     * @var string
     */
    public $upperRightLatitude;

    /**
     * @example 116.35164
     *
     * @var string
     */
    public $upperRightLongitude;
    protected $_name = [
        'lowerLeftLatitude'   => 'lowerLeftLatitude',
        'lowerLeftLongitude'  => 'lowerLeftLongitude',
        'roadLevel'           => 'roadLevel',
        'upperRightLatitude'  => 'upperRightLatitude',
        'upperRightLongitude' => 'upperRightLongitude',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lowerLeftLatitude) {
            $res['lowerLeftLatitude'] = $this->lowerLeftLatitude;
        }
        if (null !== $this->lowerLeftLongitude) {
            $res['lowerLeftLongitude'] = $this->lowerLeftLongitude;
        }
        if (null !== $this->roadLevel) {
            $res['roadLevel'] = $this->roadLevel;
        }
        if (null !== $this->upperRightLatitude) {
            $res['upperRightLatitude'] = $this->upperRightLatitude;
        }
        if (null !== $this->upperRightLongitude) {
            $res['upperRightLongitude'] = $this->upperRightLongitude;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RectangleTrafficStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['lowerLeftLatitude'])) {
            $model->lowerLeftLatitude = $map['lowerLeftLatitude'];
        }
        if (isset($map['lowerLeftLongitude'])) {
            $model->lowerLeftLongitude = $map['lowerLeftLongitude'];
        }
        if (isset($map['roadLevel'])) {
            $model->roadLevel = $map['roadLevel'];
        }
        if (isset($map['upperRightLatitude'])) {
            $model->upperRightLatitude = $map['upperRightLatitude'];
        }
        if (isset($map['upperRightLongitude'])) {
            $model->upperRightLongitude = $map['upperRightLongitude'];
        }

        return $model;
    }
}

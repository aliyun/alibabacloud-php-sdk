<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments;

use AlibabaCloud\Tea\Model;

class taxi extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $destinationName;

    /**
     * @example 116.464297,39.896458
     *
     * @var string
     */
    public $destinationPoint;

    /**
     * @example 1772
     *
     * @var string
     */
    public $distanceMeter;

    /**
     * @example 720
     *
     * @var string
     */
    public $driveTimeSecond;

    /**
     * @var string
     */
    public $originName;

    /**
     * @example 116.476597,39.893420
     *
     * @var string
     */
    public $originPoint;

    /**
     * @example 13.5
     *
     * @var string
     */
    public $price;
    protected $_name = [
        'destinationName'  => 'destinationName',
        'destinationPoint' => 'destinationPoint',
        'distanceMeter'    => 'distanceMeter',
        'driveTimeSecond'  => 'driveTimeSecond',
        'originName'       => 'originName',
        'originPoint'      => 'originPoint',
        'price'            => 'price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationName) {
            $res['destinationName'] = $this->destinationName;
        }
        if (null !== $this->destinationPoint) {
            $res['destinationPoint'] = $this->destinationPoint;
        }
        if (null !== $this->distanceMeter) {
            $res['distanceMeter'] = $this->distanceMeter;
        }
        if (null !== $this->driveTimeSecond) {
            $res['driveTimeSecond'] = $this->driveTimeSecond;
        }
        if (null !== $this->originName) {
            $res['originName'] = $this->originName;
        }
        if (null !== $this->originPoint) {
            $res['originPoint'] = $this->originPoint;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taxi
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['destinationName'])) {
            $model->destinationName = $map['destinationName'];
        }
        if (isset($map['destinationPoint'])) {
            $model->destinationPoint = $map['destinationPoint'];
        }
        if (isset($map['distanceMeter'])) {
            $model->distanceMeter = $map['distanceMeter'];
        }
        if (isset($map['driveTimeSecond'])) {
            $model->driveTimeSecond = $map['driveTimeSecond'];
        }
        if (isset($map['originName'])) {
            $model->originName = $map['originName'];
        }
        if (isset($map['originPoint'])) {
            $model->originPoint = $map['originPoint'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\taxi\polyline;

class taxi extends Model
{
    /**
     * @var string
     */
    public $destinationName;

    /**
     * @var string
     */
    public $destinationPoint;

    /**
     * @var string
     */
    public $distanceMeter;

    /**
     * @var string
     */
    public $driveTimeSecond;

    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $originName;

    /**
     * @var string
     */
    public $originPoint;

    /**
     * @var polyline
     */
    public $polyline;

    /**
     * @var string
     */
    public $price;
    protected $_name = [
        'destinationName' => 'destinationName',
        'destinationPoint' => 'destinationPoint',
        'distanceMeter' => 'distanceMeter',
        'driveTimeSecond' => 'driveTimeSecond',
        'index' => 'index',
        'originName' => 'originName',
        'originPoint' => 'originPoint',
        'polyline' => 'polyline',
        'price' => 'price',
    ];

    public function validate()
    {
        if (null !== $this->polyline) {
            $this->polyline->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->originName) {
            $res['originName'] = $this->originName;
        }

        if (null !== $this->originPoint) {
            $res['originPoint'] = $this->originPoint;
        }

        if (null !== $this->polyline) {
            $res['polyline'] = null !== $this->polyline ? $this->polyline->toArray($noStream) : $this->polyline;
        }

        if (null !== $this->price) {
            $res['price'] = $this->price;
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

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['originName'])) {
            $model->originName = $map['originName'];
        }

        if (isset($map['originPoint'])) {
            $model->originPoint = $map['originPoint'];
        }

        if (isset($map['polyline'])) {
            $model->polyline = polyline::fromMap($map['polyline']);
        }

        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        return $model;
    }
}

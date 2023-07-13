<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceDriverResponseBody\data;

use AlibabaCloud\Tea\Model;

class driverList extends Model
{
    /**
     * @description The ID of the driver.
     *
     * @example 9c1ae7bd59f1469abbdccc959228****
     *
     * @var string
     */
    public $driverId;

    /**
     * @description The version number of the driver.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $driverVersion;

    /**
     * @description The time when the driver was created.
     *
     * @example 2019-06-26 17:22:25
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The last time when the driver was updated.
     *
     * @example 2019-06-26 17:22:25
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the order.
     *
     * @example 11123458765423
     *
     * @var string
     */
    public $orderId;
    protected $_name = [
        'driverId'      => 'DriverId',
        'driverVersion' => 'DriverVersion',
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'orderId'       => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
        }
        if (null !== $this->driverVersion) {
            $res['DriverVersion'] = $this->driverVersion;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return driverList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }
        if (isset($map['DriverVersion'])) {
            $model->driverVersion = $map['DriverVersion'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeWorkZonesResponseBody\data;

use AlibabaCloud\Dara\Model;

class workZoneDTOList extends Model
{
    /**
     * @var int
     */
    public $seatCol;

    /**
     * @var int
     */
    public $seatRow;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'seatCol' => 'SeatCol',
        'seatRow' => 'SeatRow',
        'tenantId' => 'TenantId',
        'zoneId' => 'ZoneId',
        'zoneName' => 'ZoneName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->seatCol) {
            $res['SeatCol'] = $this->seatCol;
        }

        if (null !== $this->seatRow) {
            $res['SeatRow'] = $this->seatRow;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
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
        if (isset($map['SeatCol'])) {
            $model->seatCol = $map['SeatCol'];
        }

        if (isset($map['SeatRow'])) {
            $model->seatRow = $map['SeatRow'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}

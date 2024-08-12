<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceSeatsRequest extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $seatNo;

    /**
     * @var string[]
     */
    public $serialNoList;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'label'        => 'Label',
        'seatNo'       => 'SeatNo',
        'serialNoList' => 'SerialNoList',
        'tenantId'     => 'TenantId',
        'zoneId'       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->seatNo) {
            $res['SeatNo'] = $this->seatNo;
        }
        if (null !== $this->serialNoList) {
            $res['SerialNoList'] = $this->serialNoList;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceSeatsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['SeatNo'])) {
            $model->seatNo = $map['SeatNo'];
        }
        if (isset($map['SerialNoList'])) {
            if (!empty($map['SerialNoList'])) {
                $model->serialNoList = $map['SerialNoList'];
            }
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

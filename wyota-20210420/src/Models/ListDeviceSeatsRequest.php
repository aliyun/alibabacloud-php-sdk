<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

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
        'label' => 'Label',
        'seatNo' => 'SeatNo',
        'serialNoList' => 'SerialNoList',
        'tenantId' => 'TenantId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->serialNoList)) {
            Model::validateArray($this->serialNoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->seatNo) {
            $res['SeatNo'] = $this->seatNo;
        }

        if (null !== $this->serialNoList) {
            if (\is_array($this->serialNoList)) {
                $res['SerialNoList'] = [];
                $n1 = 0;
                foreach ($this->serialNoList as $item1) {
                    $res['SerialNoList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['SeatNo'])) {
            $model->seatNo = $map['SeatNo'];
        }

        if (isset($map['SerialNoList'])) {
            if (!empty($map['SerialNoList'])) {
                $model->serialNoList = [];
                $n1 = 0;
                foreach ($map['SerialNoList'] as $item1) {
                    $model->serialNoList[$n1] = $item1;
                    ++$n1;
                }
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

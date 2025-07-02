<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class AddDeviceSeatsAndLabelsRequest extends Model
{
    /**
     * @var bool
     */
    public $isUnique;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string[]
     */
    public $labelList;

    /**
     * @var string
     */
    public $seatName;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'isUnique' => 'IsUnique',
        'label' => 'Label',
        'labelList' => 'LabelList',
        'seatName' => 'SeatName',
        'serialNo' => 'SerialNo',
        'tenantId' => 'TenantId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->labelList)) {
            Model::validateArray($this->labelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isUnique) {
            $res['IsUnique'] = $this->isUnique;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->labelList) {
            if (\is_array($this->labelList)) {
                $res['LabelList'] = [];
                $n1 = 0;
                foreach ($this->labelList as $item1) {
                    $res['LabelList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->seatName) {
            $res['SeatName'] = $this->seatName;
        }

        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
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
        if (isset($map['IsUnique'])) {
            $model->isUnique = $map['IsUnique'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['LabelList'])) {
            if (!empty($map['LabelList'])) {
                $model->labelList = [];
                $n1 = 0;
                foreach ($map['LabelList'] as $item1) {
                    $model->labelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SeatName'])) {
            $model->seatName = $map['SeatName'];
        }

        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

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
        'isUnique'  => 'IsUnique',
        'label'     => 'Label',
        'labelList' => 'LabelList',
        'seatName'  => 'SeatName',
        'serialNo'  => 'SerialNo',
        'tenantId'  => 'TenantId',
        'zoneId'    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isUnique) {
            $res['IsUnique'] = $this->isUnique;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->labelList) {
            $res['LabelList'] = $this->labelList;
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

    /**
     * @param array $map
     *
     * @return AddDeviceSeatsAndLabelsRequest
     */
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
                $model->labelList = $map['LabelList'];
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

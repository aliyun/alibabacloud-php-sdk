<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListDeviceSeatsResponseBody\data;

use AlibabaCloud\Tea\Model;

class deviceSeatDTOList extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $seatName;

    /**
     * @var string
     */
    public $seatNo;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $siteId;

    /**
     * @var string
     */
    public $siteName;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'label'    => 'Label',
        'seatName' => 'SeatName',
        'seatNo'   => 'SeatNo',
        'serialNo' => 'SerialNo',
        'siteId'   => 'SiteId',
        'siteName' => 'SiteName',
        'zoneId'   => 'ZoneId',
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
        if (null !== $this->seatName) {
            $res['SeatName'] = $this->seatName;
        }
        if (null !== $this->seatNo) {
            $res['SeatNo'] = $this->seatNo;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceSeatDTOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['SeatName'])) {
            $model->seatName = $map['SeatName'];
        }
        if (isset($map['SeatNo'])) {
            $model->seatNo = $map['SeatNo'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeDeviceSeatsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $seatCol;

    /**
     * @var string
     */
    public $seatName;

    /**
     * @var string
     */
    public $seatNo;

    /**
     * @var int
     */
    public $seatRow;

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
    protected $_name = [
        'seatCol' => 'SeatCol',
        'seatName' => 'SeatName',
        'seatNo' => 'SeatNo',
        'seatRow' => 'SeatRow',
        'serialNo' => 'SerialNo',
        'siteId' => 'SiteId',
        'siteName' => 'SiteName',
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

        if (null !== $this->seatName) {
            $res['SeatName'] = $this->seatName;
        }

        if (null !== $this->seatNo) {
            $res['SeatNo'] = $this->seatNo;
        }

        if (null !== $this->seatRow) {
            $res['SeatRow'] = $this->seatRow;
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

        if (isset($map['SeatName'])) {
            $model->seatName = $map['SeatName'];
        }

        if (isset($map['SeatNo'])) {
            $model->seatNo = $map['SeatNo'];
        }

        if (isset($map['SeatRow'])) {
            $model->seatRow = $map['SeatRow'];
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

        return $model;
    }
}

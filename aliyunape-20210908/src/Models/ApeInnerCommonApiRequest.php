<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908\Models;

use AlibabaCloud\Tea\Model;

class ApeInnerCommonApiRequest extends Model
{
    /**
     * @description appName
     *
     * @var string
     */
    public $appName;

    /**
     * @description channel
     *
     * @var string
     */
    public $channel;

    /**
     * @description endTime
     *
     * @var string
     */
    public $endTime;

    /**
     * @description lat
     *
     * @var string
     */
    public $lat;

    /**
     * @description lon
     *
     * @var string
     */
    public $lon;

    /**
     * @description pageNum
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description spCode
     *
     * @var string
     */
    public $spCode;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description station
     *
     * @var string
     */
    public $station;
    protected $_name = [
        'appName'   => 'AppName',
        'channel'   => 'Channel',
        'endTime'   => 'EndTime',
        'lat'       => 'Lat',
        'lon'       => 'Lon',
        'pageNum'   => 'PageNum',
        'pageSize'  => 'PageSize',
        'spCode'    => 'SpCode',
        'startTime' => 'StartTime',
        'station'   => 'Station',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lat) {
            $res['Lat'] = $this->lat;
        }
        if (null !== $this->lon) {
            $res['Lon'] = $this->lon;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->spCode) {
            $res['SpCode'] = $this->spCode;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->station) {
            $res['Station'] = $this->station;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApeInnerCommonApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lat'])) {
            $model->lat = $map['Lat'];
        }
        if (isset($map['Lon'])) {
            $model->lon = $map['Lon'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SpCode'])) {
            $model->spCode = $map['SpCode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Station'])) {
            $model->station = $map['Station'];
        }

        return $model;
    }
}

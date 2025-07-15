<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveStreamsTotalCountRequest extends Model
{
    /**
     * @description The ingest domain or streaming domain. This parameter is required if you want to query data based on domain names. You can specify up to 10 domain names. Separate multiple domain names with commas (,).
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  The maximum time range for a query is 15 days. The end time must be earlier than the current time. Data of the current day can be queried on the next day.
     *
     * This parameter is required.
     *
     * @example 2023-07-25T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  You can query data in the last 18 months.
     *
     * This parameter is required.
     *
     * @example 2023-07-24T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The type of data that you want to query. If you leave this parameter empty, data is returned by domain name. If you want to query data by UID, specify the UID for this parameter.
     *
     * @example aliuid
     *
     * @var string
     */
    public $typ;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'typ' => 'Typ',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->typ) {
            $res['Typ'] = $this->typ;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamsTotalCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Typ'])) {
            $model->typ = $map['Typ'];
        }

        return $model;
    }
}

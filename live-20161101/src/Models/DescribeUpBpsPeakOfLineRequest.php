<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeUpBpsPeakOfLineRequest extends Model
{
    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Specifies whether to collect statistics at the domain name level. Valid values:
     *
     *   on: collects statistics at the domain name level.
     *   off (default): collects statistics at the user level.
     *
     * @example on
     *
     * @var string
     */
    public $domainSwitch;

    /**
     * @description The end time of stream pulling. The time must be in UTC. The end time must be later than the start time. The maximum time range that can be specified by StartTime and EndTime is 30 days.
     *
     * This parameter is required.
     *
     * @example 2017-10-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The leased line. Valid values: integers from 0 to 9.
     *
     * This parameter is required.
     *
     * @example 3
     *
     * @var string
     */
    public $line;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The start time of stream pulling. The time must be in UTC. The maximum time range that can be specified by StartTime and EndTime is 30 days.
     *
     * This parameter is required.
     *
     * @example 2017-10-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainName' => 'DomainName',
        'domainSwitch' => 'DomainSwitch',
        'endTime' => 'EndTime',
        'line' => 'Line',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainSwitch) {
            $res['DomainSwitch'] = $this->domainSwitch;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUpBpsPeakOfLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainSwitch'])) {
            $model->domainSwitch = $map['DomainSwitch'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
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

        return $model;
    }
}

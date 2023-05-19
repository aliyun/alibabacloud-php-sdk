<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainUsageDataRequest extends Model
{
    /**
     * @description The amount of resource usage.
     *
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @description The information about resource usage that was collected at each interval.
     *
     * @example all
     *
     * @var string
     */
    public $dataProtocol;

    /**
     * @description The type of content.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the billable region where the data was collected.
     *
     * @example 2015-12-10T22:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time interval between the data entries returned. Unit: seconds.
     *
     * @example bps
     *
     * @var string
     */
    public $field;

    /**
     * @description The timestamp of the data returned.
     *
     * > **TimeStamp** indicates the timestamp of the data returned at each interval.
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @description static
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The resource usage that was collected at each interval.
     *
     * @example static
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'area'         => 'Area',
        'dataProtocol' => 'DataProtocol',
        'domainName'   => 'DomainName',
        'endTime'      => 'EndTime',
        'field'        => 'Field',
        'interval'     => 'Interval',
        'startTime'    => 'StartTime',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->dataProtocol) {
            $res['DataProtocol'] = $this->dataProtocol;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainUsageDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['DataProtocol'])) {
            $model->dataProtocol = $map['DataProtocol'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

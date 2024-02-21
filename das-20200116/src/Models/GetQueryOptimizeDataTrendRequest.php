<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetQueryOptimizeDataTrendRequest extends Model
{
    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  The end time must be later than the start time, but not later than 00:00:00 (UTC+8) on the current day.
     * @example 1643040000000
     *
     * @var string
     */
    public $end;

    /**
     * @description The database engine. Valid values:
     *
     *   **MySQL**
     *   **PolarDBMySQL**
     *   **PostgreSQL**
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The instance IDs. Separate multiple IDs with commas (,).
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The region in which the instance resides. Valid values:
     *
     *   **cn-china**: Chinese mainland.
     *   **cn-hongkong**: China (Hong Kong).
     *   **ap-southeast-1**: Singapore.
     *
     * This parameter takes effect only if **InstanceIds** is left empty. If you leave **InstanceIds** empty, the system obtains data from the region specified by **Region**. By default, Region is set to **cn-china**. If you specify **InstanceIds**, **Region** does not take effect and the system obtains data from the region in which the first specified instance resides.****
     *
     * >  If your instances reside in the regions inside the Chinese mainland, set this parameter to **cn-china**.
     * @example cn-china
     *
     * @var string
     */
    public $region;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  You can specify a start time up to two months earlier than the current time.
     * @example 1642435200000
     *
     * @var string
     */
    public $start;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $tagNames;
    protected $_name = [
        'end'         => 'End',
        'engine'      => 'Engine',
        'instanceIds' => 'InstanceIds',
        'region'      => 'Region',
        'start'       => 'Start',
        'tagNames'    => 'TagNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->tagNames) {
            $res['TagNames'] = $this->tagNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueryOptimizeDataTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['TagNames'])) {
            $model->tagNames = $map['TagNames'];
        }

        return $model;
    }
}

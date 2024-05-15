<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetAutoIncrementUsageStatisticRequest extends Model
{
    /**
     * @description The database name. If you specify a database, the operation queries the usage of auto-increment table IDs in the specified database. Otherwise, the operation queries the usage of auto-increment table IDs in all databases on the instance.
     *
     * >  Specify the parameter value as a JSON array, such as [\\"db1\\",\\"db2\\"]. Separate multiple database names with commas (,).
     * @example [\\"db1\\",\\"db2\\"]
     *
     * @var string
     */
    public $dbNames;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The usage threshold of auto-increment IDs. Only usage that exceeds the threshold can be returned. Valid values are decimals that range from 0 to 1.
     *
     * This parameter is required.
     * @example 0.9
     *
     * @var float
     */
    public $ratioFilter;

    /**
     * @description Specifies whether to query real-time data. Valid values:
     *
     *   **true**: queries data in real time except for data generated in the last 10 minutes.****
     *   **false**: queries data generated in the last 2 hours. If no such data exists, queries the latest data.
     *
     * This parameter is required.
     * @example false
     *
     * @var bool
     */
    public $realTime;
    protected $_name = [
        'dbNames'     => 'DbNames',
        'instanceId'  => 'InstanceId',
        'ratioFilter' => 'RatioFilter',
        'realTime'    => 'RealTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbNames) {
            $res['DbNames'] = $this->dbNames;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ratioFilter) {
            $res['RatioFilter'] = $this->ratioFilter;
        }
        if (null !== $this->realTime) {
            $res['RealTime'] = $this->realTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAutoIncrementUsageStatisticRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbNames'])) {
            $model->dbNames = $map['DbNames'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RatioFilter'])) {
            $model->ratioFilter = $map['RatioFilter'];
        }
        if (isset($map['RealTime'])) {
            $model->realTime = $map['RealTime'];
        }

        return $model;
    }
}

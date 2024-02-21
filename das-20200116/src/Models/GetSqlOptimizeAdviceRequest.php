<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetSqlOptimizeAdviceRequest extends Model
{
    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $consoleContext;

    /**
     * @description The end date of the time range to query. Specify the date in the *yyyyMMdd* format. The time must be in UTC.
     *
     *   The default value of this parameter is one day before the current day.
     *   The value must be earlier than the current day. The interval between the start date and the end date cannot exceed 30 days.
     *
     * @example 20210917
     *
     * @var string
     */
    public $endDt;

    /**
     * @description The database engine. Valid values:
     *
     *   **MySQL**: ApsaraDB RDS for MySQL.
     *   **PolarDBMySQL**: PolarDB for MySQL.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The instance ID.
     *
     * >  You must specify the instance ID only if your database instance is an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster.
     * @example rm-2ze1jdv45i7l6****
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
     * This parameter takes effect only if **InstanceIds** is left empty. If you leave **InstanceIds** empty, the system obtains data from the region specified by **Region**. By default, Region is set to **cn-china**. If you specify **InstanceIds**, **Region** does not take effect, and the system obtains data from the region in which the first specified instance resides.****
     *
     * >  If your instances reside in the regions inside the Chinese mainland, set this parameter to **cn-china**.
     * @example cn-china
     *
     * @var string
     */
    public $region;

    /**
     * @description The start date of the time range to query. Specify the date in the *yyyyMMdd* format. The time must be in UTC.
     *
     *   The default value of this parameter is one day before the current day.
     *   The value must be earlier than the current day.
     *
     * @example 20210916
     *
     * @var string
     */
    public $startDt;
    protected $_name = [
        'consoleContext' => 'ConsoleContext',
        'endDt'          => 'EndDt',
        'engine'         => 'Engine',
        'instanceIds'    => 'InstanceIds',
        'region'         => 'Region',
        'startDt'        => 'StartDt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consoleContext) {
            $res['ConsoleContext'] = $this->consoleContext;
        }
        if (null !== $this->endDt) {
            $res['EndDt'] = $this->endDt;
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
        if (null !== $this->startDt) {
            $res['StartDt'] = $this->startDt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSqlOptimizeAdviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsoleContext'])) {
            $model->consoleContext = $map['ConsoleContext'];
        }
        if (isset($map['EndDt'])) {
            $model->endDt = $map['EndDt'];
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
        if (isset($map['StartDt'])) {
            $model->startDt = $map['StartDt'];
        }

        return $model;
    }
}

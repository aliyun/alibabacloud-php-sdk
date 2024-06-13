<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the cold data storage is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $coldEnable;

    /**
     * @description The number of days for which the SQL Explorer and Audit data is stored in cold storage.
     *
     * @example 23
     *
     * @var int
     */
    public $coldRetention;

    /**
     * @description The time when the cold data storage was enabled. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1683712800000
     *
     * @var int
     */
    public $coldStartTime;

    /**
     * @description The collector version. Valid values:
     *
     *   **MYSQL_V0**
     *   **MYSQL_V1**
     *   **MYSQL_V2**
     *   **MYSQL_V3**
     *   **PG_V1**
     *   **rdspg_v1**
     *   **polarpg_v1**
     *
     * @example MYSQL_V3
     *
     * @var string
     */
    public $collectorVersion;

    /**
     * @description Indicates whether the hot data storage is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $hotEnable;

    /**
     * @description The number of days for which the SQL Explorer and Audit data is stored in hot storage.
     *
     * @example 7
     *
     * @var int
     */
    public $hotRetention;

    /**
     * @description The time when the hot data storage was enabled. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1683712800000
     *
     * @var int
     */
    public $hotStartTime;

    /**
     * @description A reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $logFilter;

    /**
     * @description Indicates whether the SQL Explorer feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $requestEnable;

    /**
     * @description The time when the SQL Explorer feature was enabled. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1683712800000
     *
     * @var int
     */
    public $requestStartTime;

    /**
     * @description The time when DAS Enterprise Edition V1 expired. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1715335200000
     *
     * @var int
     */
    public $requestStopTime;

    /**
     * @description The total storage duration of the SQL Explorer and Audit data. The value of this parameter is the sum of the values of **HotRetention** and **ColdRetention**. Unit: day.
     *
     * @example 30
     *
     * @var int
     */
    public $retention;

    /**
     * @description Indicates whether DAS Enterprise Edition is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $sqlLogEnable;

    /**
     * @description The state of data migration. Valid values:
     *
     *   **FINISH**: The historical data is migrated.
     *   **RUNNING**: The historical data is being migrated.
     *   **FAILURE**: The historical data fails to be migrated.
     *
     * @example FINISH
     *
     * @var string
     */
    public $sqlLogState;

    /**
     * @description The time when DAS Enterprise Edition was enabled. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1683712800000
     *
     * @var int
     */
    public $sqlLogVisibleTime;

    /**
     * @description The latest version of DAS Enterprise Edition that supports the database instance. Valid values:
     *
     *   **SQL_LOG_V0**: DAS Enterprise Edition V0.
     *   **SQL_LOG_V1**: DAS Enterprise version V1.
     *   **SQL_LOG_V2**: DAS Enterprise Edition V2.
     *   **SQL_LOG_V3**: DAS Enterprise Edition V3.
     *   **SQL_LOG_NOT_ENABLE**: DAS Enterprise Edition is not enabled.
     *   **SQL_LOG_NOT_SUPPORT**: DAS Enterprise Edition is not supported.
     *
     * @example SQL_LOG_V3
     *
     * @var string
     */
    public $supportVersion;

    /**
     * @description The version of DAS Enterprise Edition that is enabled for the database instance. Valid values:
     *
     *   **SQL_LOG_V0**: DAS Enterprise Edition V0.
     *   **SQL_LOG_V1**: DAS Enterprise version V1.
     *   **SQL_LOG_V2**: DAS Enterprise Edition V2.
     *   **SQL_LOG_V3**: DAS Enterprise Edition V3.
     *   **SQL_LOG_NOT_ENABLE**: DAS Enterprise Edition is not enabled.
     *   **SQL_LOG_NOT_SUPPORT**: DAS Enterprise Edition is not supported.
     *
     * @example SQL_LOG_V3
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'coldEnable'        => 'ColdEnable',
        'coldRetention'     => 'ColdRetention',
        'coldStartTime'     => 'ColdStartTime',
        'collectorVersion'  => 'CollectorVersion',
        'hotEnable'         => 'HotEnable',
        'hotRetention'      => 'HotRetention',
        'hotStartTime'      => 'HotStartTime',
        'logFilter'         => 'LogFilter',
        'requestEnable'     => 'RequestEnable',
        'requestStartTime'  => 'RequestStartTime',
        'requestStopTime'   => 'RequestStopTime',
        'retention'         => 'Retention',
        'sqlLogEnable'      => 'SqlLogEnable',
        'sqlLogState'       => 'SqlLogState',
        'sqlLogVisibleTime' => 'SqlLogVisibleTime',
        'supportVersion'    => 'SupportVersion',
        'version'           => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldEnable) {
            $res['ColdEnable'] = $this->coldEnable;
        }
        if (null !== $this->coldRetention) {
            $res['ColdRetention'] = $this->coldRetention;
        }
        if (null !== $this->coldStartTime) {
            $res['ColdStartTime'] = $this->coldStartTime;
        }
        if (null !== $this->collectorVersion) {
            $res['CollectorVersion'] = $this->collectorVersion;
        }
        if (null !== $this->hotEnable) {
            $res['HotEnable'] = $this->hotEnable;
        }
        if (null !== $this->hotRetention) {
            $res['HotRetention'] = $this->hotRetention;
        }
        if (null !== $this->hotStartTime) {
            $res['HotStartTime'] = $this->hotStartTime;
        }
        if (null !== $this->logFilter) {
            $res['LogFilter'] = $this->logFilter;
        }
        if (null !== $this->requestEnable) {
            $res['RequestEnable'] = $this->requestEnable;
        }
        if (null !== $this->requestStartTime) {
            $res['RequestStartTime'] = $this->requestStartTime;
        }
        if (null !== $this->requestStopTime) {
            $res['RequestStopTime'] = $this->requestStopTime;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->sqlLogEnable) {
            $res['SqlLogEnable'] = $this->sqlLogEnable;
        }
        if (null !== $this->sqlLogState) {
            $res['SqlLogState'] = $this->sqlLogState;
        }
        if (null !== $this->sqlLogVisibleTime) {
            $res['SqlLogVisibleTime'] = $this->sqlLogVisibleTime;
        }
        if (null !== $this->supportVersion) {
            $res['SupportVersion'] = $this->supportVersion;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColdEnable'])) {
            $model->coldEnable = $map['ColdEnable'];
        }
        if (isset($map['ColdRetention'])) {
            $model->coldRetention = $map['ColdRetention'];
        }
        if (isset($map['ColdStartTime'])) {
            $model->coldStartTime = $map['ColdStartTime'];
        }
        if (isset($map['CollectorVersion'])) {
            $model->collectorVersion = $map['CollectorVersion'];
        }
        if (isset($map['HotEnable'])) {
            $model->hotEnable = $map['HotEnable'];
        }
        if (isset($map['HotRetention'])) {
            $model->hotRetention = $map['HotRetention'];
        }
        if (isset($map['HotStartTime'])) {
            $model->hotStartTime = $map['HotStartTime'];
        }
        if (isset($map['LogFilter'])) {
            $model->logFilter = $map['LogFilter'];
        }
        if (isset($map['RequestEnable'])) {
            $model->requestEnable = $map['RequestEnable'];
        }
        if (isset($map['RequestStartTime'])) {
            $model->requestStartTime = $map['RequestStartTime'];
        }
        if (isset($map['RequestStopTime'])) {
            $model->requestStopTime = $map['RequestStopTime'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['SqlLogEnable'])) {
            $model->sqlLogEnable = $map['SqlLogEnable'];
        }
        if (isset($map['SqlLogState'])) {
            $model->sqlLogState = $map['SqlLogState'];
        }
        if (isset($map['SqlLogVisibleTime'])) {
            $model->sqlLogVisibleTime = $map['SqlLogVisibleTime'];
        }
        if (isset($map['SupportVersion'])) {
            $model->supportVersion = $map['SupportVersion'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

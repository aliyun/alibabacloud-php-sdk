<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetRequestDiagnosisPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The user ID.
     *
     * @example 2093****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The name of the database.
     *
     * @example das
     *
     * @var string
     */
    public $dbSchema;

    /**
     * @description The database engine. Valid values:
     *
     * **MySQL**
     * **PostgreSQL**
     * **SQLServer**
     * **PolarDBMySQL**
     * **PolarDBOracle**
     * **MongoDB**
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The time when the SQL diagnostics task was created. The value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1633071840000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the SQL diagnostics task was modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1633071850000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The unique ID of the diagnostics task.
     *
     * @example 61820b594664275c4429****
     *
     * @var string
     */
    public $messageId;

    /**
     * @description Additional information.
     *
     * @example {"":""}
     *
     * @var string
     */
    public $param;

    /**
     * @description The result of the SQL diagnostics task. The result includes the following information:
     *
     * **endTime**: the end time of the SQL diagnostics task.
     * **errorCode**: indicates whether the SQL diagnostics task is complete. Valid values:
     * **0001**: The SQL diagnostics task is complete.
     * **0003**: The SQL diagnostics task failed.
     *
     * **errorMessage**: the error message.
     * **estimateCost**: the estimated cost.
     * **cpu**: the estimated CPU utilization of the index.
     * **io**: the estimated I/O usage of the index.
     * **rows**: the estimated values of the rows returned for the index.
     * **improvement**: the performance improvement ratio.
     * **indexAdvices**: the index recommendations, which include the following information:
     * **columns**: the index columns.
     * **ddlAddIndex**: the DDL statement for the index.
     * **indexName**: the name of the index.
     * **schemaName**: the name of the database.
     * **tableName**: the name of the table.
     * **unique**: indicates whether the index is unique.
     *
     * **ip**: the IP address of the instance.
     * **messageId**: the ID of the diagnostics task.
     * **port**: the port used to connect to the instance.
     * **sqlTag**: the SQL tag.
     * **startTime**: the start time of the SQL diagnostics task.
     * **success**: indicates whether the request was successful.
     * **support**: indicates whether the SQL statement can be diagnosed. Valid values:
     * **true**: The SQL statement can be diagnosed.
     * **false**: The SQL statement cannot be diagnosed.
     *
     * **tuningAdvices**: the SQL rewrite suggestions.
     *
     * @example { "endTime":1636354256000, "errorCode":"0001", "errorMessage":"TFX Successful", "estimateCost":{ "cpu":1.7878745150389268, "io":9.948402604746128, "rows":8.889372575194633 }, "improvement":12933.97, "indexAdvices":[ { "columns":[ "work_no" ], "ddlAddIndex":"ALTER TABLE `test`.`work_order` ADD INDEX `idx_workno` (`work_no`)", "indexName":"idx_workno", "schemaName":"test", "tableName":"work_order", "unique":false } ], "ip":"****.mysql.rds.aliyuncs.com", "messageId":"6188c8cb2f1365b16aee****", "port":3306, "sqlTag":"{\"PRED_EQUAL\":\"Y\",\"CNT_QB\":\"1\",\"CNT_TB\":\"1\"}", "startTime":1636354252000, "success":true, "support":true, "tuningAdvices":[ ] }
     *
     * @var string
     */
    public $result;

    /**
     * @description The SQL template ID.
     *
     * @example 0c95dae3afef77be06572612df9b****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The status of the diagnostics task. Valid values:
     *
     * **0**: The diagnostics task is in progress.
     *
     * **1**: A diagnostics error occurred.
     *
     * **2**: The diagnostics task is complete.
     *
     * **3**: An SQL error occurred.
     *
     * **4**: An engine error occurred.
     *
     * @example 2
     *
     * @var int
     */
    public $state;

    /**
     * @description The unique ID of the diagnostics instance.
     *
     * @example hdm_51fe9bc19ec413f4d530431af87a****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'accountId'   => 'accountId',
        'dbSchema'    => 'dbSchema',
        'engine'      => 'engine',
        'gmtCreate'   => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'messageId'   => 'messageId',
        'param'       => 'param',
        'result'      => 'result',
        'sqlId'       => 'sqlId',
        'state'       => 'state',
        'uuid'        => 'uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->dbSchema) {
            $res['dbSchema'] = $this->dbSchema;
        }
        if (null !== $this->engine) {
            $res['engine'] = $this->engine;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }
        if (null !== $this->param) {
            $res['param'] = $this->param;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->sqlId) {
            $res['sqlId'] = $this->sqlId;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['dbSchema'])) {
            $model->dbSchema = $map['dbSchema'];
        }
        if (isset($map['engine'])) {
            $model->engine = $map['engine'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }
        if (isset($map['param'])) {
            $model->param = $map['param'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['sqlId'])) {
            $model->sqlId = $map['sqlId'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        return $model;
    }
}

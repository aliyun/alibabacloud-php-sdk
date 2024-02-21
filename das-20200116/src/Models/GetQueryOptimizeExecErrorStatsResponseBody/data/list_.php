<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeExecErrorStatsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The name of the database.
     *
     * @example testdb01
     *
     * @var string
     */
    public $dbname;

    /**
     * @description The error code returned if the request failed.
     *
     * @example 1146
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The number of errors.
     *
     * @example 10
     *
     * @var int
     */
    public $errorCount;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The alias of the database instance.
     *
     * @example test01
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The SQL template ID.
     *
     * @example 2e8147b5ca2dfc640dfd5e43d96a****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The content of the SQL template.
     *
     * @example select * from test1
     *
     * @var string
     */
    public $sqlText;
    protected $_name = [
        'dbname'       => 'Dbname',
        'errorCode'    => 'ErrorCode',
        'errorCount'   => 'ErrorCount',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'sqlId'        => 'SqlId',
        'sqlText'      => 'SqlText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbname) {
            $res['Dbname'] = $this->dbname;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
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
        if (isset($map['Dbname'])) {
            $model->dbname = $map['Dbname'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }

        return $model;
    }
}

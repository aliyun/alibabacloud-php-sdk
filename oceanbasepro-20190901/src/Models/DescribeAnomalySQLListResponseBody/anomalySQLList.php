<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAnomalySQLListResponseBody;

use AlibabaCloud\Tea\Model;

class anomalySQLList extends Model
{
    /**
     * @description The average CPU time, in ms.
     *
     * @example 50.13
     *
     * @var float
     */
    public $cpuTime;

    /**
     * @description The name of the database.
     *
     * @example database1
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The diagnosis information.
     *
     * @example Total number of executions = 80199, Average CPU time = 6.8 ms, Overall CPU utilization = 87%
     *
     * @var string
     */
    public $diagnosis;

    /**
     * @description The diagnostic rule.
     *
     * @example Utilization above threshold
     *
     * @var string
     */
    public $diagnosisRule;

    /**
     * @description The number of executions.
     *
     * @example 89043
     *
     * @var int
     */
    public $executions;

    /**
     * @description The sequence number of the returned SQL statement.
     *
     * @example 1
     *
     * @var int
     */
    public $key;

    /**
     * @description The request time, in ms.
     *
     * @example 50.00
     *
     * @var float
     */
    public $requestTime;

    /**
     * @description The request time in UTC +0.
     *
     * @example 2022-01-11T07:08:00Z
     *
     * @var string
     */
    public $requestTimeUTCString;

    /**
     * @description SQLID.
     *
     * @example 99E9D3BF****B486239E6C7BC79B****
     *
     * @var string
     */
    public $SQLId;

    /**
     * @description The SQL text.
     *
     * @example SELECT  ****   FROM ****   WHERE **** = ? AND **** = ?   ORDER BY **** ASC
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description The suggestions.
     *
     * @example Check your business scenarios, data distribution changes, request surges, and execution plan changes.
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description The username.
     *
     * @example tester
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'cpuTime'              => 'CpuTime',
        'dbName'               => 'DbName',
        'diagnosis'            => 'Diagnosis',
        'diagnosisRule'        => 'DiagnosisRule',
        'executions'           => 'Executions',
        'key'                  => 'Key',
        'requestTime'          => 'RequestTime',
        'requestTimeUTCString' => 'RequestTimeUTCString',
        'SQLId'                => 'SQLId',
        'SQLText'              => 'SQLText',
        'suggestion'           => 'Suggestion',
        'userName'             => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuTime) {
            $res['CpuTime'] = $this->cpuTime;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->diagnosis) {
            $res['Diagnosis'] = $this->diagnosis;
        }
        if (null !== $this->diagnosisRule) {
            $res['DiagnosisRule'] = $this->diagnosisRule;
        }
        if (null !== $this->executions) {
            $res['Executions'] = $this->executions;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->requestTime) {
            $res['RequestTime'] = $this->requestTime;
        }
        if (null !== $this->requestTimeUTCString) {
            $res['RequestTimeUTCString'] = $this->requestTimeUTCString;
        }
        if (null !== $this->SQLId) {
            $res['SQLId'] = $this->SQLId;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return anomalySQLList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuTime'])) {
            $model->cpuTime = $map['CpuTime'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['Diagnosis'])) {
            $model->diagnosis = $map['Diagnosis'];
        }
        if (isset($map['DiagnosisRule'])) {
            $model->diagnosisRule = $map['DiagnosisRule'];
        }
        if (isset($map['Executions'])) {
            $model->executions = $map['Executions'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['RequestTime'])) {
            $model->requestTime = $map['RequestTime'];
        }
        if (isset($map['RequestTimeUTCString'])) {
            $model->requestTimeUTCString = $map['RequestTimeUTCString'];
        }
        if (isset($map['SQLId'])) {
            $model->SQLId = $map['SQLId'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

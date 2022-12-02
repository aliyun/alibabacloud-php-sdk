<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAnomalySQLListResponseBody;

use AlibabaCloud\Tea\Model;

class anomalySQLList extends Model
{
    /**
     * @var float
     */
    public $cpuTime;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $diagnosis;

    /**
     * @var string
     */
    public $diagnosisRule;

    /**
     * @var int
     */
    public $executions;

    /**
     * @var int
     */
    public $key;

    /**
     * @var float
     */
    public $requestTime;

    /**
     * @var string
     */
    public $requestTimeUTCString;

    /**
     * @var string
     */
    public $SQLId;

    /**
     * @var string
     */
    public $SQLText;

    /**
     * @var string
     */
    public $suggestion;

    /**
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

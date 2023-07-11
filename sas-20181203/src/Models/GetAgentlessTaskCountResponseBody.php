<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetAgentlessTaskCountResponseBody extends Model
{
    /**
     * @example 1682577532318
     *
     * @var int
     */
    public $lastTaskTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $maliciousFile;

    /**
     * @example D03DD0FD-6041-5107-AC00-383E28F1****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $riskMachine;

    /**
     * @example 1
     *
     * @var int
     */
    public $scanMachine;

    /**
     * @example 1
     *
     * @var int
     */
    public $vulnerability;
    protected $_name = [
        'lastTaskTime'  => 'LastTaskTime',
        'maliciousFile' => 'MaliciousFile',
        'requestId'     => 'RequestId',
        'riskMachine'   => 'RiskMachine',
        'scanMachine'   => 'ScanMachine',
        'vulnerability' => 'Vulnerability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastTaskTime) {
            $res['LastTaskTime'] = $this->lastTaskTime;
        }
        if (null !== $this->maliciousFile) {
            $res['MaliciousFile'] = $this->maliciousFile;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskMachine) {
            $res['RiskMachine'] = $this->riskMachine;
        }
        if (null !== $this->scanMachine) {
            $res['ScanMachine'] = $this->scanMachine;
        }
        if (null !== $this->vulnerability) {
            $res['Vulnerability'] = $this->vulnerability;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentlessTaskCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastTaskTime'])) {
            $model->lastTaskTime = $map['LastTaskTime'];
        }
        if (isset($map['MaliciousFile'])) {
            $model->maliciousFile = $map['MaliciousFile'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskMachine'])) {
            $model->riskMachine = $map['RiskMachine'];
        }
        if (isset($map['ScanMachine'])) {
            $model->scanMachine = $map['ScanMachine'];
        }
        if (isset($map['Vulnerability'])) {
            $model->vulnerability = $map['Vulnerability'];
        }

        return $model;
    }
}

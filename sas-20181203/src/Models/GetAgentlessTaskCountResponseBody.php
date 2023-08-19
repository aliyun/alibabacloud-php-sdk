<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetAgentlessTaskCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $baselineCheckCount;

    /**
     * @var int
     */
    public $cveVulCount;

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
     * @var int
     */
    public $scaVulCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $scanMachine;

    /**
     * @var string
     */
    public $sysVulCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $vulnerability;
    protected $_name = [
        'baselineCheckCount' => 'BaselineCheckCount',
        'cveVulCount'        => 'CveVulCount',
        'lastTaskTime'       => 'LastTaskTime',
        'maliciousFile'      => 'MaliciousFile',
        'requestId'          => 'RequestId',
        'riskMachine'        => 'RiskMachine',
        'scaVulCount'        => 'ScaVulCount',
        'scanMachine'        => 'ScanMachine',
        'sysVulCount'        => 'SysVulCount',
        'vulnerability'      => 'Vulnerability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineCheckCount) {
            $res['BaselineCheckCount'] = $this->baselineCheckCount;
        }
        if (null !== $this->cveVulCount) {
            $res['CveVulCount'] = $this->cveVulCount;
        }
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
        if (null !== $this->scaVulCount) {
            $res['ScaVulCount'] = $this->scaVulCount;
        }
        if (null !== $this->scanMachine) {
            $res['ScanMachine'] = $this->scanMachine;
        }
        if (null !== $this->sysVulCount) {
            $res['SysVulCount'] = $this->sysVulCount;
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
        if (isset($map['BaselineCheckCount'])) {
            $model->baselineCheckCount = $map['BaselineCheckCount'];
        }
        if (isset($map['CveVulCount'])) {
            $model->cveVulCount = $map['CveVulCount'];
        }
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
        if (isset($map['ScaVulCount'])) {
            $model->scaVulCount = $map['ScaVulCount'];
        }
        if (isset($map['ScanMachine'])) {
            $model->scanMachine = $map['ScanMachine'];
        }
        if (isset($map['SysVulCount'])) {
            $model->sysVulCount = $map['SysVulCount'];
        }
        if (isset($map['Vulnerability'])) {
            $model->vulnerability = $map['Vulnerability'];
        }

        return $model;
    }
}

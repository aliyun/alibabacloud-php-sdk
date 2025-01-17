<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $lastTaskTime;
    /**
     * @var int
     */
    public $maliciousFile;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $riskMachine;
    /**
     * @var int
     */
    public $scaVulCount;
    /**
     * @var int
     */
    public $scanMachine;
    /**
     * @var int
     */
    public $sensitiveFileCount;
    /**
     * @var string
     */
    public $sysVulCount;
    /**
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
        'sensitiveFileCount' => 'SensitiveFileCount',
        'sysVulCount'        => 'SysVulCount',
        'vulnerability'      => 'Vulnerability',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->sensitiveFileCount) {
            $res['SensitiveFileCount'] = $this->sensitiveFileCount;
        }

        if (null !== $this->sysVulCount) {
            $res['SysVulCount'] = $this->sysVulCount;
        }

        if (null !== $this->vulnerability) {
            $res['Vulnerability'] = $this->vulnerability;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['SensitiveFileCount'])) {
            $model->sensitiveFileCount = $map['SensitiveFileCount'];
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

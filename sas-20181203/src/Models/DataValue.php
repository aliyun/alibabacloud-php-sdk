<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DataValue extends Model
{
    /**
     * @var int
     */
    public $riskMachine;

    /**
     * @var int
     */
    public $scanMachine;

    /**
     * @var int
     */
    public $maliciousFile;

    /**
     * @var int
     */
    public $vulnerability;

    /**
     * @var int
     */
    public $lastTaskTime;

    /**
     * @var int
     */
    public $baselineCheckCount;

    /**
     * @var int
     */
    public $scaVulCount;

    /**
     * @var int
     */
    public $cveVulCount;

    /**
     * @var int
     */
    public $sysVulCount;

    /**
     * @var int
     */
    public $sensitiveFileCount;

    /**
     * @var int
     */
    public $estimateUsedSize;

    /**
     * @var int
     */
    public $cveNum;

    /**
     * @var int
     */
    public $emgNum;

    /**
     * @var int
     */
    public $sysNum;

    /**
     * @var int
     */
    public $cmsNum;

    /**
     * @var int
     */
    public $appNum;

    /**
     * @var int
     */
    public $scaNum;

    /**
     * @var int
     */
    public $vulAsapSum;

    /**
     * @var int
     */
    public $vulLaterSum;

    /**
     * @var int
     */
    public $vulNntfSum;

    /**
     * @var int
     */
    public $sysAsapNum;
    protected $_name = [
        'riskMachine' => 'RiskMachine',
        'scanMachine' => 'ScanMachine',
        'maliciousFile' => 'MaliciousFile',
        'vulnerability' => 'Vulnerability',
        'lastTaskTime' => 'LastTaskTime',
        'baselineCheckCount' => 'BaselineCheckCount',
        'scaVulCount' => 'ScaVulCount',
        'cveVulCount' => 'CveVulCount',
        'sysVulCount' => 'SysVulCount',
        'sensitiveFileCount' => 'SensitiveFileCount',
        'estimateUsedSize' => 'EstimateUsedSize',
        'cveNum' => 'CveNum',
        'emgNum' => 'EmgNum',
        'sysNum' => 'SysNum',
        'cmsNum' => 'CmsNum',
        'appNum' => 'AppNum',
        'scaNum' => 'ScaNum',
        'vulAsapSum' => 'VulAsapSum',
        'vulLaterSum' => 'VulLaterSum',
        'vulNntfSum' => 'VulNntfSum',
        'sysAsapNum' => 'SysAsapNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->riskMachine) {
            $res['RiskMachine'] = $this->riskMachine;
        }

        if (null !== $this->scanMachine) {
            $res['ScanMachine'] = $this->scanMachine;
        }

        if (null !== $this->maliciousFile) {
            $res['MaliciousFile'] = $this->maliciousFile;
        }

        if (null !== $this->vulnerability) {
            $res['Vulnerability'] = $this->vulnerability;
        }

        if (null !== $this->lastTaskTime) {
            $res['LastTaskTime'] = $this->lastTaskTime;
        }

        if (null !== $this->baselineCheckCount) {
            $res['BaselineCheckCount'] = $this->baselineCheckCount;
        }

        if (null !== $this->scaVulCount) {
            $res['ScaVulCount'] = $this->scaVulCount;
        }

        if (null !== $this->cveVulCount) {
            $res['CveVulCount'] = $this->cveVulCount;
        }

        if (null !== $this->sysVulCount) {
            $res['SysVulCount'] = $this->sysVulCount;
        }

        if (null !== $this->sensitiveFileCount) {
            $res['SensitiveFileCount'] = $this->sensitiveFileCount;
        }

        if (null !== $this->estimateUsedSize) {
            $res['EstimateUsedSize'] = $this->estimateUsedSize;
        }

        if (null !== $this->cveNum) {
            $res['CveNum'] = $this->cveNum;
        }

        if (null !== $this->emgNum) {
            $res['EmgNum'] = $this->emgNum;
        }

        if (null !== $this->sysNum) {
            $res['SysNum'] = $this->sysNum;
        }

        if (null !== $this->cmsNum) {
            $res['CmsNum'] = $this->cmsNum;
        }

        if (null !== $this->appNum) {
            $res['AppNum'] = $this->appNum;
        }

        if (null !== $this->scaNum) {
            $res['ScaNum'] = $this->scaNum;
        }

        if (null !== $this->vulAsapSum) {
            $res['VulAsapSum'] = $this->vulAsapSum;
        }

        if (null !== $this->vulLaterSum) {
            $res['VulLaterSum'] = $this->vulLaterSum;
        }

        if (null !== $this->vulNntfSum) {
            $res['VulNntfSum'] = $this->vulNntfSum;
        }

        if (null !== $this->sysAsapNum) {
            $res['SysAsapNum'] = $this->sysAsapNum;
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
        if (isset($map['RiskMachine'])) {
            $model->riskMachine = $map['RiskMachine'];
        }

        if (isset($map['ScanMachine'])) {
            $model->scanMachine = $map['ScanMachine'];
        }

        if (isset($map['MaliciousFile'])) {
            $model->maliciousFile = $map['MaliciousFile'];
        }

        if (isset($map['Vulnerability'])) {
            $model->vulnerability = $map['Vulnerability'];
        }

        if (isset($map['LastTaskTime'])) {
            $model->lastTaskTime = $map['LastTaskTime'];
        }

        if (isset($map['BaselineCheckCount'])) {
            $model->baselineCheckCount = $map['BaselineCheckCount'];
        }

        if (isset($map['ScaVulCount'])) {
            $model->scaVulCount = $map['ScaVulCount'];
        }

        if (isset($map['CveVulCount'])) {
            $model->cveVulCount = $map['CveVulCount'];
        }

        if (isset($map['SysVulCount'])) {
            $model->sysVulCount = $map['SysVulCount'];
        }

        if (isset($map['SensitiveFileCount'])) {
            $model->sensitiveFileCount = $map['SensitiveFileCount'];
        }

        if (isset($map['EstimateUsedSize'])) {
            $model->estimateUsedSize = $map['EstimateUsedSize'];
        }

        if (isset($map['CveNum'])) {
            $model->cveNum = $map['CveNum'];
        }

        if (isset($map['EmgNum'])) {
            $model->emgNum = $map['EmgNum'];
        }

        if (isset($map['SysNum'])) {
            $model->sysNum = $map['SysNum'];
        }

        if (isset($map['CmsNum'])) {
            $model->cmsNum = $map['CmsNum'];
        }

        if (isset($map['AppNum'])) {
            $model->appNum = $map['AppNum'];
        }

        if (isset($map['ScaNum'])) {
            $model->scaNum = $map['ScaNum'];
        }

        if (isset($map['VulAsapSum'])) {
            $model->vulAsapSum = $map['VulAsapSum'];
        }

        if (isset($map['VulLaterSum'])) {
            $model->vulLaterSum = $map['VulLaterSum'];
        }

        if (isset($map['VulNntfSum'])) {
            $model->vulNntfSum = $map['VulNntfSum'];
        }

        if (isset($map['SysAsapNum'])) {
            $model->sysAsapNum = $map['SysAsapNum'];
        }

        return $model;
    }
}

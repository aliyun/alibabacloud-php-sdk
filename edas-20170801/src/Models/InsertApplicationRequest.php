<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var int
     */
    public $buildPackId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $componentIds;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ecuInfo;

    /**
     * @var bool
     */
    public $enablePortCheck;

    /**
     * @var bool
     */
    public $enableUrlCheck;

    /**
     * @var string
     */
    public $healthCheckURL;

    /**
     * @var string
     */
    public $healthCheckUrl;

    /**
     * @var string
     */
    public $hooks;

    /**
     * @var string
     */
    public $jdk;

    /**
     * @var string
     */
    public $jvmOptions;

    /**
     * @var string
     */
    public $logicalRegionId;

    /**
     * @var int
     */
    public $maxHeapSize;

    /**
     * @var int
     */
    public $maxPermSize;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var int
     */
    public $minHeapSize;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $reservedPortStr;

    /**
     * @var string
     */
    public $webContainer;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'buildPackId'     => 'BuildPackId',
        'clusterId'       => 'ClusterId',
        'componentIds'    => 'ComponentIds',
        'cpu'             => 'Cpu',
        'description'     => 'Description',
        'ecuInfo'         => 'EcuInfo',
        'enablePortCheck' => 'EnablePortCheck',
        'enableUrlCheck'  => 'EnableUrlCheck',
        'healthCheckURL'  => 'HealthCheckURL',
        'healthCheckUrl'  => 'HealthCheckUrl',
        'hooks'           => 'Hooks',
        'jdk'             => 'Jdk',
        'jvmOptions'      => 'JvmOptions',
        'logicalRegionId' => 'LogicalRegionId',
        'maxHeapSize'     => 'MaxHeapSize',
        'maxPermSize'     => 'MaxPermSize',
        'mem'             => 'Mem',
        'minHeapSize'     => 'MinHeapSize',
        'packageType'     => 'PackageType',
        'reservedPortStr' => 'ReservedPortStr',
        'webContainer'    => 'WebContainer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->buildPackId) {
            $res['BuildPackId'] = $this->buildPackId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->componentIds) {
            $res['ComponentIds'] = $this->componentIds;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecuInfo) {
            $res['EcuInfo'] = $this->ecuInfo;
        }
        if (null !== $this->enablePortCheck) {
            $res['EnablePortCheck'] = $this->enablePortCheck;
        }
        if (null !== $this->enableUrlCheck) {
            $res['EnableUrlCheck'] = $this->enableUrlCheck;
        }
        if (null !== $this->healthCheckURL) {
            $res['HealthCheckURL'] = $this->healthCheckURL;
        }
        if (null !== $this->healthCheckUrl) {
            $res['HealthCheckUrl'] = $this->healthCheckUrl;
        }
        if (null !== $this->hooks) {
            $res['Hooks'] = $this->hooks;
        }
        if (null !== $this->jdk) {
            $res['Jdk'] = $this->jdk;
        }
        if (null !== $this->jvmOptions) {
            $res['JvmOptions'] = $this->jvmOptions;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->maxHeapSize) {
            $res['MaxHeapSize'] = $this->maxHeapSize;
        }
        if (null !== $this->maxPermSize) {
            $res['MaxPermSize'] = $this->maxPermSize;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->minHeapSize) {
            $res['MinHeapSize'] = $this->minHeapSize;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->reservedPortStr) {
            $res['ReservedPortStr'] = $this->reservedPortStr;
        }
        if (null !== $this->webContainer) {
            $res['WebContainer'] = $this->webContainer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['BuildPackId'])) {
            $model->buildPackId = $map['BuildPackId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ComponentIds'])) {
            $model->componentIds = $map['ComponentIds'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcuInfo'])) {
            $model->ecuInfo = $map['EcuInfo'];
        }
        if (isset($map['EnablePortCheck'])) {
            $model->enablePortCheck = $map['EnablePortCheck'];
        }
        if (isset($map['EnableUrlCheck'])) {
            $model->enableUrlCheck = $map['EnableUrlCheck'];
        }
        if (isset($map['HealthCheckURL'])) {
            $model->healthCheckURL = $map['HealthCheckURL'];
        }
        if (isset($map['HealthCheckUrl'])) {
            $model->healthCheckUrl = $map['HealthCheckUrl'];
        }
        if (isset($map['Hooks'])) {
            $model->hooks = $map['Hooks'];
        }
        if (isset($map['Jdk'])) {
            $model->jdk = $map['Jdk'];
        }
        if (isset($map['JvmOptions'])) {
            $model->jvmOptions = $map['JvmOptions'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['MaxHeapSize'])) {
            $model->maxHeapSize = $map['MaxHeapSize'];
        }
        if (isset($map['MaxPermSize'])) {
            $model->maxPermSize = $map['MaxPermSize'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['MinHeapSize'])) {
            $model->minHeapSize = $map['MinHeapSize'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['ReservedPortStr'])) {
            $model->reservedPortStr = $map['ReservedPortStr'];
        }
        if (isset($map['WebContainer'])) {
            $model->webContainer = $map['WebContainer'];
        }

        return $model;
    }
}

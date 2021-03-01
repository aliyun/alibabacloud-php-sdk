<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $buildPackId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $reservedPortStr;

    /**
     * @var string
     */
    public $ecuInfo;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var string
     */
    public $healthCheckURL;

    /**
     * @var string
     */
    public $logicalRegionId;

    /**
     * @var string
     */
    public $jdk;

    /**
     * @var string
     */
    public $webContainer;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $componentIds;

    /**
     * @var string
     */
    public $hooks;

    /**
     * @var string
     */
    public $jvmOptions;

    /**
     * @var int
     */
    public $minHeapSize;

    /**
     * @var int
     */
    public $maxPermSize;

    /**
     * @var int
     */
    public $maxHeapSize;

    /**
     * @var bool
     */
    public $enableUrlCheck;

    /**
     * @var bool
     */
    public $enablePortCheck;

    /**
     * @var string
     */
    public $healthCheckUrl;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'buildPackId'     => 'BuildPackId',
        'description'     => 'Description',
        'applicationName' => 'ApplicationName',
        'reservedPortStr' => 'ReservedPortStr',
        'ecuInfo'         => 'EcuInfo',
        'cpu'             => 'Cpu',
        'mem'             => 'Mem',
        'healthCheckURL'  => 'HealthCheckURL',
        'logicalRegionId' => 'LogicalRegionId',
        'jdk'             => 'Jdk',
        'webContainer'    => 'WebContainer',
        'packageType'     => 'PackageType',
        'componentIds'    => 'ComponentIds',
        'hooks'           => 'Hooks',
        'jvmOptions'      => 'JvmOptions',
        'minHeapSize'     => 'MinHeapSize',
        'maxPermSize'     => 'MaxPermSize',
        'maxHeapSize'     => 'MaxHeapSize',
        'enableUrlCheck'  => 'EnableUrlCheck',
        'enablePortCheck' => 'EnablePortCheck',
        'healthCheckUrl'  => 'HealthCheckUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->buildPackId) {
            $res['BuildPackId'] = $this->buildPackId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->reservedPortStr) {
            $res['ReservedPortStr'] = $this->reservedPortStr;
        }
        if (null !== $this->ecuInfo) {
            $res['EcuInfo'] = $this->ecuInfo;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->healthCheckURL) {
            $res['HealthCheckURL'] = $this->healthCheckURL;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->jdk) {
            $res['Jdk'] = $this->jdk;
        }
        if (null !== $this->webContainer) {
            $res['WebContainer'] = $this->webContainer;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->componentIds) {
            $res['ComponentIds'] = $this->componentIds;
        }
        if (null !== $this->hooks) {
            $res['Hooks'] = $this->hooks;
        }
        if (null !== $this->jvmOptions) {
            $res['JvmOptions'] = $this->jvmOptions;
        }
        if (null !== $this->minHeapSize) {
            $res['MinHeapSize'] = $this->minHeapSize;
        }
        if (null !== $this->maxPermSize) {
            $res['MaxPermSize'] = $this->maxPermSize;
        }
        if (null !== $this->maxHeapSize) {
            $res['MaxHeapSize'] = $this->maxHeapSize;
        }
        if (null !== $this->enableUrlCheck) {
            $res['EnableUrlCheck'] = $this->enableUrlCheck;
        }
        if (null !== $this->enablePortCheck) {
            $res['EnablePortCheck'] = $this->enablePortCheck;
        }
        if (null !== $this->healthCheckUrl) {
            $res['HealthCheckUrl'] = $this->healthCheckUrl;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['BuildPackId'])) {
            $model->buildPackId = $map['BuildPackId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ReservedPortStr'])) {
            $model->reservedPortStr = $map['ReservedPortStr'];
        }
        if (isset($map['EcuInfo'])) {
            $model->ecuInfo = $map['EcuInfo'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['HealthCheckURL'])) {
            $model->healthCheckURL = $map['HealthCheckURL'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['Jdk'])) {
            $model->jdk = $map['Jdk'];
        }
        if (isset($map['WebContainer'])) {
            $model->webContainer = $map['WebContainer'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['ComponentIds'])) {
            $model->componentIds = $map['ComponentIds'];
        }
        if (isset($map['Hooks'])) {
            $model->hooks = $map['Hooks'];
        }
        if (isset($map['JvmOptions'])) {
            $model->jvmOptions = $map['JvmOptions'];
        }
        if (isset($map['MinHeapSize'])) {
            $model->minHeapSize = $map['MinHeapSize'];
        }
        if (isset($map['MaxPermSize'])) {
            $model->maxPermSize = $map['MaxPermSize'];
        }
        if (isset($map['MaxHeapSize'])) {
            $model->maxHeapSize = $map['MaxHeapSize'];
        }
        if (isset($map['EnableUrlCheck'])) {
            $model->enableUrlCheck = $map['EnableUrlCheck'];
        }
        if (isset($map['EnablePortCheck'])) {
            $model->enablePortCheck = $map['EnablePortCheck'];
        }
        if (isset($map['HealthCheckUrl'])) {
            $model->healthCheckUrl = $map['HealthCheckUrl'];
        }

        return $model;
    }
}

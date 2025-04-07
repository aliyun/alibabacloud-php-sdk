<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\GetApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @description The description of the application.
     *
     * @var string
     */
    public $appDescription;

    /**
     * @description The application ID.
     *
     * @example 443d638a-ef76-47c4-b707-61197d******
     *
     * @var string
     */
    public $appId;

    /**
     * @description The application name.
     *
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the basic application.
     *
     * @example ee99cce6-1c8e-4bfa-96c3-3e2fa9******
     *
     * @var string
     */
    public $baseAppId;

    /**
     * @description The CPU specifications that are required for each instance. Unit: millicores. This parameter cannot be set to 0. Valid values:
     *
     *   **500**
     *   **1000**
     *   **2000**
     *   **4000**
     *   **8000**
     *   **12000**
     *   **16000**
     *   **32000**
     *
     * @example 2000
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The number of application instances.
     *
     * @example i-8ps2o182102o1jv05bys
     *
     * @var int
     */
    public $instances;

    /**
     * @description The memory size that is required by each instance. Unit: MB. This parameter cannot be set to 0. The values of this parameter correspond to the values of the Cpu parameter:
     *
     *   This parameter is set to **1024** if the Cpu parameter is set to 500 or 1000.
     *   This parameter is set to **2048** if the Cpu parameter is set to 500, 1000, or 2000.
     *   This parameter is set to **4096** if the Cpu parameter is set to 1000, 2000, or 4000.
     *   This parameter is set to **8192** if the Cpu parameter is set to 2000, 4000, or 8000.
     *   This parameter is set to **12288** if the Cpu parameter is set to 12000.
     *   This parameter is set to **16384** if the Cpu parameter is set to 4000, 8000, or 16000.
     *   This parameter is set to **24576** if the Cpu parameter is set to 12000.
     *   This parameter is set to **32768** if the Cpu parameter is set to 16000.
     *   This parameter is set to **65536** if the Cpu parameter is set to 8000, 16000, or 32000.
     *   This parameter is set to **131072** if the Cpu parameter is set to 32000.
     *
     * @example 4096
     *
     * @var int
     */
    public $mem;

    /**
     * @description Specifies whether to enable WebAssembly Filter. Valid values:
     *
     *   true: enables this parameter.
     *   false: disables this parameter.
     *
     * @example true
     *
     * @var bool
     */
    public $mseEnabled;

    /**
     * @description The ID of the namespace to which the MSE instance belongs.
     *
     * @example test
     *
     * @var string
     */
    public $mseNamespaceId;

    /**
     * @description The namespace ID.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The programming language that is used to create the application. Valid values:
     *
     *   **java** :Java.
     *   **php**: PHP.
     *   **other**: other programming languages, such as Python, C++, Go, .NET, and Node.js
     *
     * @example java
     *
     * @var string
     */
    public $programmingLanguage;

    /**
     * @description The number of application instances that are running.
     *
     * @example 1
     *
     * @var int
     */
    public $runningInstances;

    /**
     * @description Indicates whether the auto scaling policy is enabled. Valid values:
     *
     *   **true**: The auto scaling policy is enabled.
     *   **false**: The auto scaling policy is disabled.
     *
     * @example true
     *
     * @var string
     */
    public $scaleRuleEnabled;

    /**
     * @description The type of the auto scaling policy. Valid values:
     *
     *   **timing**: a scheduled auto scaling policy.
     *   **metric**: a metric-based auto scaling policy.
     *   **mix**: a hybrid auto scaling policy.
     *
     * @example timing
     *
     * @var string
     */
    public $scaleRuleType;
    protected $_name = [
        'appDescription' => 'AppDescription',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'baseAppId' => 'BaseAppId',
        'cpu' => 'Cpu',
        'instances' => 'Instances',
        'mem' => 'Mem',
        'mseEnabled' => 'MseEnabled',
        'mseNamespaceId' => 'MseNamespaceId',
        'namespaceId' => 'NamespaceId',
        'programmingLanguage' => 'ProgrammingLanguage',
        'runningInstances' => 'RunningInstances',
        'scaleRuleEnabled' => 'ScaleRuleEnabled',
        'scaleRuleType' => 'ScaleRuleType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appDescription) {
            $res['AppDescription'] = $this->appDescription;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->baseAppId) {
            $res['BaseAppId'] = $this->baseAppId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->mseEnabled) {
            $res['MseEnabled'] = $this->mseEnabled;
        }
        if (null !== $this->mseNamespaceId) {
            $res['MseNamespaceId'] = $this->mseNamespaceId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->programmingLanguage) {
            $res['ProgrammingLanguage'] = $this->programmingLanguage;
        }
        if (null !== $this->runningInstances) {
            $res['RunningInstances'] = $this->runningInstances;
        }
        if (null !== $this->scaleRuleEnabled) {
            $res['ScaleRuleEnabled'] = $this->scaleRuleEnabled;
        }
        if (null !== $this->scaleRuleType) {
            $res['ScaleRuleType'] = $this->scaleRuleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppDescription'])) {
            $model->appDescription = $map['AppDescription'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BaseAppId'])) {
            $model->baseAppId = $map['BaseAppId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Instances'])) {
            $model->instances = $map['Instances'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['MseEnabled'])) {
            $model->mseEnabled = $map['MseEnabled'];
        }
        if (isset($map['MseNamespaceId'])) {
            $model->mseNamespaceId = $map['MseNamespaceId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['ProgrammingLanguage'])) {
            $model->programmingLanguage = $map['ProgrammingLanguage'];
        }
        if (isset($map['RunningInstances'])) {
            $model->runningInstances = $map['RunningInstances'];
        }
        if (isset($map['ScaleRuleEnabled'])) {
            $model->scaleRuleEnabled = $map['ScaleRuleEnabled'];
        }
        if (isset($map['ScaleRuleType'])) {
            $model->scaleRuleType = $map['ScaleRuleType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\GetApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @var string
     */
    public $appDescription;

    /**
     * @example 443d638a-ef76-47c4-b707-61197d******
     *
     * @var string
     */
    public $appId;

    /**
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @example ee99cce6-1c8e-4bfa-96c3-3e2fa9******
     *
     * @var string
     */
    public $baseAppId;

    /**
     * @example 2000
     *
     * @var int
     */
    public $cpu;

    /**
     * @example i-8ps2o182102o1jv05bys
     *
     * @var int
     */
    public $instances;

    /**
     * @example 4096
     *
     * @var int
     */
    public $mem;

    /**
     * @example true
     *
     * @var bool
     */
    public $mseEnabled;

    /**
     * @example test
     *
     * @var string
     */
    public $mseNamespaceId;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @example java
     *
     * @var string
     */
    public $programmingLanguage;

    /**
     * @example 1
     *
     * @var int
     */
    public $runningInstances;

    /**
     * @example true
     *
     * @var string
     */
    public $scaleRuleEnabled;

    /**
     * @example timing
     *
     * @var string
     */
    public $scaleRuleType;
    protected $_name = [
        'appDescription'      => 'AppDescription',
        'appId'               => 'AppId',
        'appName'             => 'AppName',
        'baseAppId'           => 'BaseAppId',
        'cpu'                 => 'Cpu',
        'instances'           => 'Instances',
        'mem'                 => 'Mem',
        'mseEnabled'          => 'MseEnabled',
        'mseNamespaceId'      => 'MseNamespaceId',
        'namespaceId'         => 'NamespaceId',
        'programmingLanguage' => 'ProgrammingLanguage',
        'runningInstances'    => 'RunningInstances',
        'scaleRuleEnabled'    => 'ScaleRuleEnabled',
        'scaleRuleType'       => 'ScaleRuleType',
    ];

    public function validate()
    {
    }

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

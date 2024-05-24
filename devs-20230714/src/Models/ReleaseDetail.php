<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class ReleaseDetail extends Model
{
    /**
     * @example Running
     *
     * @var string
     */
    public $bizStatus;

    /**
     * @example dev
     *
     * @var string
     */
    public $envName;

    /**
     * @example 2021-11-19T09:34:38Z
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @var GitEventSnapshot
     */
    public $gitEventSnapshot;

    /**
     * @var TaskExecError
     */
    public $latestTaskExecError;

    /**
     * @example Triggered manually.
     *
     * @var string
     */
    public $message;

    /**
     * @example p-1704952599751-wUOczb
     *
     * @var string
     */
    public $pipelineName;

    /**
     * @example p-codeup-1714271977972-pa4w
     *
     * @var string
     */
    public $pipelineTriggerEventName;

    /**
     * @example {"framework":{"region":"cn-hangzhou","service":{"serviceName":"web-framework","description":"Serverless Devs Web Framework Service","role":"","logConfig":{"project":"","logstore":"","enableRequestMetrics":false,"enableInstanceMetrics":false,"logBeginRule":"None"},"serviceId":"4c9d0e79-16b8-4951-a6b8-169d2037d217","createdTime":"2021-12-07T09:24:08Z","lastModifiedTime":"2022-04-09T09:16:51Z","vpcConfig":{"vpcId":"","vSwitchIds":[],"securityGroupId":"","role":""},"internetAccess":true,"nasConfig":{"userId":-1,"groupId":-1,"mountPoints":[]},"tracingConfig":{},"name":"web-framework"},"function":{"functionId":"e81904f0-24d0-45df-bb53-06da64d01395","functionName":"todolist","description":"Serverless Devs Web Framework Function","runtime":"nodejs12","handler":"index.handler","timeout":60,"initializer":"","initializationTimeout":3,"codeSize":1757093,"codeChecksum":"7185648203525194222","memorySize":256,"environmentVariables":{},"createdTime":"2022-03-15T15:36:22Z","lastModifiedTime":"2022-04-09T09:16:50Z","instanceConcurrency":1,"instanceType":"e1","instanceLifecycleConfig":{"preFreeze":{"handler":"","timeout":3},"preStop":{"handler":"","timeout":3}},"name":"todolist"},"triggers":[{"triggerName":"httpTrigger","description":"","triggerId":"7f2373ce-df1a-4013-b4e5-899989d9b27e","triggerType":"http","triggerConfig":{"methods":["GET","POST"],"authType":"anonymous"},"createdTime":"2022-03-15T15:36:23Z","lastModifiedTime":"2022-04-09T09:16:51Z","name":"httpTrigger"}],"customDomains":[{"domainName":"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net","accountId":"1835799444022432","protocol":"HTTP","certConfig":{},"tlsConfig":{},"apiVersion":"2016-08-15","routeConfig":{"routes":[{"path":"/*","serviceName":"web-framework","functionName":"todolist","methods":["GET","POST"]}]},"createdTime":"2022-03-15T15:36:28Z","lastModifiedTime":"2022-04-09T09:17:00Z"}]}}
     *
     * @var mixed[]
     */
    public $releaseOutputs;

    /**
     * @var RepositorySpec
     */
    public $repositorySnapshot;

    /**
     * @var TemplateConfig
     */
    public $templateConfigSnapshot;
    protected $_name = [
        'bizStatus'                => 'bizStatus',
        'envName'                  => 'envName',
        'finishedTime'             => 'finishedTime',
        'gitEventSnapshot'         => 'gitEventSnapshot',
        'latestTaskExecError'      => 'latestTaskExecError',
        'message'                  => 'message',
        'pipelineName'             => 'pipelineName',
        'pipelineTriggerEventName' => 'pipelineTriggerEventName',
        'releaseOutputs'           => 'releaseOutputs',
        'repositorySnapshot'       => 'repositorySnapshot',
        'templateConfigSnapshot'   => 'templateConfigSnapshot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizStatus) {
            $res['bizStatus'] = $this->bizStatus;
        }
        if (null !== $this->envName) {
            $res['envName'] = $this->envName;
        }
        if (null !== $this->finishedTime) {
            $res['finishedTime'] = $this->finishedTime;
        }
        if (null !== $this->gitEventSnapshot) {
            $res['gitEventSnapshot'] = null !== $this->gitEventSnapshot ? $this->gitEventSnapshot->toMap() : null;
        }
        if (null !== $this->latestTaskExecError) {
            $res['latestTaskExecError'] = null !== $this->latestTaskExecError ? $this->latestTaskExecError->toMap() : null;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
        }
        if (null !== $this->pipelineTriggerEventName) {
            $res['pipelineTriggerEventName'] = $this->pipelineTriggerEventName;
        }
        if (null !== $this->releaseOutputs) {
            $res['releaseOutputs'] = $this->releaseOutputs;
        }
        if (null !== $this->repositorySnapshot) {
            $res['repositorySnapshot'] = null !== $this->repositorySnapshot ? $this->repositorySnapshot->toMap() : null;
        }
        if (null !== $this->templateConfigSnapshot) {
            $res['templateConfigSnapshot'] = null !== $this->templateConfigSnapshot ? $this->templateConfigSnapshot->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bizStatus'])) {
            $model->bizStatus = $map['bizStatus'];
        }
        if (isset($map['envName'])) {
            $model->envName = $map['envName'];
        }
        if (isset($map['finishedTime'])) {
            $model->finishedTime = $map['finishedTime'];
        }
        if (isset($map['gitEventSnapshot'])) {
            $model->gitEventSnapshot = GitEventSnapshot::fromMap($map['gitEventSnapshot']);
        }
        if (isset($map['latestTaskExecError'])) {
            $model->latestTaskExecError = TaskExecError::fromMap($map['latestTaskExecError']);
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }
        if (isset($map['pipelineTriggerEventName'])) {
            $model->pipelineTriggerEventName = $map['pipelineTriggerEventName'];
        }
        if (isset($map['releaseOutputs'])) {
            $model->releaseOutputs = $map['releaseOutputs'];
        }
        if (isset($map['repositorySnapshot'])) {
            $model->repositorySnapshot = RepositorySpec::fromMap($map['repositorySnapshot']);
        }
        if (isset($map['templateConfigSnapshot'])) {
            $model->templateConfigSnapshot = TemplateConfig::fromMap($map['templateConfigSnapshot']);
        }

        return $model;
    }
}

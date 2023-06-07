<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class CreateAppGroupRequest extends Model
{
    /**
     * @description The AppKey for the application.
     *
     * @example adcExHZviLcl****
     *
     * @var string
     */
    public $appKey;

    /**
     * @description The name of the application.
     *
     * @example DocTest
     *
     * @var string
     */
    public $appName;

    /**
     * @description 应用类型。
     *
     * - 2、k8s应用。
     * @example 1
     *
     * @var int
     */
    public $appType;

    /**
     * @description The description of the application.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description 是否开启日志。
     *
     * - false：关闭
     * @example true
     *
     * @var bool
     */
    public $enableLog;

    /**
     * @description The application ID. You can obtain the application ID on the Application Management page in the SchedulerX console.
     *
     * @example TestSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The maximum number of jobs.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxJobs;

    /**
     * @description The configuration of the alert. The value is a JSON string. For more information about this parameter, see **Additional information about request parameters**.
     *
     * @example {"sendChannel":"sms,ding"}
     *
     * @var string
     */
    public $monitorConfigJson;

    /**
     * @description The configuration of alert contacts. The value is a JSON string.
     *
     * @example \[{"userName":"Tom","userPhone":"89756\*\*\*\*\*\*"},{"userName":"Bob","ding":"http://www.example.com"}]
     *
     * @var string
     */
    public $monitorContactsJson;

    /**
     * @description The namespace ID. You can obtain the namespace ID on the Namespace page in the SchedulerX console.
     *
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the namespace.
     *
     * @example Test
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @description This parameter is not supported. You do not need to specify this parameter.
     *
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to schedule a busy worker.
     *
     * @example false
     *
     * @var bool
     */
    public $scheduleBusyWorkers;
    protected $_name = [
        'appKey'              => 'AppKey',
        'appName'             => 'AppName',
        'appType'             => 'AppType',
        'description'         => 'Description',
        'enableLog'           => 'EnableLog',
        'groupId'             => 'GroupId',
        'maxJobs'             => 'MaxJobs',
        'monitorConfigJson'   => 'MonitorConfigJson',
        'monitorContactsJson' => 'MonitorContactsJson',
        'namespace'           => 'Namespace',
        'namespaceName'       => 'NamespaceName',
        'namespaceSource'     => 'NamespaceSource',
        'regionId'            => 'RegionId',
        'scheduleBusyWorkers' => 'ScheduleBusyWorkers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableLog) {
            $res['EnableLog'] = $this->enableLog;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->maxJobs) {
            $res['MaxJobs'] = $this->maxJobs;
        }
        if (null !== $this->monitorConfigJson) {
            $res['MonitorConfigJson'] = $this->monitorConfigJson;
        }
        if (null !== $this->monitorContactsJson) {
            $res['MonitorContactsJson'] = $this->monitorContactsJson;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->namespaceSource) {
            $res['NamespaceSource'] = $this->namespaceSource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scheduleBusyWorkers) {
            $res['ScheduleBusyWorkers'] = $this->scheduleBusyWorkers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableLog'])) {
            $model->enableLog = $map['EnableLog'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MaxJobs'])) {
            $model->maxJobs = $map['MaxJobs'];
        }
        if (isset($map['MonitorConfigJson'])) {
            $model->monitorConfigJson = $map['MonitorConfigJson'];
        }
        if (isset($map['MonitorContactsJson'])) {
            $model->monitorContactsJson = $map['MonitorContactsJson'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['NamespaceSource'])) {
            $model->namespaceSource = $map['NamespaceSource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScheduleBusyWorkers'])) {
            $model->scheduleBusyWorkers = $map['ScheduleBusyWorkers'];
        }

        return $model;
    }
}

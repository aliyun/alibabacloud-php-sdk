<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Dara\Model;

class CreateAppGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $appType;

    /**
     * @var int
     */
    public $appVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableLog;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $maxJobs;

    /**
     * @var string
     */
    public $monitorConfigJson;

    /**
     * @var string
     */
    public $monitorContactsJson;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var string
     */
    public $namespaceSource;

    /**
     * @var string
     */
    public $notificationPolicyName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $scheduleBusyWorkers;
    protected $_name = [
        'appKey' => 'AppKey',
        'appName' => 'AppName',
        'appType' => 'AppType',
        'appVersion' => 'AppVersion',
        'description' => 'Description',
        'enableLog' => 'EnableLog',
        'groupId' => 'GroupId',
        'maxJobs' => 'MaxJobs',
        'monitorConfigJson' => 'MonitorConfigJson',
        'monitorContactsJson' => 'MonitorContactsJson',
        'namespace' => 'Namespace',
        'namespaceName' => 'NamespaceName',
        'namespaceSource' => 'NamespaceSource',
        'notificationPolicyName' => 'NotificationPolicyName',
        'regionId' => 'RegionId',
        'scheduleBusyWorkers' => 'ScheduleBusyWorkers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
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

        if (null !== $this->notificationPolicyName) {
            $res['NotificationPolicyName'] = $this->notificationPolicyName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scheduleBusyWorkers) {
            $res['ScheduleBusyWorkers'] = $this->scheduleBusyWorkers;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
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

        if (isset($map['NotificationPolicyName'])) {
            $model->notificationPolicyName = $map['NotificationPolicyName'];
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

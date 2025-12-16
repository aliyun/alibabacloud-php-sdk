<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetAppGroupResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
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
     * @var string
     */
    public $appVersion;

    /**
     * @var int
     */
    public $curJobs;

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
    public $notificationPolicyName;
    protected $_name = [
        'appKey' => 'AppKey',
        'appName' => 'AppName',
        'appVersion' => 'AppVersion',
        'curJobs' => 'CurJobs',
        'description' => 'Description',
        'enableLog' => 'EnableLog',
        'groupId' => 'GroupId',
        'maxJobs' => 'MaxJobs',
        'monitorConfigJson' => 'MonitorConfigJson',
        'monitorContactsJson' => 'MonitorContactsJson',
        'namespace' => 'Namespace',
        'notificationPolicyName' => 'NotificationPolicyName',
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

        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }

        if (null !== $this->curJobs) {
            $res['CurJobs'] = $this->curJobs;
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

        if (null !== $this->notificationPolicyName) {
            $res['NotificationPolicyName'] = $this->notificationPolicyName;
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

        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }

        if (isset($map['CurJobs'])) {
            $model->curJobs = $map['CurJobs'];
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

        if (isset($map['NotificationPolicyName'])) {
            $model->notificationPolicyName = $map['NotificationPolicyName'];
        }

        return $model;
    }
}

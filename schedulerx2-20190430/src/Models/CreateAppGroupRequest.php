<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class CreateAppGroupRequest extends Model
{
    /**
     * @var string
     */
    public $alarmJson;

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
    public $description;

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
    public $regionId;
    protected $_name = [
        'alarmJson'           => 'AlarmJson',
        'appKey'              => 'AppKey',
        'appName'             => 'AppName',
        'description'         => 'Description',
        'groupId'             => 'GroupId',
        'maxJobs'             => 'MaxJobs',
        'monitorConfigJson'   => 'MonitorConfigJson',
        'monitorContactsJson' => 'MonitorContactsJson',
        'namespace'           => 'Namespace',
        'namespaceName'       => 'NamespaceName',
        'namespaceSource'     => 'NamespaceSource',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmJson) {
            $res['AlarmJson'] = $this->alarmJson;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['AlarmJson'])) {
            $model->alarmJson = $map['AlarmJson'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

        return $model;
    }
}

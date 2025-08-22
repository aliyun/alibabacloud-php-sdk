<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusIntegrationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $canDelete;

    /**
     * @var bool
     */
    public $canEditor;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @var string
     */
    public $describe;

    /**
     * @var string
     */
    public $exporterType;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $integrationType;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var bool
     */
    public $needUpgrade;

    /**
     * @var string
     */
    public $param;

    /**
     * @var string
     */
    public $podName;

    /**
     * @var bool
     */
    public $showDescribe;

    /**
     * @var bool
     */
    public $showLog;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'canDelete' => 'CanDelete',
        'canEditor' => 'CanEditor',
        'clusterId' => 'ClusterId',
        'containerName' => 'ContainerName',
        'describe' => 'Describe',
        'exporterType' => 'ExporterType',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'integrationType' => 'IntegrationType',
        'namespace' => 'Namespace',
        'needUpgrade' => 'NeedUpgrade',
        'param' => 'Param',
        'podName' => 'PodName',
        'showDescribe' => 'ShowDescribe',
        'showLog' => 'ShowLog',
        'status' => 'Status',
        'target' => 'Target',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canDelete) {
            $res['CanDelete'] = $this->canDelete;
        }

        if (null !== $this->canEditor) {
            $res['CanEditor'] = $this->canEditor;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }

        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }

        if (null !== $this->exporterType) {
            $res['ExporterType'] = $this->exporterType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->integrationType) {
            $res['IntegrationType'] = $this->integrationType;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->needUpgrade) {
            $res['NeedUpgrade'] = $this->needUpgrade;
        }

        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }

        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        if (null !== $this->showDescribe) {
            $res['ShowDescribe'] = $this->showDescribe;
        }

        if (null !== $this->showLog) {
            $res['ShowLog'] = $this->showLog;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['CanDelete'])) {
            $model->canDelete = $map['CanDelete'];
        }

        if (isset($map['CanEditor'])) {
            $model->canEditor = $map['CanEditor'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }

        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }

        if (isset($map['ExporterType'])) {
            $model->exporterType = $map['ExporterType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IntegrationType'])) {
            $model->integrationType = $map['IntegrationType'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NeedUpgrade'])) {
            $model->needUpgrade = $map['NeedUpgrade'];
        }

        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }

        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        if (isset($map['ShowDescribe'])) {
            $model->showDescribe = $map['ShowDescribe'];
        }

        if (isset($map['ShowLog'])) {
            $model->showLog = $map['ShowLog'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

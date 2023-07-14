<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusIntegrationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the exporter can be deleted.
     *
     * @example true
     *
     * @var bool
     */
    public $canDelete;

    /**
     * @description Indicates whether the exporter can be edited.
     *
     * @example true
     *
     * @var bool
     */
    public $canEditor;

    /**
     * @description The ID of the Prometheus instance.
     *
     * @example c589a1b8db05c4561aefbb898ca8fb1cf
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the container.
     *
     * @example container-1
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The description of the exporter.
     *
     * @example "{}"
     *
     * @var string
     */
    public $describe;

    /**
     * @description The type of the exporter.
     *
     * @example kafka-exporter
     *
     * @var string
     */
    public $exporterType;

    /**
     * @description The exporter ID.
     *
     * @example 29374
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The name of the exporter.
     *
     * @example inet
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The integration type.
     *
     * @example kafka, mysql, redis, snmp, emr, nubela, and tidb
     *
     * @var string
     */
    public $integrationType;

    /**
     * @description The namespace.
     *
     * @example arms-prom
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Indicates whether an upgrade is required.
     *
     * @example true
     *
     * @var bool
     */
    public $needUpgrade;

    /**
     * @description The configurations of the exporter. The value is a JSON string.
     *
     * @example {
     * }
     * @var string
     */
    public $param;

    /**
     * @description The pod name of the exporter.
     *
     * @example kafka-exporter-1
     *
     * @var string
     */
    public $podName;

    /**
     * @description Indicates whether the description is displayed.
     *
     * @example true
     *
     * @var bool
     */
    public $showDescribe;

    /**
     * @description Indicates whether the exporter logs are displayed.
     *
     * @example true
     *
     * @var bool
     */
    public $showLog;

    /**
     * @description The status of the exporter.
     *
     * @example installed
     *
     * @var string
     */
    public $status;

    /**
     * @description The monitored IP address.
     *
     * @example 121.40.62.240:3342
     *
     * @var string
     */
    public $target;

    /**
     * @description The version number.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'canDelete'       => 'CanDelete',
        'canEditor'       => 'CanEditor',
        'clusterId'       => 'ClusterId',
        'containerName'   => 'ContainerName',
        'describe'        => 'Describe',
        'exporterType'    => 'ExporterType',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'integrationType' => 'IntegrationType',
        'namespace'       => 'Namespace',
        'needUpgrade'     => 'NeedUpgrade',
        'param'           => 'Param',
        'podName'         => 'PodName',
        'showDescribe'    => 'ShowDescribe',
        'showLog'         => 'ShowLog',
        'status'          => 'Status',
        'target'          => 'Target',
        'version'         => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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

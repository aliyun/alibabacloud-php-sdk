<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusIntegrationResponseBody;

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
     * @description Indicates whether the exporter can be modified.
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
     * @description The container name.
     *
     * @example kafka-exporter-1
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
     * @example tidb-exporter
     *
     * @var string
     */
    public $exporterType;

    /**
     * @description The ID of the exporter.
     *
     * @example 2893
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The name of the exporter.
     *
     * @example lpd-skyeye
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The integration type. Valid values: kafka, mysql, redis, snmp, emr, nubela, and tidb.
     *
     * @example tidb
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
     * @example True
     *
     * @var bool
     */
    public $needUpgrade;

    /**
     * @description The parameters of the exporter. Format: JSON string.
     *
     * @example {
     * }
     * @var string
     */
    public $param;

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
     * @var string
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
     * @example 127.0.0.1:3422
     *
     * @var string
     */
    public $target;

    /**
     * @description The version information.
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

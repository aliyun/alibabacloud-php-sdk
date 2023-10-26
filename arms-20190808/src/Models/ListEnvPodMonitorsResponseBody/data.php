<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvPodMonitorsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvPodMonitorsResponseBody\data\endpoints;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description addon name.
     *
     * @example mysql
     *
     * @var string
     */
    public $addonName;

    /**
     * @description addon release name.
     *
     * @example mysql1
     *
     * @var string
     */
    public $addonReleaseName;

    /**
     * @description addon version.
     *
     * @example 1.0.5
     *
     * @var string
     */
    public $addonVersion;

    /**
     * @description yaml configuration string.
     *
     * @example `
     * `
     * @var string
     */
    public $configYaml;

    /**
     * @description Creation time (timestamp).
     *
     * @example 2011-01-02T11:34:22Z
     *
     * @var string
     */
    public $creationTimestamp;

    /**
     * @description List of endpoints for podmonitor.
     *
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @description Environment ID.
     *
     * @example env-xxxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The namespace.
     *
     * @example arms-prom
     *
     * @var string
     */
    public $namespace;

    /**
     * @description PodMonitor name.
     *
     * @example pm1
     *
     * @var string
     */
    public $podMonitorName;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description state.
     *
     * @example run
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'addonName'         => 'AddonName',
        'addonReleaseName'  => 'AddonReleaseName',
        'addonVersion'      => 'AddonVersion',
        'configYaml'        => 'ConfigYaml',
        'creationTimestamp' => 'CreationTimestamp',
        'endpoints'         => 'Endpoints',
        'environmentId'     => 'EnvironmentId',
        'namespace'         => 'Namespace',
        'podMonitorName'    => 'PodMonitorName',
        'regionId'          => 'RegionId',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['AddonName'] = $this->addonName;
        }
        if (null !== $this->addonReleaseName) {
            $res['AddonReleaseName'] = $this->addonReleaseName;
        }
        if (null !== $this->addonVersion) {
            $res['AddonVersion'] = $this->addonVersion;
        }
        if (null !== $this->configYaml) {
            $res['ConfigYaml'] = $this->configYaml;
        }
        if (null !== $this->creationTimestamp) {
            $res['CreationTimestamp'] = $this->creationTimestamp;
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = [];
            if (null !== $this->endpoints && \is_array($this->endpoints)) {
                $n = 0;
                foreach ($this->endpoints as $item) {
                    $res['Endpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->podMonitorName) {
            $res['PodMonitorName'] = $this->podMonitorName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AddonName'])) {
            $model->addonName = $map['AddonName'];
        }
        if (isset($map['AddonReleaseName'])) {
            $model->addonReleaseName = $map['AddonReleaseName'];
        }
        if (isset($map['AddonVersion'])) {
            $model->addonVersion = $map['AddonVersion'];
        }
        if (isset($map['ConfigYaml'])) {
            $model->configYaml = $map['ConfigYaml'];
        }
        if (isset($map['CreationTimestamp'])) {
            $model->creationTimestamp = $map['CreationTimestamp'];
        }
        if (isset($map['Endpoints'])) {
            if (!empty($map['Endpoints'])) {
                $model->endpoints = [];
                $n                = 0;
                foreach ($map['Endpoints'] as $item) {
                    $model->endpoints[$n++] = null !== $item ? endpoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PodMonitorName'])) {
            $model->podMonitorName = $map['PodMonitorName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

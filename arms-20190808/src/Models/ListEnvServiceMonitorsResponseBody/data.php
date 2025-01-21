<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvServiceMonitorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvServiceMonitorsResponseBody\data\endpoints;

class data extends Model
{
    /**
     * @var string
     */
    public $addonName;
    /**
     * @var string
     */
    public $addonReleaseName;
    /**
     * @var string
     */
    public $addonVersion;
    /**
     * @var string
     */
    public $configYaml;
    /**
     * @var string
     */
    public $creationTimestamp;
    /**
     * @var endpoints[]
     */
    public $endpoints;
    /**
     * @var string
     */
    public $environmentId;
    /**
     * @var int
     */
    public $matchedServiceCount;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $serviceMonitorName;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'addonName'           => 'AddonName',
        'addonReleaseName'    => 'AddonReleaseName',
        'addonVersion'        => 'AddonVersion',
        'configYaml'          => 'ConfigYaml',
        'creationTimestamp'   => 'CreationTimestamp',
        'endpoints'           => 'Endpoints',
        'environmentId'       => 'EnvironmentId',
        'matchedServiceCount' => 'MatchedServiceCount',
        'namespace'           => 'Namespace',
        'regionId'            => 'RegionId',
        'serviceMonitorName'  => 'ServiceMonitorName',
        'status'              => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->endpoints)) {
                $res['Endpoints'] = [];
                $n1               = 0;
                foreach ($this->endpoints as $item1) {
                    $res['Endpoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }

        if (null !== $this->matchedServiceCount) {
            $res['MatchedServiceCount'] = $this->matchedServiceCount;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceMonitorName) {
            $res['ServiceMonitorName'] = $this->serviceMonitorName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
                $n1               = 0;
                foreach ($map['Endpoints'] as $item1) {
                    $model->endpoints[$n1++] = endpoints::fromMap($item1);
                }
            }
        }

        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }

        if (isset($map['MatchedServiceCount'])) {
            $model->matchedServiceCount = $map['MatchedServiceCount'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceMonitorName'])) {
            $model->serviceMonitorName = $map['ServiceMonitorName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

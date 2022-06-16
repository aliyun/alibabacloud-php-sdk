<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeServiceDetailResponseBody;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeServiceDetailResponseBody\result\portMappings;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $clusterIP;

    /**
     * @var int
     */
    public $envId;

    /**
     * @var bool
     */
    public $headless;

    /**
     * @var string
     */
    public $k8sServiceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var portMappings[]
     */
    public $portMappings;

    /**
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceType;
    protected $_name = [
        'appId'        => 'AppId',
        'clusterIP'    => 'ClusterIP',
        'envId'        => 'EnvId',
        'headless'     => 'Headless',
        'k8sServiceId' => 'K8sServiceId',
        'name'         => 'Name',
        'portMappings' => 'PortMappings',
        'serviceId'    => 'ServiceId',
        'serviceType'  => 'ServiceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clusterIP) {
            $res['ClusterIP'] = $this->clusterIP;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->headless) {
            $res['Headless'] = $this->headless;
        }
        if (null !== $this->k8sServiceId) {
            $res['K8sServiceId'] = $this->k8sServiceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->portMappings) {
            $res['PortMappings'] = [];
            if (null !== $this->portMappings && \is_array($this->portMappings)) {
                $n = 0;
                foreach ($this->portMappings as $item) {
                    $res['PortMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClusterIP'])) {
            $model->clusterIP = $map['ClusterIP'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['Headless'])) {
            $model->headless = $map['Headless'];
        }
        if (isset($map['K8sServiceId'])) {
            $model->k8sServiceId = $map['K8sServiceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PortMappings'])) {
            if (!empty($map['PortMappings'])) {
                $model->portMappings = [];
                $n                   = 0;
                foreach ($map['PortMappings'] as $item) {
                    $model->portMappings[$n++] = null !== $item ? portMappings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        return $model;
    }
}

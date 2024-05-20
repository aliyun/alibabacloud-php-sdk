<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeAppServiceDetailResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeAppServiceDetailResponseBody\data\methods;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the Dubbo application.
     *
     * @example service-consumer
     *
     * @var string
     */
    public $dubboApplicationName;

    /**
     * @description The name of the application.
     *
     * @example cn-zhangjiakou-micro-service-******
     *
     * @var string
     */
    public $edasAppName;

    /**
     * @description The group to which the service belongs. You can create a custom group.
     *
     * @example springCloud
     *
     * @var string
     */
    public $group;

    /**
     * @description The metadata. Example: `{side: "provider", port: "18081", preserved: {register: {source: "SPRING_CLOUD"}},…}`.
     *
     * @example {side: "provider", port: "18081", preserved: {register: {source: "SPRING_CLOUD"}},…}
     *
     * @var mixed[]
     */
    public $metadata;

    /**
     * @description The methods.
     *
     * @var methods[]
     */
    public $methods;

    /**
     * @description The name of the service.
     *
     * @example service-provider
     *
     * @var string
     */
    public $serviceName;

    /**
     * @var int[]
     */
    public $servicePorts;

    /**
     * @var string
     */
    public $serviceProtocol;

    /**
     * @var string[]
     */
    public $serviceTags;

    /**
     * @description The type of the service. Valid values:
     *
     *   **dubbo**
     *   **springCloud**
     *
     * @example springCloud
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The name of the Spring Cloud application.
     *
     * @example service-provider
     *
     * @var string
     */
    public $springApplicationName;

    /**
     * @description The version of the service. You can create a custom version.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'dubboApplicationName'  => 'DubboApplicationName',
        'edasAppName'           => 'EdasAppName',
        'group'                 => 'Group',
        'metadata'              => 'Metadata',
        'methods'               => 'Methods',
        'serviceName'           => 'ServiceName',
        'servicePorts'          => 'ServicePorts',
        'serviceProtocol'       => 'ServiceProtocol',
        'serviceTags'           => 'ServiceTags',
        'serviceType'           => 'ServiceType',
        'springApplicationName' => 'SpringApplicationName',
        'version'               => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dubboApplicationName) {
            $res['DubboApplicationName'] = $this->dubboApplicationName;
        }
        if (null !== $this->edasAppName) {
            $res['EdasAppName'] = $this->edasAppName;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->methods) {
            $res['Methods'] = [];
            if (null !== $this->methods && \is_array($this->methods)) {
                $n = 0;
                foreach ($this->methods as $item) {
                    $res['Methods'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->servicePorts) {
            $res['ServicePorts'] = $this->servicePorts;
        }
        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }
        if (null !== $this->serviceTags) {
            $res['ServiceTags'] = $this->serviceTags;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->springApplicationName) {
            $res['SpringApplicationName'] = $this->springApplicationName;
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
        if (isset($map['DubboApplicationName'])) {
            $model->dubboApplicationName = $map['DubboApplicationName'];
        }
        if (isset($map['EdasAppName'])) {
            $model->edasAppName = $map['EdasAppName'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['Methods'])) {
            if (!empty($map['Methods'])) {
                $model->methods = [];
                $n              = 0;
                foreach ($map['Methods'] as $item) {
                    $model->methods[$n++] = null !== $item ? methods::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServicePorts'])) {
            if (!empty($map['ServicePorts'])) {
                $model->servicePorts = $map['ServicePorts'];
            }
        }
        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }
        if (isset($map['ServiceTags'])) {
            if (!empty($map['ServiceTags'])) {
                $model->serviceTags = $map['ServiceTags'];
            }
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['SpringApplicationName'])) {
            $model->springApplicationName = $map['SpringApplicationName'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

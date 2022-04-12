<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceDetailResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceDetailResponseBody\data\methods;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dubboApplicationName;

    /**
     * @var string
     */
    public $edasAppName;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $metadata;

    /**
     * @var methods[]
     */
    public $methods;

    /**
     * @var string
     */
    public $registryType;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $springApplicationName;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'dubboApplicationName'  => 'DubboApplicationName',
        'edasAppName'           => 'EdasAppName',
        'group'                 => 'Group',
        'metadata'              => 'Metadata',
        'methods'               => 'Methods',
        'registryType'          => 'RegistryType',
        'serviceName'           => 'ServiceName',
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
        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
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

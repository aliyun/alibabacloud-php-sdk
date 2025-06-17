<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeAppServiceDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeAppServiceDetailResponseBody\data\methods;

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
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var methods[]
     */
    public $methods;

    /**
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
        'dubboApplicationName' => 'DubboApplicationName',
        'edasAppName' => 'EdasAppName',
        'group' => 'Group',
        'metadata' => 'Metadata',
        'methods' => 'Methods',
        'serviceName' => 'ServiceName',
        'servicePorts' => 'ServicePorts',
        'serviceProtocol' => 'ServiceProtocol',
        'serviceTags' => 'ServiceTags',
        'serviceType' => 'ServiceType',
        'springApplicationName' => 'SpringApplicationName',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->methods)) {
            Model::validateArray($this->methods);
        }
        if (\is_array($this->servicePorts)) {
            Model::validateArray($this->servicePorts);
        }
        if (\is_array($this->serviceTags)) {
            Model::validateArray($this->serviceTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->methods) {
            if (\is_array($this->methods)) {
                $res['Methods'] = [];
                $n1 = 0;
                foreach ($this->methods as $item1) {
                    $res['Methods'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->servicePorts) {
            if (\is_array($this->servicePorts)) {
                $res['ServicePorts'] = [];
                $n1 = 0;
                foreach ($this->servicePorts as $item1) {
                    $res['ServicePorts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }

        if (null !== $this->serviceTags) {
            if (\is_array($this->serviceTags)) {
                $res['ServiceTags'] = [];
                $n1 = 0;
                foreach ($this->serviceTags as $item1) {
                    $res['ServiceTags'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['Methods'])) {
            if (!empty($map['Methods'])) {
                $model->methods = [];
                $n1 = 0;
                foreach ($map['Methods'] as $item1) {
                    $model->methods[$n1] = methods::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['ServicePorts'])) {
            if (!empty($map['ServicePorts'])) {
                $model->servicePorts = [];
                $n1 = 0;
                foreach ($map['ServicePorts'] as $item1) {
                    $model->servicePorts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }

        if (isset($map['ServiceTags'])) {
            if (!empty($map['ServiceTags'])) {
                $model->serviceTags = [];
                $n1 = 0;
                foreach ($map['ServiceTags'] as $item1) {
                    $model->serviceTags[$n1] = $item1;
                    ++$n1;
                }
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

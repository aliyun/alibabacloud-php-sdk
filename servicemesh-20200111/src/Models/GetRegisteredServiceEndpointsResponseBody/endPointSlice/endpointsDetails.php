<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponseBody\endPointSlice;

use AlibabaCloud\Dara\Model;

class endpointsDetails extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $podName;

    /**
     * @var int[]
     */
    public $ports;

    /**
     * @var string
     */
    public $region;

    /**
     * @var bool
     */
    public $sidecarInjected;
    protected $_name = [
        'address' => 'Address',
        'hostname' => 'Hostname',
        'podName' => 'PodName',
        'ports' => 'Ports',
        'region' => 'Region',
        'sidecarInjected' => 'SidecarInjected',
    ];

    public function validate()
    {
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['Ports'] = [];
                $n1 = 0;
                foreach ($this->ports as $item1) {
                    $res['Ports'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->sidecarInjected) {
            $res['SidecarInjected'] = $this->sidecarInjected;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = [];
                $n1 = 0;
                foreach ($map['Ports'] as $item1) {
                    $model->ports[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SidecarInjected'])) {
            $model->sidecarInjected = $map['SidecarInjected'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponseBody\endPointSlice;

use AlibabaCloud\Tea\Model;

class endpointsDetails extends Model
{
    /**
     * @description The port of the registered service.
     *
     * @example 127.2.**.**
     *
     * @var string
     */
    public $address;

    /**
     * @description The ID of the region in which the registered service resides.
     *
     * @example www.demo.com
     *
     * @var string
     */
    public $hostname;

    /**
     * @description The IP address of the registered service.
     *
     * @example provider-v1-8c86b6898-h***
     *
     * @var string
     */
    public $podName;

    /**
     * @description The host name of the registered service.
     *
     * @var int[]
     */
    public $ports;

    /**
     * @description Indicates whether sidecar proxies are injected. Valid values:
     *
     *   `true`: yes
     *   `false`: no
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the request.
     *
     * @example false
     *
     * @var bool
     */
    public $sidecarInjected;
    protected $_name = [
        'address'         => 'Address',
        'hostname'        => 'Hostname',
        'podName'         => 'PodName',
        'ports'           => 'Ports',
        'region'          => 'Region',
        'sidecarInjected' => 'SidecarInjected',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Ports'] = $this->ports;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->sidecarInjected) {
            $res['SidecarInjected'] = $this->sidecarInjected;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointsDetails
     */
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
                $model->ports = $map['Ports'];
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

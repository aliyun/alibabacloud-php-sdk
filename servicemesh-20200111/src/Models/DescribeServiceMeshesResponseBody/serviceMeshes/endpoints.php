<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description The endpoint that is used to access the API server from the internal network.
     *
     * @example https://192.168.xx.xx:6443
     *
     * @var string
     */
    public $intranetApiServerEndpoint;

    /**
     * @description The endpoint that is used to access Istio Pilot from the internal network.
     *
     * @example 192.168.xx.xx:15011
     *
     * @var string
     */
    public $intranetPilotEndpoint;

    /**
     * @description The endpoint that is used to expose the API server to the Internet.
     *
     * @example https://123.56.xx.xx:6443
     *
     * @var string
     */
    public $publicApiServerEndpoint;

    /**
     * @description The endpoint that is used to expose Istio Pilot to the Internet.
     *
     * @example 182.92.xx.xx:15011
     *
     * @var string
     */
    public $publicPilotEndpoint;

    /**
     * @description The endpoint of the reverse tunnel.
     *
     * @example ...
     *
     * @var string
     */
    public $reverseTunnelEndpoint;
    protected $_name = [
        'intranetApiServerEndpoint' => 'IntranetApiServerEndpoint',
        'intranetPilotEndpoint'     => 'IntranetPilotEndpoint',
        'publicApiServerEndpoint'   => 'PublicApiServerEndpoint',
        'publicPilotEndpoint'       => 'PublicPilotEndpoint',
        'reverseTunnelEndpoint'     => 'ReverseTunnelEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intranetApiServerEndpoint) {
            $res['IntranetApiServerEndpoint'] = $this->intranetApiServerEndpoint;
        }
        if (null !== $this->intranetPilotEndpoint) {
            $res['IntranetPilotEndpoint'] = $this->intranetPilotEndpoint;
        }
        if (null !== $this->publicApiServerEndpoint) {
            $res['PublicApiServerEndpoint'] = $this->publicApiServerEndpoint;
        }
        if (null !== $this->publicPilotEndpoint) {
            $res['PublicPilotEndpoint'] = $this->publicPilotEndpoint;
        }
        if (null !== $this->reverseTunnelEndpoint) {
            $res['ReverseTunnelEndpoint'] = $this->reverseTunnelEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntranetApiServerEndpoint'])) {
            $model->intranetApiServerEndpoint = $map['IntranetApiServerEndpoint'];
        }
        if (isset($map['IntranetPilotEndpoint'])) {
            $model->intranetPilotEndpoint = $map['IntranetPilotEndpoint'];
        }
        if (isset($map['PublicApiServerEndpoint'])) {
            $model->publicApiServerEndpoint = $map['PublicApiServerEndpoint'];
        }
        if (isset($map['PublicPilotEndpoint'])) {
            $model->publicPilotEndpoint = $map['PublicPilotEndpoint'];
        }
        if (isset($map['ReverseTunnelEndpoint'])) {
            $model->reverseTunnelEndpoint = $map['ReverseTunnelEndpoint'];
        }

        return $model;
    }
}

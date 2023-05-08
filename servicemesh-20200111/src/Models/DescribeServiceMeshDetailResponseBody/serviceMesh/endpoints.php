<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description The endpoint that is used to access the API server from the internal network.
     *
     * @example https://192.168.**.**:6443
     *
     * @var string
     */
    public $intranetApiServerEndpoint;

    /**
     * @description The endpoint that is used to access Istio Pilot from the internal network.
     *
     * @example 192.168.**.**:15011
     *
     * @var string
     */
    public $intranetPilotEndpoint;

    /**
     * @description The endpoint that is used to expose the API server to the Internet.
     *
     * @example https://123.56.**.**:6443
     *
     * @var string
     */
    public $publicApiServerEndpoint;

    /**
     * @description The endpoint that is used to expose Istio Pilot to the Internet.
     *
     * @example 182.92.**.**:15011
     *
     * @var string
     */
    public $publicPilotEndpoint;
    protected $_name = [
        'intranetApiServerEndpoint' => 'IntranetApiServerEndpoint',
        'intranetPilotEndpoint'     => 'IntranetPilotEndpoint',
        'publicApiServerEndpoint'   => 'PublicApiServerEndpoint',
        'publicPilotEndpoint'       => 'PublicPilotEndpoint',
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

        return $model;
    }
}

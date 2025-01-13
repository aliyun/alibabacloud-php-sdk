<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeGroupEndpointsResponseBody;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description The backend access ID, which varies based on the value of the EndpointType parameter.
     *
     *   If you set EndpointType to DefaultGateway, the value of this parameter is default.
     *   If you set EndpointType to PrivateGateway, the value of this parameter is the ID of the dedicated gateway.
     *   If you set EndpointType to Nlb, the value of this parameter is the ID of the NLB instance.
     *   If you set EndpointType to Nacos, the value of this parameter is the ID of the Nacos instance.
     *
     * @example gw-26340kjxjx8l3r****
     *
     * @var string
     */
    public $backendId;

    /**
     * @description The service endpoint type. Valid values:
     *
     *   DefaultGateway: the shared gateway.
     *   PrivateGateway: the dedicated gateway.
     *   Nlb: Associate the service with the Network Load Balancer (NLB) instance.
     *   Nacos: Associate the service with the Nacos instance.
     *
     * @example PrivateGateway
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The public endpoints.
     *
     * @var string[]
     */
    public $internetEndpoints;

    /**
     * @description The internal endpoints.
     *
     * @var string[]
     */
    public $intranetEndpoints;

    /**
     * @description The path type. Valid values:
     *
     *   Group: the path of the service group.
     *   Service: the path of the service.
     *
     * @example Group
     *
     * @var string
     */
    public $pathType;

    /**
     * @description The port number. This parameter takes effect only when you associate the service with an NLB or Nacos instance.
     *
     * @example 9090
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'backendId'         => 'BackendId',
        'endpointType'      => 'EndpointType',
        'internetEndpoints' => 'InternetEndpoints',
        'intranetEndpoints' => 'IntranetEndpoints',
        'pathType'          => 'PathType',
        'port'              => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendId) {
            $res['BackendId'] = $this->backendId;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->internetEndpoints) {
            $res['InternetEndpoints'] = $this->internetEndpoints;
        }
        if (null !== $this->intranetEndpoints) {
            $res['IntranetEndpoints'] = $this->intranetEndpoints;
        }
        if (null !== $this->pathType) {
            $res['PathType'] = $this->pathType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['BackendId'])) {
            $model->backendId = $map['BackendId'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['InternetEndpoints'])) {
            if (!empty($map['InternetEndpoints'])) {
                $model->internetEndpoints = $map['InternetEndpoints'];
            }
        }
        if (isset($map['IntranetEndpoints'])) {
            if (!empty($map['IntranetEndpoints'])) {
                $model->intranetEndpoints = $map['IntranetEndpoints'];
            }
        }
        if (isset($map['PathType'])) {
            $model->pathType = $map['PathType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}

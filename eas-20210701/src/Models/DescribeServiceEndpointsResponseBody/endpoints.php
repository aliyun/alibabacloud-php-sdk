<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceEndpointsResponseBody;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @example nlb-5q4sp7u6oorkha****
     *
     * @var string
     */
    public $backendId;

    /**
     * @example Nlb
     *
     * @var string
     */
    public $endpointType;

    /**
     * @var string[]
     */
    public $internetEndpoints;

    /**
     * @var string[]
     */
    public $intranetEndpoints;

    /**
     * @example Service
     *
     * @var string
     */
    public $pathType;

    /**
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceEndpointsResponseBody;

use AlibabaCloud\Dara\Model;

class endpoints extends Model
{
    /**
     * @var string
     */
    public $backendId;

    /**
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
     * @var string
     */
    public $pathType;

    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'backendId' => 'BackendId',
        'endpointType' => 'EndpointType',
        'internetEndpoints' => 'InternetEndpoints',
        'intranetEndpoints' => 'IntranetEndpoints',
        'pathType' => 'PathType',
        'port' => 'Port',
    ];

    public function validate()
    {
        if (\is_array($this->internetEndpoints)) {
            Model::validateArray($this->internetEndpoints);
        }
        if (\is_array($this->intranetEndpoints)) {
            Model::validateArray($this->intranetEndpoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendId) {
            $res['BackendId'] = $this->backendId;
        }

        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }

        if (null !== $this->internetEndpoints) {
            if (\is_array($this->internetEndpoints)) {
                $res['InternetEndpoints'] = [];
                $n1 = 0;
                foreach ($this->internetEndpoints as $item1) {
                    $res['InternetEndpoints'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->intranetEndpoints) {
            if (\is_array($this->intranetEndpoints)) {
                $res['IntranetEndpoints'] = [];
                $n1 = 0;
                foreach ($this->intranetEndpoints as $item1) {
                    $res['IntranetEndpoints'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pathType) {
            $res['PathType'] = $this->pathType;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['BackendId'])) {
            $model->backendId = $map['BackendId'];
        }

        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        if (isset($map['InternetEndpoints'])) {
            if (!empty($map['InternetEndpoints'])) {
                $model->internetEndpoints = [];
                $n1 = 0;
                foreach ($map['InternetEndpoints'] as $item1) {
                    $model->internetEndpoints[$n1++] = $item1;
                }
            }
        }

        if (isset($map['IntranetEndpoints'])) {
            if (!empty($map['IntranetEndpoints'])) {
                $model->intranetEndpoints = [];
                $n1 = 0;
                foreach ($map['IntranetEndpoints'] as $item1) {
                    $model->intranetEndpoints[$n1++] = $item1;
                }
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

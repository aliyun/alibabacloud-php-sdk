<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @example TCP_INTERNET
     *
     * @var string
     */
    public $endpointType;

    /**
     * @example rmq-cn-c4d2tbk****-vpc.cn-hangzhou.rmq.aliyuncs.com:8080
     *
     * @var string
     */
    public $endpointUrl;

    /**
     * @example 192.168.x.x/24
     *
     * @var string
     */
    public $ipWhitelist;
    protected $_name = [
        'endpointType' => 'endpointType',
        'endpointUrl'  => 'endpointUrl',
        'ipWhitelist'  => 'ipWhitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointType) {
            $res['endpointType'] = $this->endpointType;
        }
        if (null !== $this->endpointUrl) {
            $res['endpointUrl'] = $this->endpointUrl;
        }
        if (null !== $this->ipWhitelist) {
            $res['ipWhitelist'] = $this->ipWhitelist;
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
        if (isset($map['endpointType'])) {
            $model->endpointType = $map['endpointType'];
        }
        if (isset($map['endpointUrl'])) {
            $model->endpointUrl = $map['endpointUrl'];
        }
        if (isset($map['ipWhitelist'])) {
            $model->ipWhitelist = $map['ipWhitelist'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description The type of the endpoint that is used to access the instance.
     *
     * - TCP_INTERNET:public endpoint
     * @example TCP_INTERNET
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The endpoint that is used to access the instance.
     *
     * @example rmq-cn-c4d2tbk****-vpc.cn-hangzhou.rmq.aliyuncs.com:8080
     *
     * @var string
     */
    public $endpointUrl;

    /**
     * @description The whitelist that includes the IP addresses that are allowed to access the ApsaraMQ for RocketMQ broker over the Internet. This parameter can be configured only if you use the public endpoint to access the instance.
     *
     *   If you do not configure an IP address whitelist, all CIDR blocks are allowed to access the ApsaraMQ for RocketMQ broker over the Internet.
     *   If you configure an IP address whitelist, only the IP addresses in the whitelist are allowed to access the ApsaraMQ for RocketMQ broker over the Internet.
     *
     * We recommend that you configure internetInfo.ipWhitelist instead of this parameter.
     * @example 192.168.x.x/24
     *
     * @var string[]
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
            if (!empty($map['ipWhitelist'])) {
                $model->ipWhitelist = $map['ipWhitelist'];
            }
        }

        return $model;
    }
}

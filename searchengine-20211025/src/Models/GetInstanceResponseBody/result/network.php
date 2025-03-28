<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @description The public domain name whitelist.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $allow;

    /**
     * @description The instance endpoint.
     *
     * @example ha-cn-35t3r****.ha.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The public endpoint.
     *
     * @example ha-cn-35t3ni****.public.ha.aliyuncs.com
     *
     * @var string
     */
    public $publicEndpoint;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp11ldcf59q2n****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-wz9axk41d9vff****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'allow' => 'allow',
        'endpoint' => 'endpoint',
        'publicEndpoint' => 'publicEndpoint',
        'vSwitchId' => 'vSwitchId',
        'vpcId' => 'vpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allow) {
            $res['allow'] = $this->allow;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->publicEndpoint) {
            $res['publicEndpoint'] = $this->publicEndpoint;
        }
        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allow'])) {
            $model->allow = $map['allow'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['publicEndpoint'])) {
            $model->publicEndpoint = $map['publicEndpoint'];
        }
        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}

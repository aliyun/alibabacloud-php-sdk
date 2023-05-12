<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateResolverEndpointRequest;

use AlibabaCloud\Tea\Model;

class ipConfig extends Model
{
    /**
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $azId;

    /**
     * @example 172.16.0.0/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @example 172.16.xx.xx
     *
     * @var string
     */
    public $ip;

    /**
     * @example sjqkql
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'azId'      => 'AzId',
        'cidrBlock' => 'CidrBlock',
        'ip'        => 'Ip',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->azId) {
            $res['AzId'] = $this->azId;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AzId'])) {
            $model->azId = $map['AzId'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}

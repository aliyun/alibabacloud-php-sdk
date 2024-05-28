<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\networkInfo\internetInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\networkInfo\vpcInfo;
use AlibabaCloud\Tea\Model;

class networkInfo extends Model
{
    /**
     * @description The Internet-related configurations.
     *
     * This parameter is required.
     * @var internetInfo
     */
    public $internetInfo;

    /**
     * @description The virtual private cloud (VPC)-related configurations.
     *
     * This parameter is required.
     * @var vpcInfo
     */
    public $vpcInfo;
    protected $_name = [
        'internetInfo' => 'internetInfo',
        'vpcInfo'      => 'vpcInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetInfo) {
            $res['internetInfo'] = null !== $this->internetInfo ? $this->internetInfo->toMap() : null;
        }
        if (null !== $this->vpcInfo) {
            $res['vpcInfo'] = null !== $this->vpcInfo ? $this->vpcInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['internetInfo'])) {
            $model->internetInfo = internetInfo::fromMap($map['internetInfo']);
        }
        if (isset($map['vpcInfo'])) {
            $model->vpcInfo = vpcInfo::fromMap($map['vpcInfo']);
        }

        return $model;
    }
}

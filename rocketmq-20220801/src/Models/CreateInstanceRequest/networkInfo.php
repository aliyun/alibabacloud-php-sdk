<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\networkInfo\internetInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\networkInfo\vpcInfo;

class networkInfo extends Model
{
    /**
     * @var internetInfo
     */
    public $internetInfo;
    /**
     * @var vpcInfo
     */
    public $vpcInfo;
    protected $_name = [
        'internetInfo' => 'internetInfo',
        'vpcInfo'      => 'vpcInfo',
    ];

    public function validate()
    {
        if (null !== $this->internetInfo) {
            $this->internetInfo->validate();
        }
        if (null !== $this->vpcInfo) {
            $this->vpcInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internetInfo) {
            $res['internetInfo'] = null !== $this->internetInfo ? $this->internetInfo->toArray($noStream) : $this->internetInfo;
        }

        if (null !== $this->vpcInfo) {
            $res['vpcInfo'] = null !== $this->vpcInfo ? $this->vpcInfo->toArray($noStream) : $this->vpcInfo;
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
        if (isset($map['internetInfo'])) {
            $model->internetInfo = internetInfo::fromMap($map['internetInfo']);
        }

        if (isset($map['vpcInfo'])) {
            $model->vpcInfo = vpcInfo::fromMap($map['vpcInfo']);
        }

        return $model;
    }
}

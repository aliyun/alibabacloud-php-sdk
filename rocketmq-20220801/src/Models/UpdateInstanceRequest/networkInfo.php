<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest\networkInfo\internetInfo;
use AlibabaCloud\Tea\Model;

class networkInfo extends Model
{
    /**
     * @description The information about the Internet over which the instance is accessed. This parameter takes effect only if the Internet access feature is enabled for the instance.
     *
     * @var internetInfo
     */
    public $internetInfo;
    protected $_name = [
        'internetInfo' => 'internetInfo',
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

        return $model;
    }
}

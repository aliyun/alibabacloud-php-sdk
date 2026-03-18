<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class DeleteInnerIpWhitelistGroupRequest extends Model
{
    /**
     * @var string
     */
    public $innerIpWhitelistGroupId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'innerIpWhitelistGroupId' => 'InnerIpWhitelistGroupId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->innerIpWhitelistGroupId) {
            $res['InnerIpWhitelistGroupId'] = $this->innerIpWhitelistGroupId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['InnerIpWhitelistGroupId'])) {
            $model->innerIpWhitelistGroupId = $map['InnerIpWhitelistGroupId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateDomainRequest\filing;
use AlibabaCloud\Tea\Model;

class CreateDomainRequest extends Model
{
    /**
     * @description 域名。最大长度限制255，格式由数字、字母、横线（-）点（.）组成;
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description 备案信息参数。
     *
     * @var filing
     */
    public $filing;

    /**
     * @description IDaaS EIAM实例的ID。
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'domain'     => 'Domain',
        'filing'     => 'Filing',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->filing) {
            $res['Filing'] = null !== $this->filing ? $this->filing->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Filing'])) {
            $model->filing = filing::fromMap($map['Filing']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

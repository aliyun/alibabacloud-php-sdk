<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateDomainProxyTokenRequest extends Model
{
    /**
     * @description 域名ID。
     *
     * @example dm_examplexxxxx
     *
     * @var string
     */
    public $domainId;

    /**
     * @description IDaaS EIAM实例的ID。
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'domainId'   => 'DomainId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDomainProxyTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

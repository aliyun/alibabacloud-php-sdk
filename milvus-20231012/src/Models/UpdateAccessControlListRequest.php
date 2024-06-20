<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccessControlListRequest extends Model
{
    /**
     * @example acl-123xxx
     *
     * @var string
     */
    public $aclId;

    /**
     * @example 192.168.1.0/24,172.16.0.0/16
     *
     * @var string
     */
    public $cidr;

    /**
     * @example c-123xxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'aclId'      => 'AclId',
        'cidr'       => 'Cidr',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAccessControlListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

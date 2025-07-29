<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CheckServiceRoleRequest;

use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @description The server role name. For more information about the service roles and their permissions in ACK, see [ACK roles](https://help.aliyun.com/document_detail/86483.html).
     *
     * This parameter is required.
     *
     * @example AliyunCSManagedAutoScalerRole
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}

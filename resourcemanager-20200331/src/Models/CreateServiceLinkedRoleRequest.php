<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceLinkedRoleRequest extends Model
{
    /**
     * @example Example
     *
     * @var string
     */
    public $customSuffix;

    /**
     * @example Service Linked Role for PolarDB. PolarDB will use this role to access your resources in other services.
     *
     * @var string
     */
    public $description;

    /**
     * @example polardb.aliyuncs.com
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'customSuffix' => 'CustomSuffix',
        'description'  => 'Description',
        'serviceName'  => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customSuffix) {
            $res['CustomSuffix'] = $this->customSuffix;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceLinkedRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomSuffix'])) {
            $model->customSuffix = $map['CustomSuffix'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}

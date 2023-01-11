<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsResponseBody\serviceProvisions\roleProvision;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsResponseBody\serviceProvisions\roleProvision\roles\apiForCreation;
use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @var apiForCreation
     */
    public $apiForCreation;

    /**
     * @example true
     *
     * @var bool
     */
    public $created;

    /**
     * @example Default
     *
     * @var string
     */
    public $function;

    /**
     * @example AliyunServiceRoleForEHPC
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'apiForCreation' => 'ApiForCreation',
        'created'        => 'Created',
        'function'       => 'Function',
        'roleName'       => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiForCreation) {
            $res['ApiForCreation'] = null !== $this->apiForCreation ? $this->apiForCreation->toMap() : null;
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->function) {
            $res['Function'] = $this->function;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
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
        if (isset($map['ApiForCreation'])) {
            $model->apiForCreation = apiForCreation::fromMap($map['ApiForCreation']);
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}

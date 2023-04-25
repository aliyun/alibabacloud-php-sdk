<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListPrivilegesOfUserResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Workbench:Call
     *
     * @var string
     */
    public $name;

    /**
     * @example SELF_ONLY
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'name'       => 'Name',
        'scope'      => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}

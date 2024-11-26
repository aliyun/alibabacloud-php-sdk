<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class CreateEnvironmentRequest extends Model
{
    /**
     * @description Environment alias.
     *
     * This parameter is required.
     * @example 测试环境
     *
     * @var string
     */
    public $alias;

    /**
     * @description Description of the environment, which can include information such as the purpose of the environment and its owner.
     *
     * @example 这是xxx的xx项目测试环境
     *
     * @var string
     */
    public $description;

    /**
     * @description Gateway ID.
     *
     * This parameter is required.
     * @example gw-cq7l5s5lhtgi6qasrdc0
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description Environment name.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'alias'           => 'alias',
        'description'     => 'description',
        'gatewayId'       => 'gatewayId',
        'name'            => 'name',
        'resourceGroupId' => 'resourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEnvironmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        return $model;
    }
}

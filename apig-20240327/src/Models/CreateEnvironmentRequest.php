<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class CreateEnvironmentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example gw-cq7l5s5lhtgi6qasrdc0
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'alias'       => 'alias',
        'description' => 'description',
        'gatewayId'   => 'gatewayId',
        'name'        => 'name',
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

        return $model;
    }
}

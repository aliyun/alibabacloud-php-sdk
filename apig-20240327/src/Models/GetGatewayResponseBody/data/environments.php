<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data;

use AlibabaCloud\Tea\Model;

class environments extends Model
{
    /**
     * @description The environment alias.
     *
     * @example Default environment
     *
     * @var string
     */
    public $alias;

    /**
     * @description The environment ID.
     *
     * @example env-cp9uhudlht***
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The environment name.
     *
     * @example default-gw-cp9ugg5***
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'alias' => 'alias',
        'environmentId' => 'environmentId',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return environments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}

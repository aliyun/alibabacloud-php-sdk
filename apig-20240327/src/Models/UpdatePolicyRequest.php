<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class UpdatePolicyRequest extends Model
{
    /**
     * @description Policy configuration
     *
     * This parameter is required.
     *
     * @example {"unitNum":1,"timeUnit":"s","enable":true}
     *
     * @var string
     */
    public $config;

    /**
     * @description Description
     *
     * @example this is a timeout policy description
     *
     * @var string
     */
    public $description;

    /**
     * @description Policy name
     *
     * This parameter is required.
     *
     * @example celue-timeout-test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'config' => 'config',
        'description' => 'description',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class UpdateMmsDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var mixed[]
     */
    public $config;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $test;
    protected $_name = [
        'action' => 'action',
        'config' => 'config',
        'name' => 'name',
        'test' => 'test',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->test) {
            $res['test'] = $this->test;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMmsDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['test'])) {
            $model->test = $map['test'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class GetKubernetesTriggerRequest extends Model
{
    /**
     * @description 应用名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 应用所属命名空间。
     *
     * @var string
     */
    public $namespace;

    /**
     * @description 应用类型。
     *
     * @var string
     */
    public $type;

    /**
     * @description 触发器行为。
     *
     * @var string
     */
    public $action;
    protected $_name = [
        'name'      => 'Name',
        'namespace' => 'Namespace',
        'type'      => 'Type',
        'action'    => 'action',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKubernetesTriggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class GetKubernetesTriggerRequest extends Model
{
    /**
     * @description 集群ID
     *
     * @var string
     */
    public $clusterId;

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
     * @description 应用名称。
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'namespace' => 'Namespace',
        'type'      => 'Type',
        'name'      => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

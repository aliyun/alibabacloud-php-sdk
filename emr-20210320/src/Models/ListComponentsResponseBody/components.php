<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListComponentsResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\Attribute;
use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @description 应用名称。
     *
     * @example HDFS
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description 属性列表。
     *
     * @var Attribute[]
     */
    public $attributes;

    /**
     * @description 组件名称。
     *
     * @example DataNode
     *
     * @var string
     */
    public $componentName;

    /**
     * @description 命名空间。
     *
     * @var string
     */
    public $namespace;

    /**
     * @description 安装该组件的机器总数。
     *
     * @example 1
     *
     * @var int
     */
    public $replica;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'attributes'      => 'Attributes',
        'componentName'   => 'ComponentName',
        'namespace'       => 'Namespace',
        'replica'         => 'Replica',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = [];
            if (null !== $this->attributes && \is_array($this->attributes)) {
                $n = 0;
                foreach ($this->attributes as $item) {
                    $res['Attributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return components
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                $n                 = 0;
                foreach ($map['Attributes'] as $item) {
                    $model->attributes[$n++] = null !== $item ? Attribute::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }

        return $model;
    }
}

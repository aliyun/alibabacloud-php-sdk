<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\ComponentLayout\nodeSelector;
use AlibabaCloud\Tea\Model;

class ComponentLayout extends Model
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
     * @description 组件名称。
     *
     * @example DataNode
     *
     * @var string
     */
    public $componentName;

    /**
     * @description 节点选择器。
     *
     * @var nodeSelector
     */
    public $nodeSelector;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'componentName'   => 'ComponentName',
        'nodeSelector'    => 'NodeSelector',
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
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->nodeSelector) {
            $res['NodeSelector'] = null !== $this->nodeSelector ? $this->nodeSelector->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ComponentLayout
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['NodeSelector'])) {
            $model->nodeSelector = nodeSelector::fromMap($map['NodeSelector']);
        }

        return $model;
    }
}

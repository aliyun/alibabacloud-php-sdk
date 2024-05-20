<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspaceQueuesResponseBody\queues;

use AlibabaCloud\Tea\Model;

class allowActions extends Model
{
    /**
     * @description 行为 arn。
     *
     * @example acs:emr::workspaceId:action/create_queue
     *
     * @var string
     */
    public $actionArn;

    /**
     * @description 权限名称。
     *
     * @example view
     *
     * @var string
     */
    public $actionName;

    /**
     * @description action 依赖列表。
     *
     * @example ["view"]
     *
     * @var string[]
     */
    public $dependencies;

    /**
     * @description action 描述。
     *
     * @example 文件目录遍历、文件浏览
     *
     * @var string
     */
    public $description;

    /**
     * @description 权限展示名称。
     *
     * @example 文件目录遍历、文件浏览
     *
     * @var string
     */
    public $displayName;
    protected $_name = [
        'actionArn'    => 'actionArn',
        'actionName'   => 'actionName',
        'dependencies' => 'dependencies',
        'description'  => 'description',
        'displayName'  => 'displayName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionArn) {
            $res['actionArn'] = $this->actionArn;
        }
        if (null !== $this->actionName) {
            $res['actionName'] = $this->actionName;
        }
        if (null !== $this->dependencies) {
            $res['dependencies'] = $this->dependencies;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allowActions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actionArn'])) {
            $model->actionArn = $map['actionArn'];
        }
        if (isset($map['actionName'])) {
            $model->actionName = $map['actionName'];
        }
        if (isset($map['dependencies'])) {
            if (!empty($map['dependencies'])) {
                $model->dependencies = $map['dependencies'];
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        return $model;
    }
}

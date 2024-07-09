<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspaceQueuesResponseBody\queues;

use AlibabaCloud\Tea\Model;

class allowActions extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of a behavior.
     *
     * @example acs:emr::workspaceId:action/create_queue
     *
     * @var string
     */
    public $actionArn;

    /**
     * @description The name of the permission.
     *
     * @example view
     *
     * @var string
     */
    public $actionName;

    /**
     * @description The dependencies of the operation.
     *
     * @example ["view"]
     *
     * @var string[]
     */
    public $dependencies;

    /**
     * @description The description of the operation.
     *
     * @example 文件目录遍历、文件浏览
     *
     * @var string
     */
    public $description;

    /**
     * @description The display name of the permission.
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

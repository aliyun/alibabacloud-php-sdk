<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class PutWorkspaceRequest extends Model
{
    /**
     * @description 工作空间描述
     *
     * @example workspace test
     *
     * @var string
     */
    public $description;

    /**
     * @example workspace-test
     *
     * @var string
     */
    public $displayName;

    /**
     * @description 工作空间绑定的日志服务项目名称
     *
     * This parameter is required.
     *
     * @example sls-project-test-001
     *
     * @var string
     */
    public $slsProject;
    protected $_name = [
        'description' => 'description',
        'displayName' => 'displayName',
        'slsProject' => 'slsProject',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->slsProject) {
            $res['slsProject'] = $this->slsProject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutWorkspaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['slsProject'])) {
            $model->slsProject = $map['slsProject'];
        }

        return $model;
    }
}

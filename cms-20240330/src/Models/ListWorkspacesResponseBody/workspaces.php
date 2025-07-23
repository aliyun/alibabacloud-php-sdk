<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListWorkspacesResponseBody;

use AlibabaCloud\Tea\Model;

class workspaces extends Model
{
    /**
     * @description Use the UTC time format: yyyy-MM-ddTHH:mm:ssZ
     *
     * @example 2025-03-11T08:21:58Z
     *
     * @var string
     */
    public $createTime;

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
     * @description Use the UTC time format: yyyy-MM-ddTHH:mm:ssZ
     *
     * @example 2025-03-11T08:21:58Z
     *
     * @var string
     */
    public $lastModifyTime;

    /**
     * @description 地域ID
     *
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 工作空间绑定的日志服务项目名称
     *
     * @example sls-project-test-001
     *
     * @var string
     */
    public $slsProject;

    /**
     * @description 工作空间名称
     *
     * This parameter is required.
     *
     * @example workspace-test-001
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'displayName' => 'displayName',
        'lastModifyTime' => 'lastModifyTime',
        'regionId' => 'regionId',
        'slsProject' => 'slsProject',
        'workspaceName' => 'workspaceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->slsProject) {
            $res['slsProject'] = $this->slsProject;
        }
        if (null !== $this->workspaceName) {
            $res['workspaceName'] = $this->workspaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workspaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['slsProject'])) {
            $model->slsProject = $map['slsProject'];
        }
        if (isset($map['workspaceName'])) {
            $model->workspaceName = $map['workspaceName'];
        }

        return $model;
    }
}

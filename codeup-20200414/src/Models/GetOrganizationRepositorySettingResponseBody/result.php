<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetOrganizationRepositorySettingResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\GetOrganizationRepositorySettingResponseBody\result\orgCloneDownloadMethodList;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetOrganizationRepositorySettingResponseBody\result\orgCloneDownloadRoleList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 创建库是否必选代码组
     *
     * @var bool
     */
    public $groupRequired;

    /**
     * @description 创建代码库允许使用的可见性选项。0：允许私有；10：允许企业可见
     *
     * @var int[]
     */
    public $repoVisibilityLevel;

    /**
     * @description 允许创建代码库的角色。5：企业外部成员；15：企业成员；60：企业管理员
     *
     * @var int[]
     */
    public $repoCreatorIdentity;

    /**
     * @description 库公开性调整设置。0：允许库管理员调整公开性为私有；10：允许库管理员调整公开性为企业可见
     *
     * @var int[]
     */
    public $repoAdminAccessVisibilityLevel;

    /**
     * @description 库管理员允许操作。1：允许库管理员删除代码库；2：未使用保留操作
     *
     * @var int[]
     */
    public $repoAdminOperation;

    /**
     * @description 开启克隆下载限制
     *
     * @var bool
     */
    public $openCloneDownloadControl;

    /**
     * @description 克隆下载限制方法列表
     *
     * @var orgCloneDownloadMethodList[]
     */
    public $orgCloneDownloadMethodList;

    /**
     * @description 克隆下载限制角色列表
     *
     * @var orgCloneDownloadRoleList[]
     */
    public $orgCloneDownloadRoleList;

    /**
     * @description 禁止强制推送（Force Push）
     *
     * @var bool
     */
    public $forcePushForbidden;
    protected $_name = [
        'groupRequired'                  => 'GroupRequired',
        'repoVisibilityLevel'            => 'RepoVisibilityLevel',
        'repoCreatorIdentity'            => 'RepoCreatorIdentity',
        'repoAdminAccessVisibilityLevel' => 'RepoAdminAccessVisibilityLevel',
        'repoAdminOperation'             => 'RepoAdminOperation',
        'openCloneDownloadControl'       => 'OpenCloneDownloadControl',
        'orgCloneDownloadMethodList'     => 'OrgCloneDownloadMethodList',
        'orgCloneDownloadRoleList'       => 'OrgCloneDownloadRoleList',
        'forcePushForbidden'             => 'ForcePushForbidden',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupRequired) {
            $res['GroupRequired'] = $this->groupRequired;
        }
        if (null !== $this->repoVisibilityLevel) {
            $res['RepoVisibilityLevel'] = $this->repoVisibilityLevel;
        }
        if (null !== $this->repoCreatorIdentity) {
            $res['RepoCreatorIdentity'] = $this->repoCreatorIdentity;
        }
        if (null !== $this->repoAdminAccessVisibilityLevel) {
            $res['RepoAdminAccessVisibilityLevel'] = $this->repoAdminAccessVisibilityLevel;
        }
        if (null !== $this->repoAdminOperation) {
            $res['RepoAdminOperation'] = $this->repoAdminOperation;
        }
        if (null !== $this->openCloneDownloadControl) {
            $res['OpenCloneDownloadControl'] = $this->openCloneDownloadControl;
        }
        if (null !== $this->orgCloneDownloadMethodList) {
            $res['OrgCloneDownloadMethodList'] = [];
            if (null !== $this->orgCloneDownloadMethodList && \is_array($this->orgCloneDownloadMethodList)) {
                $n = 0;
                foreach ($this->orgCloneDownloadMethodList as $item) {
                    $res['OrgCloneDownloadMethodList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orgCloneDownloadRoleList) {
            $res['OrgCloneDownloadRoleList'] = [];
            if (null !== $this->orgCloneDownloadRoleList && \is_array($this->orgCloneDownloadRoleList)) {
                $n = 0;
                foreach ($this->orgCloneDownloadRoleList as $item) {
                    $res['OrgCloneDownloadRoleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->forcePushForbidden) {
            $res['ForcePushForbidden'] = $this->forcePushForbidden;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupRequired'])) {
            $model->groupRequired = $map['GroupRequired'];
        }
        if (isset($map['RepoVisibilityLevel'])) {
            if (!empty($map['RepoVisibilityLevel'])) {
                $model->repoVisibilityLevel = $map['RepoVisibilityLevel'];
            }
        }
        if (isset($map['RepoCreatorIdentity'])) {
            if (!empty($map['RepoCreatorIdentity'])) {
                $model->repoCreatorIdentity = $map['RepoCreatorIdentity'];
            }
        }
        if (isset($map['RepoAdminAccessVisibilityLevel'])) {
            if (!empty($map['RepoAdminAccessVisibilityLevel'])) {
                $model->repoAdminAccessVisibilityLevel = $map['RepoAdminAccessVisibilityLevel'];
            }
        }
        if (isset($map['RepoAdminOperation'])) {
            if (!empty($map['RepoAdminOperation'])) {
                $model->repoAdminOperation = $map['RepoAdminOperation'];
            }
        }
        if (isset($map['OpenCloneDownloadControl'])) {
            $model->openCloneDownloadControl = $map['OpenCloneDownloadControl'];
        }
        if (isset($map['OrgCloneDownloadMethodList'])) {
            if (!empty($map['OrgCloneDownloadMethodList'])) {
                $model->orgCloneDownloadMethodList = [];
                $n                                 = 0;
                foreach ($map['OrgCloneDownloadMethodList'] as $item) {
                    $model->orgCloneDownloadMethodList[$n++] = null !== $item ? orgCloneDownloadMethodList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OrgCloneDownloadRoleList'])) {
            if (!empty($map['OrgCloneDownloadRoleList'])) {
                $model->orgCloneDownloadRoleList = [];
                $n                               = 0;
                foreach ($map['OrgCloneDownloadRoleList'] as $item) {
                    $model->orgCloneDownloadRoleList[$n++] = null !== $item ? orgCloneDownloadRoleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ForcePushForbidden'])) {
            $model->forcePushForbidden = $map['ForcePushForbidden'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetOrganizationRepositorySettingResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\GetOrganizationRepositorySettingResponseBody\result\orgCloneDownloadMethodList;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetOrganizationRepositorySettingResponseBody\result\orgCloneDownloadRoleList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $forcePushForbidden;

    /**
     * @var bool
     */
    public $groupRequired;

    /**
     * @var bool
     */
    public $openCloneDownloadControl;

    /**
     * @var orgCloneDownloadMethodList[]
     */
    public $orgCloneDownloadMethodList;

    /**
     * @var orgCloneDownloadRoleList[]
     */
    public $orgCloneDownloadRoleList;

    /**
     * @var int[]
     */
    public $repoAdminAccessVisibilityLevel;

    /**
     * @var int[]
     */
    public $repoAdminOperation;

    /**
     * @var int[]
     */
    public $repoCreatorIdentity;

    /**
     * @var int[]
     */
    public $repoVisibilityLevel;
    protected $_name = [
        'forcePushForbidden'             => 'ForcePushForbidden',
        'groupRequired'                  => 'GroupRequired',
        'openCloneDownloadControl'       => 'OpenCloneDownloadControl',
        'orgCloneDownloadMethodList'     => 'OrgCloneDownloadMethodList',
        'orgCloneDownloadRoleList'       => 'OrgCloneDownloadRoleList',
        'repoAdminAccessVisibilityLevel' => 'RepoAdminAccessVisibilityLevel',
        'repoAdminOperation'             => 'RepoAdminOperation',
        'repoCreatorIdentity'            => 'RepoCreatorIdentity',
        'repoVisibilityLevel'            => 'RepoVisibilityLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forcePushForbidden) {
            $res['ForcePushForbidden'] = $this->forcePushForbidden;
        }
        if (null !== $this->groupRequired) {
            $res['GroupRequired'] = $this->groupRequired;
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
        if (null !== $this->repoAdminAccessVisibilityLevel) {
            $res['RepoAdminAccessVisibilityLevel'] = $this->repoAdminAccessVisibilityLevel;
        }
        if (null !== $this->repoAdminOperation) {
            $res['RepoAdminOperation'] = $this->repoAdminOperation;
        }
        if (null !== $this->repoCreatorIdentity) {
            $res['RepoCreatorIdentity'] = $this->repoCreatorIdentity;
        }
        if (null !== $this->repoVisibilityLevel) {
            $res['RepoVisibilityLevel'] = $this->repoVisibilityLevel;
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
        if (isset($map['ForcePushForbidden'])) {
            $model->forcePushForbidden = $map['ForcePushForbidden'];
        }
        if (isset($map['GroupRequired'])) {
            $model->groupRequired = $map['GroupRequired'];
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
        if (isset($map['RepoCreatorIdentity'])) {
            if (!empty($map['RepoCreatorIdentity'])) {
                $model->repoCreatorIdentity = $map['RepoCreatorIdentity'];
            }
        }
        if (isset($map['RepoVisibilityLevel'])) {
            if (!empty($map['RepoVisibilityLevel'])) {
                $model->repoVisibilityLevel = $map['RepoVisibilityLevel'];
            }
        }

        return $model;
    }
}

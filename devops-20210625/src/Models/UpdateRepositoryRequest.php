<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryRequest\projectCloneDownloadMethodList;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryRequest\projectCloneDownloadRoleList;
use AlibabaCloud\Tea\Model;

class UpdateRepositoryRequest extends Model
{
    /**
     * @example c3c09f1230187a879678da43c973d069
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example Java
     *
     * @var string
     */
    public $adminSettingLanguage;

    /**
     * @example https://xxxx
     *
     * @var string
     */
    public $avatar;

    /**
     * @example true
     *
     * @var bool
     */
    public $buildsEnabled;

    /**
     * @example true
     *
     * @var bool
     */
    public $checkEmail;

    /**
     * @example master
     *
     * @var string
     */
    public $defaultBranch;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2080398
     *
     * @var int
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $issuesEnabled;

    /**
     * @example true
     *
     * @var bool
     */
    public $mergeRequestsEnabled;

    /**
     * @example codeup
     *
     * @var string
     */
    public $name;

    /**
     * @example false
     *
     * @var bool
     */
    public $openCloneDownloadControl;

    /**
     * @example codeup/codeup-demo
     *
     * @var string
     */
    public $path;

    /**
     * @var projectCloneDownloadMethodList[]
     */
    public $projectCloneDownloadMethodList;

    /**
     * @var projectCloneDownloadRoleList[]
     */
    public $projectCloneDownloadRoleList;

    /**
     * @example false
     *
     * @var bool
     */
    public $snippetsEnabled;

    /**
     * @example 0
     *
     * @var int
     */
    public $visibilityLevel;

    /**
     * @example true
     *
     * @var bool
     */
    public $wikiEnabled;

    /**
     * @example 60de7a6852743a5162b5f957
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'                    => 'accessToken',
        'adminSettingLanguage'           => 'adminSettingLanguage',
        'avatar'                         => 'avatar',
        'buildsEnabled'                  => 'buildsEnabled',
        'checkEmail'                     => 'checkEmail',
        'defaultBranch'                  => 'defaultBranch',
        'description'                    => 'description',
        'id'                             => 'id',
        'issuesEnabled'                  => 'issuesEnabled',
        'mergeRequestsEnabled'           => 'mergeRequestsEnabled',
        'name'                           => 'name',
        'openCloneDownloadControl'       => 'openCloneDownloadControl',
        'path'                           => 'path',
        'projectCloneDownloadMethodList' => 'projectCloneDownloadMethodList',
        'projectCloneDownloadRoleList'   => 'projectCloneDownloadRoleList',
        'snippetsEnabled'                => 'snippetsEnabled',
        'visibilityLevel'                => 'visibilityLevel',
        'wikiEnabled'                    => 'wikiEnabled',
        'organizationId'                 => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->adminSettingLanguage) {
            $res['adminSettingLanguage'] = $this->adminSettingLanguage;
        }
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }
        if (null !== $this->buildsEnabled) {
            $res['buildsEnabled'] = $this->buildsEnabled;
        }
        if (null !== $this->checkEmail) {
            $res['checkEmail'] = $this->checkEmail;
        }
        if (null !== $this->defaultBranch) {
            $res['defaultBranch'] = $this->defaultBranch;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->issuesEnabled) {
            $res['issuesEnabled'] = $this->issuesEnabled;
        }
        if (null !== $this->mergeRequestsEnabled) {
            $res['mergeRequestsEnabled'] = $this->mergeRequestsEnabled;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->openCloneDownloadControl) {
            $res['openCloneDownloadControl'] = $this->openCloneDownloadControl;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->projectCloneDownloadMethodList) {
            $res['projectCloneDownloadMethodList'] = [];
            if (null !== $this->projectCloneDownloadMethodList && \is_array($this->projectCloneDownloadMethodList)) {
                $n = 0;
                foreach ($this->projectCloneDownloadMethodList as $item) {
                    $res['projectCloneDownloadMethodList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectCloneDownloadRoleList) {
            $res['projectCloneDownloadRoleList'] = [];
            if (null !== $this->projectCloneDownloadRoleList && \is_array($this->projectCloneDownloadRoleList)) {
                $n = 0;
                foreach ($this->projectCloneDownloadRoleList as $item) {
                    $res['projectCloneDownloadRoleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->snippetsEnabled) {
            $res['snippetsEnabled'] = $this->snippetsEnabled;
        }
        if (null !== $this->visibilityLevel) {
            $res['visibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->wikiEnabled) {
            $res['wikiEnabled'] = $this->wikiEnabled;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRepositoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['adminSettingLanguage'])) {
            $model->adminSettingLanguage = $map['adminSettingLanguage'];
        }
        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }
        if (isset($map['buildsEnabled'])) {
            $model->buildsEnabled = $map['buildsEnabled'];
        }
        if (isset($map['checkEmail'])) {
            $model->checkEmail = $map['checkEmail'];
        }
        if (isset($map['defaultBranch'])) {
            $model->defaultBranch = $map['defaultBranch'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['issuesEnabled'])) {
            $model->issuesEnabled = $map['issuesEnabled'];
        }
        if (isset($map['mergeRequestsEnabled'])) {
            $model->mergeRequestsEnabled = $map['mergeRequestsEnabled'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['openCloneDownloadControl'])) {
            $model->openCloneDownloadControl = $map['openCloneDownloadControl'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['projectCloneDownloadMethodList'])) {
            if (!empty($map['projectCloneDownloadMethodList'])) {
                $model->projectCloneDownloadMethodList = [];
                $n                                     = 0;
                foreach ($map['projectCloneDownloadMethodList'] as $item) {
                    $model->projectCloneDownloadMethodList[$n++] = null !== $item ? projectCloneDownloadMethodList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['projectCloneDownloadRoleList'])) {
            if (!empty($map['projectCloneDownloadRoleList'])) {
                $model->projectCloneDownloadRoleList = [];
                $n                                   = 0;
                foreach ($map['projectCloneDownloadRoleList'] as $item) {
                    $model->projectCloneDownloadRoleList[$n++] = null !== $item ? projectCloneDownloadRoleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['snippetsEnabled'])) {
            $model->snippetsEnabled = $map['snippetsEnabled'];
        }
        if (isset($map['visibilityLevel'])) {
            $model->visibilityLevel = $map['visibilityLevel'];
        }
        if (isset($map['wikiEnabled'])) {
            $model->wikiEnabled = $map['wikiEnabled'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}

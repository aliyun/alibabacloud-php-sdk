<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryRequest\projectCloneDownloadMethodList;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryRequest\projectCloneDownloadRoleList;

class UpdateRepositoryRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;
    /**
     * @var string
     */
    public $adminSettingLanguage;
    /**
     * @var string
     */
    public $avatar;
    /**
     * @var bool
     */
    public $buildsEnabled;
    /**
     * @var bool
     */
    public $checkEmail;
    /**
     * @var string
     */
    public $defaultBranch;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $id;
    /**
     * @var bool
     */
    public $issuesEnabled;
    /**
     * @var bool
     */
    public $mergeRequestsEnabled;
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $openCloneDownloadControl;
    /**
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
     * @var bool
     */
    public $snippetsEnabled;
    /**
     * @var int
     */
    public $visibilityLevel;
    /**
     * @var bool
     */
    public $wikiEnabled;
    /**
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
        if (\is_array($this->projectCloneDownloadMethodList)) {
            Model::validateArray($this->projectCloneDownloadMethodList);
        }
        if (\is_array($this->projectCloneDownloadRoleList)) {
            Model::validateArray($this->projectCloneDownloadRoleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->projectCloneDownloadMethodList)) {
                $res['projectCloneDownloadMethodList'] = [];
                $n1                                    = 0;
                foreach ($this->projectCloneDownloadMethodList as $item1) {
                    $res['projectCloneDownloadMethodList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->projectCloneDownloadRoleList) {
            if (\is_array($this->projectCloneDownloadRoleList)) {
                $res['projectCloneDownloadRoleList'] = [];
                $n1                                  = 0;
                foreach ($this->projectCloneDownloadRoleList as $item1) {
                    $res['projectCloneDownloadRoleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                                    = 0;
                foreach ($map['projectCloneDownloadMethodList'] as $item1) {
                    $model->projectCloneDownloadMethodList[$n1++] = projectCloneDownloadMethodList::fromMap($item1);
                }
            }
        }

        if (isset($map['projectCloneDownloadRoleList'])) {
            if (!empty($map['projectCloneDownloadRoleList'])) {
                $model->projectCloneDownloadRoleList = [];
                $n1                                  = 0;
                foreach ($map['projectCloneDownloadRoleList'] as $item1) {
                    $model->projectCloneDownloadRoleList[$n1++] = projectCloneDownloadRoleList::fromMap($item1);
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

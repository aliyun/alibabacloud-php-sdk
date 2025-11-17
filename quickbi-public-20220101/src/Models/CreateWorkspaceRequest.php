<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class CreateWorkspaceRequest extends Model
{
    /**
     * @var bool
     */
    public $allowPublish;

    /**
     * @var bool
     */
    public $allowShare;

    /**
     * @var bool
     */
    public $allowViewAll;

    /**
     * @var bool
     */
    public $defaultShareToAll;

    /**
     * @var bool
     */
    public $onlyAdminCreateDatasource;

    /**
     * @var bool
     */
    public $useComment;

    /**
     * @var string
     */
    public $workspaceDescription;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'allowPublish' => 'AllowPublish',
        'allowShare' => 'AllowShare',
        'allowViewAll' => 'AllowViewAll',
        'defaultShareToAll' => 'DefaultShareToAll',
        'onlyAdminCreateDatasource' => 'OnlyAdminCreateDatasource',
        'useComment' => 'UseComment',
        'workspaceDescription' => 'WorkspaceDescription',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowPublish) {
            $res['AllowPublish'] = $this->allowPublish;
        }

        if (null !== $this->allowShare) {
            $res['AllowShare'] = $this->allowShare;
        }

        if (null !== $this->allowViewAll) {
            $res['AllowViewAll'] = $this->allowViewAll;
        }

        if (null !== $this->defaultShareToAll) {
            $res['DefaultShareToAll'] = $this->defaultShareToAll;
        }

        if (null !== $this->onlyAdminCreateDatasource) {
            $res['OnlyAdminCreateDatasource'] = $this->onlyAdminCreateDatasource;
        }

        if (null !== $this->useComment) {
            $res['UseComment'] = $this->useComment;
        }

        if (null !== $this->workspaceDescription) {
            $res['WorkspaceDescription'] = $this->workspaceDescription;
        }

        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
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
        if (isset($map['AllowPublish'])) {
            $model->allowPublish = $map['AllowPublish'];
        }

        if (isset($map['AllowShare'])) {
            $model->allowShare = $map['AllowShare'];
        }

        if (isset($map['AllowViewAll'])) {
            $model->allowViewAll = $map['AllowViewAll'];
        }

        if (isset($map['DefaultShareToAll'])) {
            $model->defaultShareToAll = $map['DefaultShareToAll'];
        }

        if (isset($map['OnlyAdminCreateDatasource'])) {
            $model->onlyAdminCreateDatasource = $map['OnlyAdminCreateDatasource'];
        }

        if (isset($map['UseComment'])) {
            $model->useComment = $map['UseComment'];
        }

        if (isset($map['WorkspaceDescription'])) {
            $model->workspaceDescription = $map['WorkspaceDescription'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}

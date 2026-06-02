<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class SaveWorkspaceCodeRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $force;

    /**
     * @var bool
     */
    public $iac;

    /**
     * @var string
     */
    public $mtime;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $repo;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'content' => 'Content',
        'force' => 'Force',
        'iac' => 'Iac',
        'mtime' => 'Mtime',
        'path' => 'Path',
        'repo' => 'Repo',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        if (null !== $this->iac) {
            $res['Iac'] = $this->iac;
        }

        if (null !== $this->mtime) {
            $res['Mtime'] = $this->mtime;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->repo) {
            $res['Repo'] = $this->repo;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        if (isset($map['Iac'])) {
            $model->iac = $map['Iac'];
        }

        if (isset($map['Mtime'])) {
            $model->mtime = $map['Mtime'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Repo'])) {
            $model->repo = $map['Repo'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

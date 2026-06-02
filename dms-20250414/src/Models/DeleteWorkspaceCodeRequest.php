<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DeleteWorkspaceCodeRequest extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $repo;

    /**
     * @var bool
     */
    public $symlink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'path' => 'Path',
        'repo' => 'Repo',
        'symlink' => 'Symlink',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->repo) {
            $res['Repo'] = $this->repo;
        }

        if (null !== $this->symlink) {
            $res['Symlink'] = $this->symlink;
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
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Repo'])) {
            $model->repo = $map['Repo'];
        }

        if (isset($map['Symlink'])) {
            $model->symlink = $map['Symlink'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

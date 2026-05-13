<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\GetWorkspaceCodePublishSettingResponseBody\data;

use AlibabaCloud\Dara\Model;

class repos extends Model
{
    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $repo;
    protected $_name = [
        'branch' => 'Branch',
        'path' => 'Path',
        'repo' => 'Repo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branch) {
            $res['Branch'] = $this->branch;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->repo) {
            $res['Repo'] = $this->repo;
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
        if (isset($map['Branch'])) {
            $model->branch = $map['Branch'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Repo'])) {
            $model->repo = $map['Repo'];
        }

        return $model;
    }
}

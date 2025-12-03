<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun\sources;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $commint;

    /**
     * @var string
     */
    public $repo;
    protected $_name = [
        'branch' => 'branch',
        'commint' => 'commint',
        'repo' => 'repo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branch) {
            $res['branch'] = $this->branch;
        }

        if (null !== $this->commint) {
            $res['commint'] = $this->commint;
        }

        if (null !== $this->repo) {
            $res['repo'] = $this->repo;
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
        if (isset($map['branch'])) {
            $model->branch = $map['branch'];
        }

        if (isset($map['commint'])) {
            $model->commint = $map['commint'];
        }

        if (isset($map['repo'])) {
            $model->repo = $map['repo'];
        }

        return $model;
    }
}

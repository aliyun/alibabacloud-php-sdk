<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetReleaseStagePipelineRunResponseBody\pipelineRun\sources;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example master
     *
     * @var string
     */
    public $branch;

    /**
     * @example {}
     *
     * @var string
     */
    public $commit;

    /**
     * @example http://codeup.aliyun.com/a.git
     *
     * @var string
     */
    public $repo;
    protected $_name = [
        'branch' => 'branch',
        'commit' => 'commit',
        'repo'   => 'repo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branch) {
            $res['branch'] = $this->branch;
        }
        if (null !== $this->commit) {
            $res['commit'] = $this->commit;
        }
        if (null !== $this->repo) {
            $res['repo'] = $this->repo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['branch'])) {
            $model->branch = $map['branch'];
        }
        if (isset($map['commit'])) {
            $model->commit = $map['commit'];
        }
        if (isset($map['repo'])) {
            $model->repo = $map['repo'];
        }

        return $model;
    }
}

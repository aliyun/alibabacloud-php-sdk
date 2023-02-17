<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class DeleteProjectRequest extends Model
{
    /**
     * @example ali-test-project
     *
     * @var string
     */
    public $project;
    protected $_name = [
        'project' => 'project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        return $model;
    }
}

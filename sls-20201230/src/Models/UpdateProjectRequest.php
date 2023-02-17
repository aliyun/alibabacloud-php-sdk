<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectRequest extends Model
{
    /**
     * @example Description of my-project-test
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'description' => 'description',
        'project'     => 'project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        return $model;
    }
}

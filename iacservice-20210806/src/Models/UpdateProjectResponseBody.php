<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateProjectResponseBody\project;
use AlibabaCloud\Tea\Model;

class UpdateProjectResponseBody extends Model
{
    /**
     * @var project
     */
    public $project;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'project'   => 'project',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['project'] = null !== $this->project ? $this->project->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['project'])) {
            $model->project = project::fromMap($map['project']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

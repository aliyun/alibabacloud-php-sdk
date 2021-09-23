<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectResponseBody extends Model
{
    /**
     * @description 本次请求的唯一 ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @var Project
     */
    public $project;
    protected $_name = [
        'requestId' => 'RequestId',
        'project'   => 'Project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->project) {
            $res['Project'] = null !== $this->project ? $this->project->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Project'])) {
            $model->project = Project::fromMap($map['Project']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectResponseBody extends Model
{
    /**
     * @var Project
     */
    public $project;

    /**
     * @example 7F7D235C-76FF-4B65-800C-8238AE3F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'project'   => 'Project',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = null !== $this->project ? $this->project->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Project'])) {
            $model->project = Project::fromMap($map['Project']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

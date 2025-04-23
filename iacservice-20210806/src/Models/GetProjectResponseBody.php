<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectResponseBody\project;

class GetProjectResponseBody extends Model
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
        'project' => 'project',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->project) {
            $this->project->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->project) {
            $res['project'] = null !== $this->project ? $this->project->toArray($noStream) : $this->project;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['project'])) {
            $model->project = project::fromMap($map['project']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

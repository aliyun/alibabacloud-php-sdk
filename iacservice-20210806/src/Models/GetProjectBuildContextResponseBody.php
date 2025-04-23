<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildContextResponseBody\projectBuild;

class GetProjectBuildContextResponseBody extends Model
{
    /**
     * @var projectBuild
     */
    public $projectBuild;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'projectBuild' => 'ProjectBuild',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->projectBuild) {
            $this->projectBuild->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectBuild) {
            $res['ProjectBuild'] = null !== $this->projectBuild ? $this->projectBuild->toArray($noStream) : $this->projectBuild;
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
        if (isset($map['ProjectBuild'])) {
            $model->projectBuild = projectBuild::fromMap($map['ProjectBuild']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

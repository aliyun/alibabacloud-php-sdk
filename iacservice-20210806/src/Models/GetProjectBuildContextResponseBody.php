<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildContextResponseBody\projectBuild;
use AlibabaCloud\Tea\Model;

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
        'requestId'    => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectBuild) {
            $res['ProjectBuild'] = null !== $this->projectBuild ? $this->projectBuild->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectBuildContextResponseBody
     */
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

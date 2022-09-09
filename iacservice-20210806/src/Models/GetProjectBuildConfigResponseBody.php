<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildConfigResponseBody\projectBuildConfig;
use AlibabaCloud\Tea\Model;

class GetProjectBuildConfigResponseBody extends Model
{
    /**
     * @var projectBuildConfig
     */
    public $projectBuildConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'projectBuildConfig' => 'projectBuildConfig',
        'requestId'          => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectBuildConfig) {
            $res['projectBuildConfig'] = null !== $this->projectBuildConfig ? $this->projectBuildConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectBuildConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['projectBuildConfig'])) {
            $model->projectBuildConfig = projectBuildConfig::fromMap($map['projectBuildConfig']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

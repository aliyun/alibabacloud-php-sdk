<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetSetupProjectResponseBody\setupProject;
use AlibabaCloud\Tea\Model;

class GetSetupProjectResponseBody extends Model
{
    /**
     * @example requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @var setupProject
     */
    public $setupProject;
    protected $_name = [
        'requestId'    => 'RequestId',
        'setupProject' => 'SetupProject',
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
        if (null !== $this->setupProject) {
            $res['SetupProject'] = null !== $this->setupProject ? $this->setupProject->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSetupProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SetupProject'])) {
            $model->setupProject = setupProject::fromMap($map['SetupProject']);
        }

        return $model;
    }
}

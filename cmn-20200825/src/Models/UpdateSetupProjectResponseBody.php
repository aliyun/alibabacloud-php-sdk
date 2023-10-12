<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class UpdateSetupProjectResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $setupProjectId;

    /**
     * @var string
     */
    public $setupProjectName;

    /**
     * @var string
     */
    public $setupProjectSpecification;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'setupProjectId'            => 'SetupProjectId',
        'setupProjectName'          => 'SetupProjectName',
        'setupProjectSpecification' => 'SetupProjectSpecification',
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
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
        }
        if (null !== $this->setupProjectName) {
            $res['SetupProjectName'] = $this->setupProjectName;
        }
        if (null !== $this->setupProjectSpecification) {
            $res['SetupProjectSpecification'] = $this->setupProjectSpecification;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSetupProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }
        if (isset($map['SetupProjectName'])) {
            $model->setupProjectName = $map['SetupProjectName'];
        }
        if (isset($map['SetupProjectSpecification'])) {
            $model->setupProjectSpecification = $map['SetupProjectSpecification'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectCreateOrUpdateExtInfoAppResponseBody\extInfo;
use AlibabaCloud\Tea\Model;

class ProjectCreateOrUpdateExtInfoAppResponseBody extends Model
{
    /**
     * @var extInfo
     */
    public $extInfo;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'extInfo'   => 'ExtInfo',
        'projectId' => 'ProjectId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = null !== $this->extInfo ? $this->extInfo->toMap() : null;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProjectCreateOrUpdateExtInfoAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtInfo'])) {
            $model->extInfo = extInfo::fromMap($map['ExtInfo']);
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

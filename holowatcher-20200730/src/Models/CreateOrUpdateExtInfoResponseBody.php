<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateExtInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $ossSts;

    /**
     * @var string
     */
    public $pipelineStatus;

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
        'ossSts'         => 'OssSts',
        'pipelineStatus' => 'PipelineStatus',
        'projectId'      => 'ProjectId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossSts) {
            $res['OssSts'] = $this->ossSts;
        }
        if (null !== $this->pipelineStatus) {
            $res['PipelineStatus'] = $this->pipelineStatus;
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
     * @return CreateOrUpdateExtInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssSts'])) {
            $model->ossSts = $map['OssSts'];
        }
        if (isset($map['PipelineStatus'])) {
            $model->pipelineStatus = $map['PipelineStatus'];
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

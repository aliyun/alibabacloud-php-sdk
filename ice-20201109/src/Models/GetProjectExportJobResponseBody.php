<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetProjectExportJobResponseBody\projectExportJob;
use AlibabaCloud\Tea\Model;

class GetProjectExportJobResponseBody extends Model
{
    /**
     * @var projectExportJob
     */
    public $projectExportJob;

    /**
     * @example ****2876-6263-4B75-8F2C-CD0F7FCF****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'projectExportJob' => 'ProjectExportJob',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectExportJob) {
            $res['ProjectExportJob'] = null !== $this->projectExportJob ? $this->projectExportJob->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectExportJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectExportJob'])) {
            $model->projectExportJob = projectExportJob::fromMap($map['ProjectExportJob']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

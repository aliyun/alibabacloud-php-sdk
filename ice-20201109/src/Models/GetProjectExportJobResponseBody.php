<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetProjectExportJobResponseBody\projectExportJob;

class GetProjectExportJobResponseBody extends Model
{
    /**
     * @var projectExportJob
     */
    public $projectExportJob;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'projectExportJob' => 'ProjectExportJob',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->projectExportJob) {
            $this->projectExportJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectExportJob) {
            $res['ProjectExportJob'] = null !== $this->projectExportJob ? $this->projectExportJob->toArray($noStream) : $this->projectExportJob;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ProjectExportJob'])) {
            $model->projectExportJob = projectExportJob::fromMap($map['ProjectExportJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

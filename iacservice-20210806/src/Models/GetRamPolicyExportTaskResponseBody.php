<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRamPolicyExportTaskResponseBody\ramPolicyExportTask;

class GetRamPolicyExportTaskResponseBody extends Model
{
    /**
     * @var ramPolicyExportTask
     */
    public $ramPolicyExportTask;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ramPolicyExportTask' => 'ramPolicyExportTask',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->ramPolicyExportTask) {
            $this->ramPolicyExportTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ramPolicyExportTask) {
            $res['ramPolicyExportTask'] = null !== $this->ramPolicyExportTask ? $this->ramPolicyExportTask->toArray($noStream) : $this->ramPolicyExportTask;
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
        if (isset($map['ramPolicyExportTask'])) {
            $model->ramPolicyExportTask = ramPolicyExportTask::fromMap($map['ramPolicyExportTask']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

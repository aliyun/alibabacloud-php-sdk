<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePADiagnosisTaskResponseBody\diagnosisTask;

class CreatePADiagnosisTaskResponseBody extends Model
{
    /**
     * @var diagnosisTask
     */
    public $diagnosisTask;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diagnosisTask' => 'DiagnosisTask',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->diagnosisTask) {
            $this->diagnosisTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diagnosisTask) {
            $res['DiagnosisTask'] = null !== $this->diagnosisTask ? $this->diagnosisTask->toArray($noStream) : $this->diagnosisTask;
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
        if (isset($map['DiagnosisTask'])) {
            $model->diagnosisTask = diagnosisTask::fromMap($map['DiagnosisTask']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

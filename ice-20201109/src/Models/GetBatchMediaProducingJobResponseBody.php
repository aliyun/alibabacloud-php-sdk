<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetBatchMediaProducingJobResponseBody\editingBatchJob;

class GetBatchMediaProducingJobResponseBody extends Model
{
    /**
     * @var editingBatchJob
     */
    public $editingBatchJob;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'editingBatchJob' => 'EditingBatchJob',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->editingBatchJob) {
            $this->editingBatchJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->editingBatchJob) {
            $res['EditingBatchJob'] = null !== $this->editingBatchJob ? $this->editingBatchJob->toArray($noStream) : $this->editingBatchJob;
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
        if (isset($map['EditingBatchJob'])) {
            $model->editingBatchJob = editingBatchJob::fromMap($map['EditingBatchJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

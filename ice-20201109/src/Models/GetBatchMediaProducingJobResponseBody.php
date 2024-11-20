<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetBatchMediaProducingJobResponseBody\editingBatchJob;
use AlibabaCloud\Tea\Model;

class GetBatchMediaProducingJobResponseBody extends Model
{
    /**
     * @description The information about the quick video production job.
     *
     * @var editingBatchJob
     */
    public $editingBatchJob;

    /**
     * @description The request ID.
     *
     * @example ****36-3C1E-4417-BDB2-1E034F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'editingBatchJob' => 'EditingBatchJob',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->editingBatchJob) {
            $res['EditingBatchJob'] = null !== $this->editingBatchJob ? $this->editingBatchJob->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBatchMediaProducingJobResponseBody
     */
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

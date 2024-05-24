<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class PipelineTriggerEventStatus extends Model
{
    /**
     * @example failed to create and start pipeline, error=message
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example my-pipeline
     *
     * @var string
     */
    public $firedPipelineName;

    /**
     * @var ReleaseDetail
     */
    public $releaseDetail;

    /**
     * @example Skipped,Fired,Running,Failed,Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorMessage'      => 'errorMessage',
        'firedPipelineName' => 'firedPipelineName',
        'releaseDetail'     => 'releaseDetail',
        'status'            => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->firedPipelineName) {
            $res['firedPipelineName'] = $this->firedPipelineName;
        }
        if (null !== $this->releaseDetail) {
            $res['releaseDetail'] = null !== $this->releaseDetail ? $this->releaseDetail->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PipelineTriggerEventStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['firedPipelineName'])) {
            $model->firedPipelineName = $map['firedPipelineName'];
        }
        if (isset($map['releaseDetail'])) {
            $model->releaseDetail = ReleaseDetail::fromMap($map['releaseDetail']);
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}

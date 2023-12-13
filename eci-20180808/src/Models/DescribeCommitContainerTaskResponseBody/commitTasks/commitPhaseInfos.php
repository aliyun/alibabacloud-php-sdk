<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeCommitContainerTaskResponseBody\commitTasks;

use AlibabaCloud\Tea\Model;

class commitPhaseInfos extends Model
{
    /**
     * @description The message about the phase.
     *
     * @example Pull base image for container container-1 successfully
     *
     * @var string
     */
    public $message;

    /**
     * @description The phase name. Valid values:
     *
     *   PullBaseImage: Pull the original container image.
     *   CommitContainer: Commit the container to generate an image.
     *   PushCommittedImage: Push the image to Container Registry.
     *
     * @example PullBaseImage
     *
     * @var string
     */
    public $phase;

    /**
     * @description The record time of the phase.
     *
     * @example 2023-01-05T14:06:40.920005316+08:00
     *
     * @var string
     */
    public $recordTime;

    /**
     * @description The state of the phase.
     *
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'message'    => 'Message',
        'phase'      => 'Phase',
        'recordTime' => 'RecordTime',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->recordTime) {
            $res['RecordTime'] = $this->recordTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commitPhaseInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['RecordTime'])) {
            $model->recordTime = $map['RecordTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

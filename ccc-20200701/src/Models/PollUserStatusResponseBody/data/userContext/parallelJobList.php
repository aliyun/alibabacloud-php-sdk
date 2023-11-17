<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\PollUserStatusResponseBody\data\userContext;

use AlibabaCloud\Tea\Model;

class parallelJobList extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'jobId'     => 'JobId',
        'status'    => 'Status',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parallelJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}

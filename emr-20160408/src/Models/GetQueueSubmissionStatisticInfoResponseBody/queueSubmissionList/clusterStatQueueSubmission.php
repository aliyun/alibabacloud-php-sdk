<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueSubmissionStatisticInfoResponseBody\queueSubmissionList;

use AlibabaCloud\Tea\Model;

class clusterStatQueueSubmission extends Model
{
    /**
     * @var string
     */
    public $queue;

    /**
     * @var int
     */
    public $submission;
    protected $_name = [
        'queue'      => 'Queue',
        'submission' => 'Submission',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->submission) {
            $res['Submission'] = $this->submission;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterStatQueueSubmission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['Submission'])) {
            $model->submission = $map['Submission'];
        }

        return $model;
    }
}

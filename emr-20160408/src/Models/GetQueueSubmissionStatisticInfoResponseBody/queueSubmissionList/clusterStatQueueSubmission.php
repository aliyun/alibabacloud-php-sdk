<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueSubmissionStatisticInfoResponseBody\queueSubmissionList;

use AlibabaCloud\Tea\Model;

class clusterStatQueueSubmission extends Model
{
    /**
     * @var int
     */
    public $submission;

    /**
     * @var string
     */
    public $queue;
    protected $_name = [
        'submission' => 'Submission',
        'queue'      => 'Queue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->submission) {
            $res['Submission'] = $this->submission;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
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
        if (isset($map['Submission'])) {
            $model->submission = $map['Submission'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }

        return $model;
    }
}

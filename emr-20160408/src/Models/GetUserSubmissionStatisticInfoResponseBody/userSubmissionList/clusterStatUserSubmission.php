<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetUserSubmissionStatisticInfoResponseBody\userSubmissionList;

use AlibabaCloud\Tea\Model;

class clusterStatUserSubmission extends Model
{
    /**
     * @var int
     */
    public $submission;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'submission' => 'Submission',
        'user'       => 'User',
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
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterStatUserSubmission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Submission'])) {
            $model->submission = $map['Submission'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}

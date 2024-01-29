<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetSubmissionResponseBody\submission;
use AlibabaCloud\Tea\Model;

class GetSubmissionResponseBody extends Model
{
    /**
     * @example easygene.cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $hostId;

    /**
     * @example DA980AD0-158F-44F3-847D-5EAB96C0EB6B
     *
     * @var string
     */
    public $requestId;

    /**
     * @var submission
     */
    public $submission;
    protected $_name = [
        'hostId'     => 'HostId',
        'requestId'  => 'RequestId',
        'submission' => 'Submission',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->submission) {
            $res['Submission'] = null !== $this->submission ? $this->submission->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSubmissionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Submission'])) {
            $model->submission = submission::fromMap($map['Submission']);
        }

        return $model;
    }
}

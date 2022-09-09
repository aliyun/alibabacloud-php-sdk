<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectJobSummaryResponseBody\jobSummary;
use AlibabaCloud\Tea\Model;

class GetProjectJobSummaryResponseBody extends Model
{
    /**
     * @var jobSummary
     */
    public $jobSummary;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobSummary' => 'jobSummary',
        'requestId'  => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobSummary) {
            $res['jobSummary'] = null !== $this->jobSummary ? $this->jobSummary->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectJobSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['jobSummary'])) {
            $model->jobSummary = jobSummary::fromMap($map['jobSummary']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySmarttagJobResponseBody\results;
use AlibabaCloud\Tea\Model;

class QuerySmarttagJobResponseBody extends Model
{
    /**
     * @description The status of the job. Valid values:
     *
     *   **Success**: The job was successful.
     *   **Fail**: The job failed.
     *   **Processing**: The job is in progress.
     *   **Submitted**: The job is submitted and waiting to be processed.
     *
     * @example Success
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The request ID.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The analysis results of the smart tagging job. The value is an array.
     *
     * @var results
     */
    public $results;

    /**
     * @description The content of callback messages that are sent to Simple Message Queue (SMQ) when the information of the smart tagging job changes. For more information about the parameters contained in the callback message, see the "Callback parameters" section of this topic.
     *
     * @example {"userId":"123432412831"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'jobStatus' => 'JobStatus',
        'requestId' => 'RequestId',
        'results'   => 'Results',
        'userData'  => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySmarttagJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}

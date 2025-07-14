<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosticResultResponseBody extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example i118913031696573280136
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The creation time.
     *
     * @example 2024-06-15T10:17:56
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The diagnostic task ID.
     *
     * @example diag-i155363241720059671316
     *
     * @var string
     */
    public $diagnosticId;

    /**
     * @description The diagnostic information.
     *
     * @var mixed[]
     */
    public $diagnosticResults;

    /**
     * @description The diagnostic status.
     *
     * @example Fault
     *
     * @var string
     */
    public $diagnosticState;

    /**
     * @description The type of the diagnostic task.
     *
     * @example CheckByAiJobLogs
     *
     * @var string
     */
    public $diagnosticType;

    /**
     * @description The end time of the instance exception. The time format with time zone based on the ISO8601 standard. The format is yyyy-MM-ddTHH:mm:ss +0800.
     *
     * @example 2024-06-11T10:00:30
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The node IDs.
     *
     * @var string[]
     */
    public $nodeIds;

    /**
     * @description The request ID.
     *
     * @example 8F065DDD-6996-5973-9691-9EC57BD0072E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'createdTime' => 'CreatedTime',
        'diagnosticId' => 'DiagnosticId',
        'diagnosticResults' => 'DiagnosticResults',
        'diagnosticState' => 'DiagnosticState',
        'diagnosticType' => 'DiagnosticType',
        'endTime' => 'EndTime',
        'nodeIds' => 'NodeIds',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->diagnosticId) {
            $res['DiagnosticId'] = $this->diagnosticId;
        }
        if (null !== $this->diagnosticResults) {
            $res['DiagnosticResults'] = $this->diagnosticResults;
        }
        if (null !== $this->diagnosticState) {
            $res['DiagnosticState'] = $this->diagnosticState;
        }
        if (null !== $this->diagnosticType) {
            $res['DiagnosticType'] = $this->diagnosticType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosticResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DiagnosticId'])) {
            $model->diagnosticId = $map['DiagnosticId'];
        }
        if (isset($map['DiagnosticResults'])) {
            if (!empty($map['DiagnosticResults'])) {
                $model->diagnosticResults = $map['DiagnosticResults'];
            }
        }
        if (isset($map['DiagnosticState'])) {
            $model->diagnosticState = $map['DiagnosticState'];
        }
        if (isset($map['DiagnosticType'])) {
            $model->diagnosticType = $map['DiagnosticType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

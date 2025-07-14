<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosticReportsRequest extends Model
{
    /**
     * @description The number of entries per page. Valid values: 1 to 100.
     *
     * Default value:
     *
     *   If this parameter is left empty, the default value is 10.
     *   If you set this parameter to a value that is greater than 100, the default value is 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of `NextToken`.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of diagnostic reports.
     *
     * @var string[]
     */
    public $reportIds;

    /**
     * @description The IDs of resources. You can specify up to 100 resource IDs.
     *
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description The severity level of the diagnostic report. Valid values:
     *
     *   Unknown: The diagnostic did not start, failed to run, or unexpectedly exited without a diagnosis.
     *   Normal: No exceptions were detected.
     *   Info: Diagnostic information was recorded and may be related to exceptions.
     *   Warn: Diagnostic information was recorded and may indicate exceptions.
     *   Critical: Critical exceptions were detected.
     *
     * @example Normal
     *
     * @var string
     */
    public $severity;

    /**
     * @description The status of the diagnostic report. Valid values:
     *
     *   InProgress
     *   Failed
     *   Finished
     *
     * @example Finished
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'reportIds' => 'ReportIds',
        'resourceIds' => 'ResourceIds',
        'severity' => 'Severity',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reportIds) {
            $res['ReportIds'] = $this->reportIds;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosticReportsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReportIds'])) {
            if (!empty($map['ReportIds'])) {
                $model->reportIds = $map['ReportIds'];
            }
        }
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

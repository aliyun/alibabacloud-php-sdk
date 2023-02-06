<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosticReportsRequest extends Model
{
    /**
     * @description The maximum number of entries to return on each page. Maximum value: 100.
     *
     * Default value:
     *
     *   If this parameter is left empty, the default value is 10.
     *   If this parameter is set to a value greater than 100, the default value is 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The query token. Set the value to the `NextToken` value returned in the last call to the DescribeDiagnosticReports operation. Leave this parameter empty the first time you call this operation.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID of the diagnostic report. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of diagnostic reports. You can specify up to 100 report IDs.
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
     * Unknown: The diagnostic has not started, failed to run, or exited unexpectedly without a diagnosis.
     * Normal: No exceptions are detected.
     * Info: Diagnostic information is recorded and may be related to exceptions.
     * Warn: Diagnostic information is recorded and may indicate exceptions.
     * Critical: Critical exceptions are detected.
     *
     * @example Normal
     *
     * @var string
     */
    public $severity;

    /**
     * @description The state of the diagnostic report. Valid values:
     *
     *   InProgress: The diagnostic is in progress.
     *   Failed: The diagnostic failed.
     *   Finished: The diagnostic is complete.
     *
     * @example Finished
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'regionId'    => 'RegionId',
        'reportIds'   => 'ReportIds',
        'resourceIds' => 'ResourceIds',
        'severity'    => 'Severity',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

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

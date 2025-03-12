<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportAttributesResponseBody\metricResults\metricResult\issues;

use AlibabaCloud\Tea\Model;

class issue extends Model
{
    /**
     * @description The additional data about the diagnosed issue. The value is a JSON string.
     *
     * @example {
     * }
     * @var string
     */
    public $additional;

    /**
     * @description The ID of the diagnosed issue, which is the unique identifier of the issue.
     *
     * @example GuestOS.CPU.HighUtiliz*****
     *
     * @var string
     */
    public $issueId;

    /**
     * @description The time when the diagnosed issue occurred.
     *
     * @example 2022-07-11T14:00:00Z
     *
     * @var string
     */
    public $occurrenceTime;

    /**
     * @description The severity level of the diagnosed issue. Valid values:
     *
     *   Info: Diagnostic information was recorded and may be related to exceptions.
     *   Warn: Diagnostic information was recorded and may indicate potential exceptions.
     *   Critical: Critical exceptions were detected.
     *
     * @example Info
     *
     * @var string
     */
    public $severity;
    protected $_name = [
        'additional'     => 'Additional',
        'issueId'        => 'IssueId',
        'occurrenceTime' => 'OccurrenceTime',
        'severity'       => 'Severity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additional) {
            $res['Additional'] = $this->additional;
        }
        if (null !== $this->issueId) {
            $res['IssueId'] = $this->issueId;
        }
        if (null !== $this->occurrenceTime) {
            $res['OccurrenceTime'] = $this->occurrenceTime;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return issue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Additional'])) {
            $model->additional = $map['Additional'];
        }
        if (isset($map['IssueId'])) {
            $model->issueId = $map['IssueId'];
        }
        if (isset($map['OccurrenceTime'])) {
            $model->occurrenceTime = $map['OccurrenceTime'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        return $model;
    }
}

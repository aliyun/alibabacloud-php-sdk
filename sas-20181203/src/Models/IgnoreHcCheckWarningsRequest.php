<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class IgnoreHcCheckWarningsRequest extends Model
{
    /**
     * @description The ID of the check item.
     *
     * >  You can call the [DescribeCheckWarnings](~~DescribeCheckWarnings~~) operation to query the IDs of check items.
     * @example 21313
     *
     * @var string
     */
    public $checkIds;

    /**
     * @description The ID of the alert that is triggered by the check item. Separate multiple IDs with commas (,).
     *
     * >  You can call the [DescribeCheckWarnings](~~DescribeCheckWarnings~~) operation to query the IDs of the alerts triggered by check items.
     * @example 98146905,98146907
     *
     * @var string
     */
    public $checkWarningIds;

    /**
     * @example ignore
     *
     * @var string
     */
    public $reason;

    /**
     * @description The ID of the risk item that you want to ignore or cancel ignoring.
     *
     * >  You can call the [DescribeCheckWarningSummary](~~DescribeCheckWarningSummary~~) operation to query the IDs of risk items.
     * @example 51
     *
     * @var string
     */
    public $riskId;

    /**
     * @description The data source. If this parameter is left empty, the server baseline results are queried by default. Valid values:
     *
     *   **default**: server
     *   **agentless**
     *
     * @example agentless
     *
     * @var string
     */
    public $source;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'checkIds'        => 'CheckIds',
        'checkWarningIds' => 'CheckWarningIds',
        'reason'          => 'Reason',
        'riskId'          => 'RiskId',
        'source'          => 'Source',
        'sourceIp'        => 'SourceIp',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkIds) {
            $res['CheckIds'] = $this->checkIds;
        }
        if (null !== $this->checkWarningIds) {
            $res['CheckWarningIds'] = $this->checkWarningIds;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IgnoreHcCheckWarningsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckIds'])) {
            $model->checkIds = $map['CheckIds'];
        }
        if (isset($map['CheckWarningIds'])) {
            $model->checkWarningIds = $map['CheckWarningIds'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

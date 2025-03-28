<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class FixCheckWarningsRequest extends Model
{
    /**
     * @description The parameters for the baseline risk item that you want to fix.
     *
     *   **checkId**: the ID of the check item that corresponds to the baseline risk item.
     *
     *   **rules**: an array that consists of the rules applied to fixes.
     *
     *   **value**: specifies whether a fix method is selected. Valid values: **0** and **1**. The value 0 indicates that no fix method is selected and the value 1 indicates that a fix method is selected.
     *   **ruleId**: the ID of the fix method.
     *   **paramList**: an array that consists of the details about the fix method.\\
     * • **paramName**: the name of the fix method.\\
     * • **value**: the value of the fix method.
     *
     * This parameter is required.
     *
     * @example [{"checkId":8,"rules":[{"ruleId":"rule.ssh_Idle.interval","value":1,"paramList":[{"paramName":"range_val","value":"600"},{"paramName":"range_val","value":"600"}]},{"ruleId":"rule.ssh_Idle.count","value":1,"paramList":[{"paramName":"range_val","value":"3"}]}]}]
     *
     * @var string
     */
    public $checkParams;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The retention period of the snapshot that is created when you fix the baseline risk. Valid values: 1 to 365. Unit: days.
     *
     * @example 1
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The ID of the risk item.
     *
     * >  To query the information about the risk items and check items of a server, you must specify the IDs of the risk items. You can call the [DescribeCheckWarningSummary](~~DescribeCheckWarningSummary~~) operation to query the IDs of risk items.
     *
     * @example 10354
     *
     * @var int
     */
    public $riskId;

    /**
     * @description The name of the snapshot that is created when you fix the baseline risk.
     *
     * @example sas_fix_2024-12-04
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description The source IP address of the request.
     *
     * @example 165.225.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The UUID of the asset for which you want to fix the baseline risk item. You can call the [DescribeWarningMachines](~~DescribeWarningMachines~~) operation to query the UUIDs of assets.
     *
     * @example 75a417dda5f25edb5bed8f208a9a****,c7e10fd794262a1510d5648f9e5d****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'checkParams' => 'CheckParams',
        'lang' => 'Lang',
        'retentionDays' => 'RetentionDays',
        'riskId' => 'RiskId',
        'snapshotName' => 'SnapshotName',
        'sourceIp' => 'SourceIp',
        'uuids' => 'Uuids',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkParams) {
            $res['CheckParams'] = $this->checkParams;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FixCheckWarningsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckParams'])) {
            $model->checkParams = $map['CheckParams'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}

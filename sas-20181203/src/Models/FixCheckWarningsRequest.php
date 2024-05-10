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
     * @description The ID of the baseline risk item.
     *
     * >  To query specified baseline risk items and the check items of a specified server, you must provide the IDs of the baseline risk items. You can call the [DescribeCheckWarningSummary](~~DescribeCheckWarningSummary~~) operation to query the IDs.
     * @example 10354
     *
     * @var int
     */
    public $riskId;

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
     * This parameter is required.
     * @example 75a417dda5f25edb5bed8f208a9a****,c7e10fd794262a1510d5648f9e5d****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'checkParams' => 'CheckParams',
        'lang'        => 'Lang',
        'riskId'      => 'RiskId',
        'sourceIp'    => 'SourceIp',
        'uuids'       => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkParams) {
            $res['CheckParams'] = $this->checkParams;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
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
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
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

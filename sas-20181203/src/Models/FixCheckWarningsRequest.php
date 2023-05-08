<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class FixCheckWarningsRequest extends Model
{
    /**
     * @description 165.225.XX.XX
     *
     * @example [{"checkId":8,"rules":[{"ruleId":"rule.ssh_Idle.interval","value":1,"paramList":[{"paramName":"range_val","value":"600"},{"paramName":"range_val","value":"600"}]},{"ruleId":"rule.ssh_Idle.count","value":1,"paramList":[{"paramName":"range_val","value":"3"}]}]}]
     *
     * @var string
     */
    public $checkParams;

    /**
     * @description The ID of the request.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The source IP address of the request.
     *
     * @example 10354
     *
     * @var int
     */
    public $riskId;

    /**
     * @description The UUID of the asset for which you want to fix the baseline risk item. You can call the [DescribeWarningMachines](~~DescribeWarningMachines~~) operation to query the UUIDs of assets.
     *
     * @example 165.225.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description Fixes a baseline risk item.
     *
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

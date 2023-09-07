<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyMaskingRulesRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * > You can call the [DescribeDBClusters](~~98094~~) operation to query the details of the clusters that belong to your Alibaba Cloud account, such as cluster IDs.
     * @example pc-*****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specifies whether to enable the specified masking rule. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is valid only when the `RuleNameList` parameter is specfied.
     * @example true
     *
     * @var string
     */
    public $enable;

    /**
     * @description The parameter that is used to specify the masking rule that you want to modify and the value in the JSON format. All parameter values are of the string type. Example: `{"auto": {"databases": ["db1"], "tables": ["tb1"], "columns": ["c1,c2"] }, "description": "This rule will be applied to the columns c1 and c2 in table t1", "enabled": true, "applies_to": ["user"]}`. Parameters in the function:
     *
     *   `"auto"`: specifies that the dynamic masking algorithm is supported. This parameter is required.
     *   `"databases"`: Optional. The names of databases to which the masking rule is applied. Separate the names with commas (,). If you leave this parameter empty, the masking rule applies to all databases in the cluster.
     *   `"tables"`: Optional. The names of tables to which the masking rule is applied. Separate the names with commas (,). If you leave this parameter empty, the rule applies to all tables in the cluster.
     *   `"columns"`: Required. The names of fields to which the masking rule is applied. Separate the names with commas (,).
     *   `"description"`: Optional. The description of the masking rule. The description can be up to 64 characters in length.
     *   `"enabled"`: Required. Specifies whether to enable the masking rule. Valid values: **true** and **false**.
     *   `"applies_to"`: The names of database accounts to which the masking rule is applied. Separate the names with commas (,).
     *   `"exempted"`: The names of database accounts to which the masking rule is not applied. Separate the names with commas (,).
     *
     * >- You need to select either `"applies_to"` or `"exempted"`.
     * @example {"auto": {"databases": ["db1"], "tables": ["tb1"], "columns": ["c1,c2"] }, "description": "This rule will be applied to the columns c1 and c2 in table t1", "enabled": true, "applies_to": ["user"]}
     *
     * @var string
     */
    public $ruleConfig;

    /**
     * @description The name of the data masking rule. You can specify only one rule name at a time.
     *
     * >- If the rule name does not exist in the cluster, the system automatically creates a masking rule based on the name and the value of `RuleConfig`.
     * @example testrule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The list of masking rule names. You can specify one or more masking rules at a time. Separate the masking rule names with commas (,).
     *
     * > You must specify either the `RuleName` or `RuleNameList` parameter.
     * @example testrule
     *
     * @var string
     */
    public $ruleNameList;
    protected $_name = [
        'DBClusterId'  => 'DBClusterId',
        'enable'       => 'Enable',
        'ruleConfig'   => 'RuleConfig',
        'ruleName'     => 'RuleName',
        'ruleNameList' => 'RuleNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->ruleConfig) {
            $res['RuleConfig'] = $this->ruleConfig;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleNameList) {
            $res['RuleNameList'] = $this->ruleNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMaskingRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['RuleConfig'])) {
            $model->ruleConfig = $map['RuleConfig'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleNameList'])) {
            $model->ruleNameList = $map['RuleNameList'];
        }

        return $model;
    }
}

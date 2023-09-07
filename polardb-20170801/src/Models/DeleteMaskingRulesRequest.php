<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteMaskingRulesRequest extends Model
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
     * @description The name of the masking rule. You can specify multiple masking rules at a time. Separate the masking rules with commas (,).
     *
     * > You can call the [DescribeMaskingRules](~~212573~~) operation to query details of all the masking rules for a specified cluster, such as the names of the masking rules.
     * @example testrule
     *
     * @var string
     */
    public $ruleNameList;
    protected $_name = [
        'DBClusterId'  => 'DBClusterId',
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
        if (null !== $this->ruleNameList) {
            $res['RuleNameList'] = $this->ruleNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMaskingRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RuleNameList'])) {
            $model->ruleNameList = $map['RuleNameList'];
        }

        return $model;
    }
}

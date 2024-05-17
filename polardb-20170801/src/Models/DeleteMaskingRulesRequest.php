<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteMaskingRulesRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example pc-*****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the masking rule. You can specify multiple masking rules at a time. Separate the masking rules with commas (,).
     *
     * This parameter is required.
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

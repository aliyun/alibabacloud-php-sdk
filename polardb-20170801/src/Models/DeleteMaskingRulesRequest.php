<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeleteMaskingRulesRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * > You can call the [DescribeDBClusters](https://help.aliyun.com/document_detail/98094.html) operation to query the details of the clusters that belong to your Alibaba Cloud account, such as cluster IDs.
     *
     * This parameter is required.
     *
     * @example pc-*****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $interfaceVersion;

    /**
     * @description The name of the masking rule. You can specify multiple masking rules at a time. Separate the masking rules with commas (,).
     *
     * > You can call the [DescribeMaskingRules](https://help.aliyun.com/document_detail/212573.html) operation to query details of all the masking rules for a specified cluster, such as the names of the masking rules.
     *
     * This parameter is required.
     *
     * @example testrule
     *
     * @var string
     */
    public $ruleNameList;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'interfaceVersion' => 'InterfaceVersion',
        'ruleNameList' => 'RuleNameList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->interfaceVersion) {
            $res['InterfaceVersion'] = $this->interfaceVersion;
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
        if (isset($map['InterfaceVersion'])) {
            $model->interfaceVersion = $map['InterfaceVersion'];
        }
        if (isset($map['RuleNameList'])) {
            $model->ruleNameList = $map['RuleNameList'];
        }

        return $model;
    }
}

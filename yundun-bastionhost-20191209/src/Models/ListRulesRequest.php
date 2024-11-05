<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListRulesRequest extends Model
{
    /**
     * @description The bastion host ID.
     *
     * This parameter is required.
     * @example bastionhost-cn-5yd34ol020a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.\\
     * > We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The region ID of the bastion host.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the authorization rule to query. Only exact match is supported.
     *
     * @example rule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The state of the authorization rule to query.
     *
     *   **Enabled**
     *   **Disabled**
     *
     * @example Enabled
     *
     * @var string
     */
    public $ruleState;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'regionId'   => 'RegionId',
        'ruleName'   => 'RuleName',
        'ruleState'  => 'RuleState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleState) {
            $res['RuleState'] = $this->ruleState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleState'])) {
            $model->ruleState = $map['RuleState'];
        }

        return $model;
    }
}

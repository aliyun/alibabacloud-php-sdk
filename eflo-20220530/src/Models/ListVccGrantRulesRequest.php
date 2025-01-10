<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class ListVccGrantRulesRequest extends Model
{
    /**
     * @description Specifies whether to enable paged query. Optional values:
     *
     *   **true**: Enable pagination query
     *   **false**: Pagination query is disabled
     *
     * @example false
     *
     * @var bool
     */
    public $enablePage;

    /**
     * @description Lingjun HUB ID
     *
     * @example er-kkopgtne
     *
     * @var string
     */
    public $erId;

    /**
     * @description Use the drop-down box
     *
     * @example true
     *
     * @var bool
     */
    public $forSelect;

    /**
     * @description Authorization Entry ID
     *
     * @example grant-rule-jaj33d1b804
     *
     * @var string
     */
    public $grantRuleId;

    /**
     * @description Authorized Tenant ID
     *
     * @example 1620939556166277
     *
     * @var string
     */
    public $grantTenantId;

    /**
     * @description Network Instance ID
     *
     * @example vcc-cn-jaj33d1b804
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Instance name
     *
     * @example vcc-1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The page number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group instance ID
     *
     * @example rg-aekzb3n5lgk2ieq
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'enablePage'      => 'EnablePage',
        'erId'            => 'ErId',
        'forSelect'       => 'ForSelect',
        'grantRuleId'     => 'GrantRuleId',
        'grantTenantId'   => 'GrantTenantId',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enablePage) {
            $res['EnablePage'] = $this->enablePage;
        }
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }
        if (null !== $this->forSelect) {
            $res['ForSelect'] = $this->forSelect;
        }
        if (null !== $this->grantRuleId) {
            $res['GrantRuleId'] = $this->grantRuleId;
        }
        if (null !== $this->grantTenantId) {
            $res['GrantTenantId'] = $this->grantTenantId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVccGrantRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnablePage'])) {
            $model->enablePage = $map['EnablePage'];
        }
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }
        if (isset($map['ForSelect'])) {
            $model->forSelect = $map['ForSelect'];
        }
        if (isset($map['GrantRuleId'])) {
            $model->grantRuleId = $map['GrantRuleId'];
        }
        if (isset($map['GrantTenantId'])) {
            $model->grantTenantId = $map['GrantTenantId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}

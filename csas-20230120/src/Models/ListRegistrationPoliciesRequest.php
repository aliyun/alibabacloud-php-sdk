<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListRegistrationPoliciesRequest extends Model
{
    /**
     * @example LimitAll
     *
     * @var string
     */
    public $companyLimitType;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example UserGroupAll
     *
     * @var string
     */
    public $matchMode;

    /**
     * @example registration_policy_name
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example LimitDiff
     *
     * @var string
     */
    public $personalLimitType;

    /**
     * @var string[]
     */
    public $policyIds;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @example usergroup-6f1ef2fc56b6****
     *
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'companyLimitType'  => 'CompanyLimitType',
        'currentPage'       => 'CurrentPage',
        'matchMode'         => 'MatchMode',
        'name'              => 'Name',
        'pageSize'          => 'PageSize',
        'personalLimitType' => 'PersonalLimitType',
        'policyIds'         => 'PolicyIds',
        'status'            => 'Status',
        'userGroupId'       => 'UserGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->companyLimitType) {
            $res['CompanyLimitType'] = $this->companyLimitType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->personalLimitType) {
            $res['PersonalLimitType'] = $this->personalLimitType;
        }
        if (null !== $this->policyIds) {
            $res['PolicyIds'] = $this->policyIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRegistrationPoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompanyLimitType'])) {
            $model->companyLimitType = $map['CompanyLimitType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PersonalLimitType'])) {
            $model->personalLimitType = $map['PersonalLimitType'];
        }
        if (isset($map['PolicyIds'])) {
            if (!empty($map['PolicyIds'])) {
                $model->policyIds = $map['PolicyIds'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}

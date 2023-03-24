<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListPrivateAccessPolicesRequest extends Model
{
    /**
     * @example pa-application-e12860ef6c48****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example private_access_policy_name
     *
     * @var string
     */
    public $name;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example Allow
     *
     * @var string
     */
    public $policyAction;

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
     * @example tag-c0cb77857a99****
     *
     * @var string
     */
    public $tagId;

    /**
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'currentPage'   => 'CurrentPage',
        'name'          => 'Name',
        'pageSize'      => 'PageSize',
        'policyAction'  => 'PolicyAction',
        'policyIds'     => 'PolicyIds',
        'status'        => 'Status',
        'tagId'         => 'TagId',
        'userGroupId'   => 'UserGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->policyAction) {
            $res['PolicyAction'] = $this->policyAction;
        }
        if (null !== $this->policyIds) {
            $res['PolicyIds'] = $this->policyIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrivateAccessPolicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PolicyAction'])) {
            $model->policyAction = $map['PolicyAction'];
        }
        if (isset($map['PolicyIds'])) {
            if (!empty($map['PolicyIds'])) {
                $model->policyIds = $map['PolicyIds'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}

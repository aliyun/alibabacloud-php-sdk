<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListPrivateAccessPolicesRequest extends Model
{
    /**
     * @description The ID of the office application. Either the ID or tag of the office application is used for queries. You can obtain the value by calling the following operations:
     *
     *   [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~): queries office applications.
     *   [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~): creates an office application.
     *
     * @example pa-application-e12860ef6c48****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The name of the office application.
     *
     * @example Office
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The page number. Valid values: 1 to 10000.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the private access policy. The value must be 1 to 128 characters in length and can contain letters, digits, hyphens (-), underscores (_), and periods (.).
     *
     * @example private_access_policy_name
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of entries per page. Valid values: 1 to 1000.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The action in the private access policy. Valid values:
     *
     *   **Block**
     *   **Allow**
     *
     * @example Allow
     *
     * @var string
     */
    public $policyAction;

    /**
     * @description The IDs of the private access policies. You can enter up to 100 IDs.
     *
     * @var string[]
     */
    public $policyIds;

    /**
     * @description The status of the private access policy. Valid values:
     *
     *   **Enabled**
     *   **Disabled**
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the tag for the office application. Either the ID or tag of the office application is used for queries. You can obtain the value by calling the following operations:
     *
     *   [ListPrivateAccessTags](~~ListPrivateAccessTags~~): queries tags for office applications.
     *   [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~): creates a tag for office applications.
     *
     * @example tag-c0cb77857a99****
     *
     * @var string
     */
    public $tagId;

    /**
     * @description The name of the tag.
     *
     * @example Cloud service
     *
     * @var string
     */
    public $tagName;

    /**
     * @description The ID of the user group. You can obtain the value by calling the following operations:
     *
     *   [ListUserGroups](~~ListUserGroups~~): queries user groups.
     *   [CreateUserGroup](~~CreateUserGroup~~): creates a user group.
     *
     * @example usergroup-6f1ef2fc56b6****
     *
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'applicationName' => 'ApplicationName',
        'currentPage' => 'CurrentPage',
        'name' => 'Name',
        'pageSize' => 'PageSize',
        'policyAction' => 'PolicyAction',
        'policyIds' => 'PolicyIds',
        'status' => 'Status',
        'tagId' => 'TagId',
        'tagName' => 'TagName',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
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
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
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
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
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
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}

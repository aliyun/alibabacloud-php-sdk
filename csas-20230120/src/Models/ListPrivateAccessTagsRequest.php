<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListPrivateAccessTagsRequest extends Model
{
    /**
     * @description The ID of the internal access application. You can obtain the application ID by calling the following operations:
     *
     *   [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~): queries all internal access applications.
     *   [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~): creates an internal access application.
     *
     * @example pa-application-e12860ef6c48****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The page number. Valid values: 1 to 10000.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the internal access tag. The name must be 1 to 128 characters in length and can contain letters, digits, periods (.), underscores (_), and hyphens (-).
     *
     * @example tag_name
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of entries per page. Valid values: 1 to 1000.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the internal access policy. You can obtain the policy ID by calling the following operations:
     *
     *   [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~): queries all internal access policies.
     *   [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~): creates an internal access policy.
     *
     * @example pa-policy-54a7838a48bf****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description Specifies whether to enable the simple query mode. A value of true specifies that policy IDs are not queried.
     *
     * @example true
     *
     * @var bool
     */
    public $simpleMode;

    /**
     * @description The IDs of internal access tags. You can specify up to 100 tag IDs.
     *
     * @var string[]
     */
    public $tagIds;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'currentPage'   => 'CurrentPage',
        'name'          => 'Name',
        'pageSize'      => 'PageSize',
        'policyId'      => 'PolicyId',
        'simpleMode'    => 'SimpleMode',
        'tagIds'        => 'TagIds',
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
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->simpleMode) {
            $res['SimpleMode'] = $this->simpleMode;
        }
        if (null !== $this->tagIds) {
            $res['TagIds'] = $this->tagIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrivateAccessTagsRequest
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
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['SimpleMode'])) {
            $model->simpleMode = $map['SimpleMode'];
        }
        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = $map['TagIds'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeCenterPolicyListRequest extends Model
{
    /**
     * @description The business type.
     *
     * Valid values:
     *
     *   1: public cloud
     *   8: commercial edition.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $businessType;

    /**
     * @description The page number.\\
     * Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The IDs of the cloud computer policies.
     *
     * @var string[]
     */
    public $policyGroupId;

    /**
     * @description The resource type.
     *
     * Valid values:
     *
     *   app: cloud applications.
     *   desktop: cloud computers.
     *
     * This parameter is required.
     *
     * @example desktop
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The effective scope of the cloud computer policy.
     *
     * Valid values:
     *
     *   IP: The policy applies to specific IP addresses.
     *   GLOBAL: The policy applies globally.
     *
     * @example GLOBAL
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'businessType' => 'BusinessType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'policyGroupId' => 'PolicyGroupId',
        'resourceType' => 'ResourceType',
        'scope' => 'Scope',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCenterPolicyListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PolicyGroupId'])) {
            if (!empty($map['PolicyGroupId'])) {
                $model->policyGroupId = $map['PolicyGroupId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}

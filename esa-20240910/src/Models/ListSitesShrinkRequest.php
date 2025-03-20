<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListSitesShrinkRequest extends Model
{
    /**
     * @description Access type. Values:
     *
     * - **NS**: Access through NS hosting.
     * - **CNAME**: Access through CNAME.
     *
     * @example NS
     *
     * @var string
     */
    public $accessType;

    /**
     * @description Acceleration region. Values:
     * - **domestic**: China mainland only.
     * - **global**: Global.
     * - **overseas**: Global (excluding China mainland).
     *
     * @example global
     *
     * @var string
     */
    public $coverage;

    /**
     * @description Enterprise edition only. When set to **true**, it indicates that only enterprise edition sites are queried.
     *
     * @example false
     *
     * @var bool
     */
    public $onlyEnterprise;

    /**
     * @description Sorting field, default sorted by creation time, supports:
     * - gmtCreate: Site creation time
     * - visitTime: Site access time
     *
     * @example visitTime
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description Page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Page size. Default value: **500**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Plan subscription type. Values:
     * - **basicplan**: Basic plan.
     * - **standardplan**: Standard plan.
     * - **advancedplan**: Advanced plan.
     * - **enterpriseplan**: Enterprise plan.
     *
     * @example basicplan
     *
     * @var string
     */
    public $planSubscribeType;

    /**
     * @description Resource group ID. Used as a filter condition for the query.
     *
     * @example rg-aekzd3styujvyei
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Site name. Used as a filter condition for the query.
     *
     * @example example.com
     *
     * @var string
     */
    public $siteName;

    /**
     * @description Search match pattern for the site name. The default is exact match, with values:
     *
     * - **prefix**: Prefix match.
     * - **suffix**: Suffix match.
     * - **exact**: Exact match.
     * - **fuzzy**: Fuzzy match.
     *
     * @example fuzzy
     *
     * @var string
     */
    public $siteSearchType;

    /**
     * @description Site status. Used as a filter condition for the query.
     *
     * @example pending
     *
     * @var string
     */
    public $status;

    /**
     * @description Tag filtering rules.
     *
     * @var string
     */
    public $tagFilterShrink;
    protected $_name = [
        'accessType' => 'AccessType',
        'coverage' => 'Coverage',
        'onlyEnterprise' => 'OnlyEnterprise',
        'orderBy' => 'OrderBy',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'planSubscribeType' => 'PlanSubscribeType',
        'resourceGroupId' => 'ResourceGroupId',
        'siteName' => 'SiteName',
        'siteSearchType' => 'SiteSearchType',
        'status' => 'Status',
        'tagFilterShrink' => 'TagFilter',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->coverage) {
            $res['Coverage'] = $this->coverage;
        }
        if (null !== $this->onlyEnterprise) {
            $res['OnlyEnterprise'] = $this->onlyEnterprise;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->planSubscribeType) {
            $res['PlanSubscribeType'] = $this->planSubscribeType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }
        if (null !== $this->siteSearchType) {
            $res['SiteSearchType'] = $this->siteSearchType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagFilterShrink) {
            $res['TagFilter'] = $this->tagFilterShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSitesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['Coverage'])) {
            $model->coverage = $map['Coverage'];
        }
        if (isset($map['OnlyEnterprise'])) {
            $model->onlyEnterprise = $map['OnlyEnterprise'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PlanSubscribeType'])) {
            $model->planSubscribeType = $map['PlanSubscribeType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }
        if (isset($map['SiteSearchType'])) {
            $model->siteSearchType = $map['SiteSearchType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagFilter'])) {
            $model->tagFilterShrink = $map['TagFilter'];
        }

        return $model;
    }
}

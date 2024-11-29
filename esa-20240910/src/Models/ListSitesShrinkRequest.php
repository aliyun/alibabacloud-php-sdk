<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListSitesShrinkRequest extends Model
{
    /**
     * @description The DNS setup. Valid values:
     *
     *   **NS**
     *   **CNAME**
     *
     * @example NS
     *
     * @var string
     */
    public $accessType;

    /**
     * @description The service location. Valid values:
     *
     *   **domestic**: the Chinese mainland
     *   **global**: global
     *   **overseas**: outside the Chinese mainland
     *
     * @example global
     *
     * @var string
     */
    public $coverage;

    /**
     * @description Specifies whether to query only websites on Enterprise plans. Valid values: **true and false**.
     *
     * @example false
     *
     * @var bool
     */
    public $onlyEnterprise;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: **500**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The plan type. Valid values:
     *
     *   **basicplan**: Entrance (coming soon)
     *   **standardplan**: Pro
     *   **advancedplan**: Premium
     *   **enterpriseplan**: Enterprise
     *
     * @example basicplan
     *
     * @var string
     */
    public $planSubscribeType;

    /**
     * @description The ID of the resource group. This parameter specifies a filter condition for the query.
     *
     * @example rg-aekzd3styujvyei
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The website name. This parameter specifies a filter condition for the query.
     *
     * @example example.com
     *
     * @var string
     */
    public $siteName;

    /**
     * @description The match mode to search for the website name. Default value: exact. Valid values:
     *
     *   **prefix**: match by prefix.
     *   **suffix**: match by suffix.
     *   **exact**: exact match.
     *   **fuzzy**: fuzzy match.
     *
     * @example fuzzy
     *
     * @var string
     */
    public $siteSearchType;

    /**
     * @description The website status. This parameter specifies a filter condition for the query.
     *
     * @example pending
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag filtering rule.
     *
     * @var string
     */
    public $tagFilterShrink;
    protected $_name = [
        'accessType'        => 'AccessType',
        'coverage'          => 'Coverage',
        'onlyEnterprise'    => 'OnlyEnterprise',
        'orderBy'           => 'OrderBy',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'planSubscribeType' => 'PlanSubscribeType',
        'resourceGroupId'   => 'ResourceGroupId',
        'siteName'          => 'SiteName',
        'siteSearchType'    => 'SiteSearchType',
        'status'            => 'Status',
        'tagFilterShrink'   => 'TagFilter',
    ];

    public function validate()
    {
    }

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

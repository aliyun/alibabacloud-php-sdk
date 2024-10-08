<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListSitesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $coverage;

    /**
     * @example false
     *
     * @var bool
     */
    public $onlyEnterprise;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $planSubscribeType;

    /**
     * @example rg-aekzd3styujvyei
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example example.com
     *
     * @var string
     */
    public $siteName;

    /**
     * @example fuzzy
     *
     * @var string
     */
    public $siteSearchType;

    /**
     * @example pending
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tagFilterShrink;
    protected $_name = [
        'accessType'        => 'AccessType',
        'coverage'          => 'Coverage',
        'onlyEnterprise'    => 'OnlyEnterprise',
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

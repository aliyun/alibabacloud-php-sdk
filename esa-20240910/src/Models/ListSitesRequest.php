<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSitesRequest\tagFilter;

class ListSitesRequest extends Model
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
     * @var bool
     */
    public $onlyEnterprise;
    /**
     * @var string
     */
    public $orderBy;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $planSubscribeType;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $siteName;
    /**
     * @var string
     */
    public $siteSearchType;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tagFilter[]
     */
    public $tagFilter;
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
        'tagFilter'         => 'TagFilter',
    ];

    public function validate()
    {
        if (\is_array($this->tagFilter)) {
            Model::validateArray($this->tagFilter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->tagFilter) {
            if (\is_array($this->tagFilter)) {
                $res['TagFilter'] = [];
                $n1               = 0;
                foreach ($this->tagFilter as $item1) {
                    $res['TagFilter'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['TagFilter'])) {
                $model->tagFilter = [];
                $n1               = 0;
                foreach ($map['TagFilter'] as $item1) {
                    $model->tagFilter[$n1++] = tagFilter::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

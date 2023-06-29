<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataObjectsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 2
     *
     * @var int
     */
    public $domainId;

    /**
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @example 101,102
     *
     * @var string
     */
    public $modelTagIds;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 234,236,238
     *
     * @var string
     */
    public $parentCategoryIds;

    /**
     * @example 1,5
     *
     * @var string
     */
    public $productIds;

    /**
     * @example t_sddp_selfmysql_pers0
     *
     * @var string
     */
    public $queryName;

    /**
     * @example 2
     *
     * @var string
     */
    public $riskLevels;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $serviceRegionId;

    /**
     * @example 1
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'domainId'          => 'DomainId',
        'lang'              => 'Lang',
        'modelTagIds'       => 'ModelTagIds',
        'pageSize'          => 'PageSize',
        'parentCategoryIds' => 'ParentCategoryIds',
        'productIds'        => 'ProductIds',
        'queryName'         => 'QueryName',
        'riskLevels'        => 'RiskLevels',
        'serviceRegionId'   => 'ServiceRegionId',
        'templateId'        => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->modelTagIds) {
            $res['ModelTagIds'] = $this->modelTagIds;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentCategoryIds) {
            $res['ParentCategoryIds'] = $this->parentCategoryIds;
        }
        if (null !== $this->productIds) {
            $res['ProductIds'] = $this->productIds;
        }
        if (null !== $this->queryName) {
            $res['QueryName'] = $this->queryName;
        }
        if (null !== $this->riskLevels) {
            $res['RiskLevels'] = $this->riskLevels;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataObjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ModelTagIds'])) {
            $model->modelTagIds = $map['ModelTagIds'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentCategoryIds'])) {
            $model->parentCategoryIds = $map['ParentCategoryIds'];
        }
        if (isset($map['ProductIds'])) {
            $model->productIds = $map['ProductIds'];
        }
        if (isset($map['QueryName'])) {
            $model->queryName = $map['QueryName'];
        }
        if (isset($map['RiskLevels'])) {
            $model->riskLevels = $map['RiskLevels'];
        }
        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}

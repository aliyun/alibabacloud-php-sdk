<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class DescribeDataObjectsRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $domainId;
    /**
     * @var int
     */
    public $featureType;
    /**
     * @var int
     */
    public $fileCategoryCode;
    /**
     * @var int
     */
    public $fileType;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $memberAccount;
    /**
     * @var string
     */
    public $modelIds;
    /**
     * @var string
     */
    public $modelTagIds;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $parentCategoryIds;
    /**
     * @var string
     */
    public $productIds;
    /**
     * @var string
     */
    public $queryName;
    /**
     * @var string
     */
    public $riskLevels;
    /**
     * @var string
     */
    public $serviceRegionId;
    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'domainId'          => 'DomainId',
        'featureType'       => 'FeatureType',
        'fileCategoryCode'  => 'FileCategoryCode',
        'fileType'          => 'FileType',
        'instanceId'        => 'InstanceId',
        'lang'              => 'Lang',
        'memberAccount'     => 'MemberAccount',
        'modelIds'          => 'ModelIds',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }

        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }

        if (null !== $this->fileCategoryCode) {
            $res['FileCategoryCode'] = $this->fileCategoryCode;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->memberAccount) {
            $res['MemberAccount'] = $this->memberAccount;
        }

        if (null !== $this->modelIds) {
            $res['ModelIds'] = $this->modelIds;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }

        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }

        if (isset($map['FileCategoryCode'])) {
            $model->fileCategoryCode = $map['FileCategoryCode'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MemberAccount'])) {
            $model->memberAccount = $map['MemberAccount'];
        }

        if (isset($map['ModelIds'])) {
            $model->modelIds = $map['ModelIds'];
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

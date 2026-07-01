<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDatasetsRequest;

use AlibabaCloud\Dara\Model;

class datasetQuery extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $dataUnit;

    /**
     * @var bool
     */
    public $includeVersionList;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string[]
     */
    public $typeList;
    protected $_name = [
        'contentType' => 'ContentType',
        'dataUnit' => 'DataUnit',
        'includeVersionList' => 'IncludeVersionList',
        'keyword' => 'Keyword',
        'owner' => 'Owner',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'scenario' => 'Scenario',
        'storageType' => 'StorageType',
        'tenantId' => 'TenantId',
        'typeList' => 'TypeList',
    ];

    public function validate()
    {
        if (\is_array($this->typeList)) {
            Model::validateArray($this->typeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->dataUnit) {
            $res['DataUnit'] = $this->dataUnit;
        }

        if (null !== $this->includeVersionList) {
            $res['IncludeVersionList'] = $this->includeVersionList;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->typeList) {
            if (\is_array($this->typeList)) {
                $res['TypeList'] = [];
                $n1 = 0;
                foreach ($this->typeList as $item1) {
                    $res['TypeList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['DataUnit'])) {
            $model->dataUnit = $map['DataUnit'];
        }

        if (isset($map['IncludeVersionList'])) {
            $model->includeVersionList = $map['IncludeVersionList'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TypeList'])) {
            if (!empty($map['TypeList'])) {
                $model->typeList = [];
                $n1 = 0;
                foreach ($map['TypeList'] as $item1) {
                    $model->typeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

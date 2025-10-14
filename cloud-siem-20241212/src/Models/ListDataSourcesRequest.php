<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ListDataSourcesRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceFrom;

    /**
     * @var string[]
     */
    public $dataSourceIds;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $dataSourceStatus;

    /**
     * @var string
     */
    public $dataSourceStoreStatus;

    /**
     * @var string[]
     */
    public $dataSourceTemplateIds;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $logProjectName;

    /**
     * @var string
     */
    public $logRegionId;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var int[]
     */
    public $logUserIds;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $orderField;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'dataSourceFrom' => 'DataSourceFrom',
        'dataSourceIds' => 'DataSourceIds',
        'dataSourceName' => 'DataSourceName',
        'dataSourceStatus' => 'DataSourceStatus',
        'dataSourceStoreStatus' => 'DataSourceStoreStatus',
        'dataSourceTemplateIds' => 'DataSourceTemplateIds',
        'dataSourceType' => 'DataSourceType',
        'lang' => 'Lang',
        'logProjectName' => 'LogProjectName',
        'logRegionId' => 'LogRegionId',
        'logStoreName' => 'LogStoreName',
        'logUserIds' => 'LogUserIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'order' => 'Order',
        'orderField' => 'OrderField',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceIds)) {
            Model::validateArray($this->dataSourceIds);
        }
        if (\is_array($this->dataSourceTemplateIds)) {
            Model::validateArray($this->dataSourceTemplateIds);
        }
        if (\is_array($this->logUserIds)) {
            Model::validateArray($this->logUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceFrom) {
            $res['DataSourceFrom'] = $this->dataSourceFrom;
        }

        if (null !== $this->dataSourceIds) {
            if (\is_array($this->dataSourceIds)) {
                $res['DataSourceIds'] = [];
                $n1 = 0;
                foreach ($this->dataSourceIds as $item1) {
                    $res['DataSourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->dataSourceStatus) {
            $res['DataSourceStatus'] = $this->dataSourceStatus;
        }

        if (null !== $this->dataSourceStoreStatus) {
            $res['DataSourceStoreStatus'] = $this->dataSourceStoreStatus;
        }

        if (null !== $this->dataSourceTemplateIds) {
            if (\is_array($this->dataSourceTemplateIds)) {
                $res['DataSourceTemplateIds'] = [];
                $n1 = 0;
                foreach ($this->dataSourceTemplateIds as $item1) {
                    $res['DataSourceTemplateIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->logProjectName) {
            $res['LogProjectName'] = $this->logProjectName;
        }

        if (null !== $this->logRegionId) {
            $res['LogRegionId'] = $this->logRegionId;
        }

        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->logUserIds) {
            if (\is_array($this->logUserIds)) {
                $res['LogUserIds'] = [];
                $n1 = 0;
                foreach ($this->logUserIds as $item1) {
                    $res['LogUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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
        if (isset($map['DataSourceFrom'])) {
            $model->dataSourceFrom = $map['DataSourceFrom'];
        }

        if (isset($map['DataSourceIds'])) {
            if (!empty($map['DataSourceIds'])) {
                $model->dataSourceIds = [];
                $n1 = 0;
                foreach ($map['DataSourceIds'] as $item1) {
                    $model->dataSourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }

        if (isset($map['DataSourceStatus'])) {
            $model->dataSourceStatus = $map['DataSourceStatus'];
        }

        if (isset($map['DataSourceStoreStatus'])) {
            $model->dataSourceStoreStatus = $map['DataSourceStoreStatus'];
        }

        if (isset($map['DataSourceTemplateIds'])) {
            if (!empty($map['DataSourceTemplateIds'])) {
                $model->dataSourceTemplateIds = [];
                $n1 = 0;
                foreach ($map['DataSourceTemplateIds'] as $item1) {
                    $model->dataSourceTemplateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LogProjectName'])) {
            $model->logProjectName = $map['LogProjectName'];
        }

        if (isset($map['LogRegionId'])) {
            $model->logRegionId = $map['LogRegionId'];
        }

        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['LogUserIds'])) {
            if (!empty($map['LogUserIds'])) {
                $model->logUserIds = [];
                $n1 = 0;
                foreach ($map['LogUserIds'] as $item1) {
                    $model->logUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}

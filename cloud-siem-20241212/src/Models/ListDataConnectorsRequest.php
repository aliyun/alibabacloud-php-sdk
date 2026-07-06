<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ListDataConnectorsRequest extends Model
{
    /**
     * @var string[]
     */
    public $dataConnectorIds;

    /**
     * @var string
     */
    public $dataConnectorName;

    /**
     * @var string
     */
    public $dataConnectorStatus;

    /**
     * @var string
     */
    public $dataConnectorType;

    /**
     * @var string
     */
    public $destDataSourceId;

    /**
     * @var string
     */
    public $lang;

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
    public $orderField;

    /**
     * @var string
     */
    public $orderType;

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
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var string
     */
    public $slsIngestionJobName;

    /**
     * @var string
     */
    public $srcDataType;
    protected $_name = [
        'dataConnectorIds' => 'DataConnectorIds',
        'dataConnectorName' => 'DataConnectorName',
        'dataConnectorStatus' => 'DataConnectorStatus',
        'dataConnectorType' => 'DataConnectorType',
        'destDataSourceId' => 'DestDataSourceId',
        'lang' => 'Lang',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orderField' => 'OrderField',
        'orderType' => 'OrderType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
        'slsIngestionJobName' => 'SlsIngestionJobName',
        'srcDataType' => 'SrcDataType',
    ];

    public function validate()
    {
        if (\is_array($this->dataConnectorIds)) {
            Model::validateArray($this->dataConnectorIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataConnectorIds) {
            if (\is_array($this->dataConnectorIds)) {
                $res['DataConnectorIds'] = [];
                $n1 = 0;
                foreach ($this->dataConnectorIds as $item1) {
                    $res['DataConnectorIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataConnectorName) {
            $res['DataConnectorName'] = $this->dataConnectorName;
        }

        if (null !== $this->dataConnectorStatus) {
            $res['DataConnectorStatus'] = $this->dataConnectorStatus;
        }

        if (null !== $this->dataConnectorType) {
            $res['DataConnectorType'] = $this->dataConnectorType;
        }

        if (null !== $this->destDataSourceId) {
            $res['DestDataSourceId'] = $this->destDataSourceId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
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

        if (null !== $this->slsIngestionJobName) {
            $res['SlsIngestionJobName'] = $this->slsIngestionJobName;
        }

        if (null !== $this->srcDataType) {
            $res['SrcDataType'] = $this->srcDataType;
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
        if (isset($map['DataConnectorIds'])) {
            if (!empty($map['DataConnectorIds'])) {
                $model->dataConnectorIds = [];
                $n1 = 0;
                foreach ($map['DataConnectorIds'] as $item1) {
                    $model->dataConnectorIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DataConnectorName'])) {
            $model->dataConnectorName = $map['DataConnectorName'];
        }

        if (isset($map['DataConnectorStatus'])) {
            $model->dataConnectorStatus = $map['DataConnectorStatus'];
        }

        if (isset($map['DataConnectorType'])) {
            $model->dataConnectorType = $map['DataConnectorType'];
        }

        if (isset($map['DestDataSourceId'])) {
            $model->destDataSourceId = $map['DestDataSourceId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
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

        if (isset($map['SlsIngestionJobName'])) {
            $model->slsIngestionJobName = $map['SlsIngestionJobName'];
        }

        if (isset($map['SrcDataType'])) {
            $model->srcDataType = $map['SrcDataType'];
        }

        return $model;
    }
}

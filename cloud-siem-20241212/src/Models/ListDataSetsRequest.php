<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ListDataSetsRequest extends Model
{
    /**
     * @var string
     */
    public $dataSetId;

    /**
     * @var string[]
     */
    public $dataSetIds;

    /**
     * @var string
     */
    public $dataSetName;

    /**
     * @var int
     */
    public $dataSetStatus;

    /**
     * @var string
     */
    public $dataSetType;

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
    public $orderDirection;

    /**
     * @var string
     */
    public $orderFieldName;

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
    protected $_name = [
        'dataSetId' => 'DataSetId',
        'dataSetIds' => 'DataSetIds',
        'dataSetName' => 'DataSetName',
        'dataSetStatus' => 'DataSetStatus',
        'dataSetType' => 'DataSetType',
        'lang' => 'Lang',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orderDirection' => 'OrderDirection',
        'orderFieldName' => 'OrderFieldName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
        if (\is_array($this->dataSetIds)) {
            Model::validateArray($this->dataSetIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSetId) {
            $res['DataSetId'] = $this->dataSetId;
        }

        if (null !== $this->dataSetIds) {
            if (\is_array($this->dataSetIds)) {
                $res['DataSetIds'] = [];
                $n1 = 0;
                foreach ($this->dataSetIds as $item1) {
                    $res['DataSetIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSetName) {
            $res['DataSetName'] = $this->dataSetName;
        }

        if (null !== $this->dataSetStatus) {
            $res['DataSetStatus'] = $this->dataSetStatus;
        }

        if (null !== $this->dataSetType) {
            $res['DataSetType'] = $this->dataSetType;
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

        if (null !== $this->orderDirection) {
            $res['OrderDirection'] = $this->orderDirection;
        }

        if (null !== $this->orderFieldName) {
            $res['OrderFieldName'] = $this->orderFieldName;
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
        if (isset($map['DataSetId'])) {
            $model->dataSetId = $map['DataSetId'];
        }

        if (isset($map['DataSetIds'])) {
            if (!empty($map['DataSetIds'])) {
                $model->dataSetIds = [];
                $n1 = 0;
                foreach ($map['DataSetIds'] as $item1) {
                    $model->dataSetIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSetName'])) {
            $model->dataSetName = $map['DataSetName'];
        }

        if (isset($map['DataSetStatus'])) {
            $model->dataSetStatus = $map['DataSetStatus'];
        }

        if (isset($map['DataSetType'])) {
            $model->dataSetType = $map['DataSetType'];
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

        if (isset($map['OrderDirection'])) {
            $model->orderDirection = $map['OrderDirection'];
        }

        if (isset($map['OrderFieldName'])) {
            $model->orderFieldName = $map['OrderFieldName'];
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
